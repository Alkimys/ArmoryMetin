<p>
    <h2>Rechercher un joueur</h2>
    <form action="index.php?p=armory_search" method="post">
        <label for="perso">Trouver un joueur :</label><br/><br/>
        <input class="thell" type="text" size="30" name="perso" />
        <br /><br />
        <center><input type="submit" class="button" value="Trouver" /></center>
    </form>
</p>

<?php

if(!empty($_POST['perso']) or !empty($_GET['n']))  //Si et seulement si on a une requête ou un changement de page
{

    //Soit on lance la recherche, soit on navigue dedans
    if(isset($_POST['perso'])) {$perso=$_POST['perso'];}
    else {$perso=$_GET['n'];}
    
    if(!empty($perso))
    {$name = '%'.mysql_real_escape_string($perso).'%';}
    else {$name = "%"; }
    
    mysql_select_db('player'); // On séléctionne la base de données
    $retour = mysql_query("SELECT COUNT(*) AS nb_perso FROM player WHERE name LIKE '$name' AND name NOT IN(SELECT mName FROM common.gmlist)"); // On recherche le nombre de résultats
    $donnees = mysql_fetch_array($retour); // On l'affecte à un array.
    
    //On donne le Nombre total de joueurs
    $total = $donnees['nb_perso'];
    //On donne le Rang à partir du quel on affiche le classement
    if(isset($_GET['r']) and $_GET['r']>0 and is_numeric($_GET['r']) and $_GET['r'] < 1000){$rang=$_GET['r'];} else {$rang=0;}
    //On donne le Nombre de joueurs à afficher dans le classement
    $nb_persos_page = 5;
    //On donne la variable pour la Page suivante
    $next_rang=$rang+$nb_persos_page;
    //On donne la variable pour la Page précédente
    $prev_rang=$rang-$nb_persos_page;

    //On refait une requête, celle-ci sans demander un nombre total mais pour demander des valeurs.
    $requette2 = ("SELECT * FROM player WHERE name LIKE '$name' AND name NOT IN(SELECT mName FROM common.gmlist) ORDER By name DESC LIMIT $rang, $nb_persos_page"); 
    $sql2 = mysql_query($requette2) or die('Erreur SQL !<br />'.$requette2.'<br />'.mysql_error()); 
echo '
<table align="center">
  <tr align="center">
    <th>Rang</th>
    <th>Pseudo</th>
    <th>Level</th>
    <th>Acc&egrave;s Page Perso</th>
	<th>Autorisation de voir le stuff</th>
  </tr>';

    while(($data = mysql_fetch_array($sql2))) //Tant qu'il y a des lignes dans la requête, dans la limite du nombre total de joueur et de celui par page.
        {
            $rang++;//On incrémente le nombre de rang
            $name = $data['name']; //On demande le nom
            $level = $data['level']; //On demande le niveau
			if ($data['enabled_armory']==0) {
				$autorisation="Non";
			} else {
				$autorisation="Oui";
			}
    //On affiche la ligne du tableau
    echo "
          <tr align='center'>
            <td>$rang</td>
            <td>$name</td>
            <td>$level</td>
            <td><a href='index.php?p=armory&name=$name'>> ></a></td>
			<td>$autorisation</td>
          </tr>
    ";

        }
  //Si le total est égal à 0, on note qu'il n'y a pas de résultats.
  if ($total == '0') {
    echo'
      <tr>
        <td colspan="4"><div align="center">Aucun r&eacute;sultat </div></td>
      </tr>
    ';
  }
  echo '
</table>
<div align="center">
  ';
if ($prev_rang >= '0') { //On affiche la page précédente si (le rang actuellement affiché - le nombre de persos par page) est supérieur ou égal à 0.
echo "<a href='index.php?p=armory_search&amp;r=$prev_rang&amp;n=$perso'>Page pr&eacute;c&eacute;dente</a> |";
}

if ($next_rang < $total) { //On affiche la page suivante si le total est supérieur au rang actuellement affiché
echo"| <a href='index.php?p=armory_search&amp;r=$next_rang&amp;n=$perso'>Page suivante</a>";
}

    if ($total == '0') { //Si le total est égal à 0
echo"</div>"; }
elseif ($total == '1') { //Si il est égal à 1
echo"<p><center><em style='font-family:Stardos Stencil;'>Total : 1 joueur trouv&eacute;.</em></center></p>
</div>"; }
else { //Sinon
  echo"<p><center><em style='font-family:Stardos Stencil;'>Total : $total joueur(s) trouv&eacute;(s).</em></center></p>
</div>"; }

}//On ferme le 'si' du début
?>