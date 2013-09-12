	<div id="tooltip"></div>
<?php

require('include-armory/php/includes.php'); //On inclue les array dans le fichier crÃ©Ã© pour Ã§a

            $perso=$_GET['name']; //On nomme la variable qui contient le nom du joueur

        if(!empty($perso)) { $name = mysql_real_escape_string($perso); $valid = '1'; } else { $valid = '0'; } //Si cette variable n'est pas nul, on valide et on protÃ¨ge le nom

            $requette_name = mysql_query("SELECT mName FROM common.gmlist WHERE mName='$name'"); $sql_name = mysql_num_rows($requette_name); //On vÃ©rifie que le joueur n'est pas un GM

        if ($valid == '1' && $sql_name == '0') { //Si le joueur n'est pas un GM et que l'on ait validÃ© le nom
            
            //On lance la requÃªte pour avoir les informations du compte
            $requette = ("SELECT * FROM player.player WHERE name LIKE '$name' AND name NOT IN(SELECT mName FROM common.gmlist)"); $sql = mysql_query($requette) or die('Erreur SQL !<br />'.$requette.'<br />'.mysql_error()); 
            
            //On lance la variable Tant que...    
            while(($data = mysql_fetch_array($sql)))
                {
                    $job = $data['job']; //On dÃ©nomine la classe,
                    $level = $data['level']; //Le niveau,
                    $player_id = $data['id']; //L'id
                    $align_v = $data['alignment']; //L'alignement
					$strong = $data['st'];
					$dex = $data['dx'];
					$vita = $data['ht'];
					$magie = $data['iq'];
					$hp = $data['hp'];
					$mp = $data['mp'];
					$stamina = $data['stamina'];
					$playtime = $data['playtime'];
						$heures=intval($playtime / 60);
						$heures=$heures."h";
						$minutes=(($playtime / 60) - ($playtime % 60));
						if (strlen(trim($minutes)) == 1) {
							$minutes = "0".$minutes;
						}
						if ($heures <= 0) {
							$heures="";
						}

                    //On sÃ©lÃ©ctionne l'empire
                    $requette3 = ("SELECT empire FROM player.player_index WHERE id = ".$data['account_id']); 
                    $sql3 = mysql_query($requette3) or die(mysql_error());
                    $data3 = mysql_fetch_array($sql3);
                    $empire = $data3['empire'];
             
                    //On regarde si le joueur est dans une guilde
                    $requette4 = ("SELECT name FROM player.guild WHERE id = (SELECT guild_id FROM player.guild_member WHERE pid = '$player_id')"); 
                    $sql4 = mysql_query($requette4);
                    $data4 = mysql_fetch_array($sql4);
                    $guild = $data4['name'];
                    
                    //On assigne le nom de la guilde au joueur, s'il en fait parti
                    if ($guild != null) { $guilde = $data4['name']; }else{ $guilde = 'Aucune Guilde'; }
					
						$temps_connexion = 400; //100 Secondes (TrÃ¨s imprÃ©cis)
						$timestamp = time()-$temps_connexion;
						$retour = mysql_query("SELECT last_play 
						FROM player.player 
						WHERE (UNIX_TIMESTAMP(`last_play`) >= $timestamp) 
						AND account_id = ".$data['account_id']);
						if($donnees=mysql_fetch_array($retour)) {
							$donnees="<font color=\"green\">En Ligne</font>";
						} else { $donnees="<font color=\"red\">Hors Ligne</font>"; }
                }

                $img_job = $job; //On copie la valeur de $job pour la sauvegarder.
                $empire = $empire_array[$empire]; //On donne une valeur texte Ã  l'empire grÃ¢ce Ã  l'array $empire_array prÃ©sent dans le includes.php
                $job = $job_array[$job]; //On fait la mÃªme chose pour la classe
                $image = $image_array[$img_job]; //On rÃ©cupÃ¨re la copie de la variable de classe pour donner l'image
					
            //On s'occupe de l'alignement
            if ($align_v >= 120000){ //Si l'alignement est celui de Chevalier
                $align = "<font style='color:rgb(0, 204, 255);'>[Chevalier]</font>";
            }
        elseif ($align_v >= 80000 && $align_v <= 119999){ //Si le joueur est Noble
                $align = "<font style='color:rgb(0, 144, 255);'>[Noble]</font>";
            }
        elseif ($align_v >= 40000 && $align_v <= 79999){ //S'il est Bon
                $align = "<font style='color:rgb(92, 110, 255);'>[Bon]</font>";
            }
        elseif ($align_v >= 10000 && $align_v <= 39999){ //S'il est Amical
                $align = "<font style='color:rgb(155, 155, 255);'>[Amical]</font>";
            }
        elseif ($align_v >=0 && $align_v <= 9999){ //S'il est Neutre
                $align = "<font style='color:grey;'>[Neutre]</font>";
            }
        elseif ($align_v <= -1 && $align_v >= -39999){ //S'il est Agressif
                $align = "<font style='color:rgb(207, 117, 0);'>[Agressif]</font>";
            }
        elseif ($align_v <= -40000 && $align_v >= -79999){ //S'il est Retord
                $align = "<font style='color:rgb(235, 83, 0);'>[Retord]</font>";
            }
        elseif ($align_v <= -80000 && $align_v >= -119999){ //S'il est Malicieux
                $align = "<font style='color:rgb(227, 0, 0);'>[Malicieux]</font>";
            }
        elseif ($align_v <= -120000){ //Et enfin, s'il est Cruel
                $align = "<font style='color:rgb(255, 0, 0);'>[Cruel]</font>";
            }
					
// On affiche le tableau
$perso=mysql_real_escape_string($_GET['name']);
	$disabled_query=mysql_query("SELECT enabled_armory FROM player.player WHERE name='$perso'");
	$disabled=mysql_fetch_array($disabled_query);
	if ($disabled['enabled_armory'] == 1  ) {
?>
<table width="70%" border="0">
    <tr>
        <td colspan="4" align="center"><h2 style="border-bottom:none;"><?php echo "$align $name"; ?></h2><br/></td>
    </tr>
    <tr>
        
        <td valign="middle" align="center" rowspan="5" colspan="2"><img  src="<?php echo"$image"; ?>" style="border:none;" alt="" /></td>
        <td  colspan="2" valign="right" align="center"><?php include('include-armory/php/stuff.php') ?></td>
    </tr>
	
    <tr valign="right" border="1">
        <td>Level:</td><td align="center"><?php echo "$level"; ?></td>
    </tr>
    <tr valign="right"border="1">
        <td>Guilde:</td><td align="center"><?php echo "$guilde"; ?></td>
    </tr>
    <tr valign="right"border="1">
        <td>Royaume:</td><td align="center"><?php
					if ($empire=="Shinsoo") {
						$empire='<img src="http://arkange-online.fr/site/style/default/red.jpg"/>'; }
					elseif($empire=="Chunjo") {
						$empire='<img src="http://arkange-online.fr/site/style/default/yellow.jpg"/>'; }
					else { 
						$empire='<img src="http://arkange-online.fr/site/style/default/blue.jpg"/>'; } 
						
					echo "$empire"; ?></td>
    </tr>
	<tr valign="right"><td>Status :</td><td align="center"><?php echo "$donnees"; ?></td>
	</tr>
	<tr valign="right"><td>Temps en ligne :</td><td align="center"><?php echo ($heures); ?></td>
	</tr>
	<tr valign="right">
        <td>Points de Vie :</td><td align="center"><?php echo"$hp"; ?></td>
    </tr>
	<tr valign="right">
        <td>Points de Magie :</td><td align="center"><?php echo"$mp"; ?></td>
    </tr>
	<tr valign="right">
        <td>Endurance :</td><td align="center"><?php echo"$stamina"; ?></td>
    </tr>
   <tr valign="right">
        <td>Vitalité :</td><td align="center"><?php echo"$vita"; ?></td>
    </tr>
	<tr valign="right">
        <td>Magie :</td><td align="center"><?php echo"$magie"; ?></td>
    </tr>
	<tr valign="right">
        <td>Dexterité :</td><td align="center"><?php echo"$dex"; ?></td>
    </tr>
	<tr valign="right">
        <td>Force :</td><td align="center"><?php echo"$strong"; ?></td>
    </tr>
	<tr><td></td></tr>
</table>
<a href="index.php?p=armory_search">Retour</a>
<?php } elseif($rang_membre >= 3) {
	?>
	Vu en mode Staff ! :
<table width="70%" border="0">
    <tr>
        <td colspan="4" align="center"><h2 style="border-bottom:none;"><?php echo "$align $name"; ?></h2><br/></td>
    </tr>
    <tr>
        
        <td valign="middle" align="center" rowspan="5" colspan="2"><img  src="<?php echo"$image"; ?>" style="border:none;" alt="" /></td>
        <td  colspan="2" valign="right" align="center"><?php include('include-armory/php/stuff.php') ?></td>
    </tr>
	
    <tr valign="right" border="1">
        <td>Level:</td><td align="center"><?php echo "$level"; ?></td>
    </tr>
    <tr valign="right"border="1">
        <td>Guilde:</td><td align="center"><?php echo "$guilde"; ?></td>
    </tr>
    <tr valign="right"border="1">
        <td>Royaume:</td><td align="center"><?php
					if ($empire=="Shinsoo") {
						$empire='<img src="http://arkange-online.fr/site/style/default/red.jpg"/>'; }
					elseif($empire=="Chunjo") {
						$empire='<img src="http://arkange-online.fr/site/style/default/yellow.jpg"/>'; }
					else { 
						$empire='<img src="http://arkange-online.fr/site/style/default/blue.jpg"/>'; } 
						
					echo "$empire"; ?></td>
    </tr>
	<tr valign="right"><td>Status :</td><td align="center"><?php echo "$donnees"; ?></td>
	</tr>
	<tr valign="right"><td>Temps en ligne :</td><td align="center"><?php echo ($heures); ?></td>
	</tr>
   <tr valign="right">
        <td>Vitalité :</td><td align="center"><?php echo"$vita"; ?></td>
    </tr>
	<tr valign="right">
        <td>Magie :</td><td align="center"><?php echo"$magie"; ?></td>
    </tr>
	<tr valign="right">
        <td>Dexterité :</td><td align="center"><?php echo"$dex"; ?></td>
    </tr>
	<tr valign="right">
        <td>Force :</td><td align="center"><?php echo"$strong"; ?></td>
    </tr>
	<tr><td></td></tr>
</table>
<a href="index.php?p=armory_search">Retour</a>
<?php } else  { echo ("<center>" . $_GET['name'] . " ne souhaite pas partager son stuff !</center>"); }
        } elseif ($sql_name == '1') { //Si on sÃ©lÃ©ctionne un membre du Staff
?>
<p>
    <div class="error">
        <p>Le personnage ne peut &ecirc;tre un membre du staff.</p>
        <p>Redirection vers l'accueil dans 3 secondes.</p>
    </div>

<meta http-equiv="refresh" content="3; url=index.php" />

</p>
<?php
        } elseif($valid == '0') { //Si aucun personnage n'est sÃ©lÃ©ctionnÃ©
?>
<p>
    <div class="error">
        <p>Aucun personnage n'est s&eacute;l&eacute;ctionn&eacute;.</p>
        <p>Redirection vers l'accueil dans 3 secondes.</p>
    </div>

<meta http-equiv="refresh" content="3; url=index.php" />

</p>
<?php
        } // On clotÃ»re la page.
	
?>
