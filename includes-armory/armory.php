<div id="tooltip"></div>
<?php
require('includes-armory/php/includes.php'); //On inclue les array dans le fichier créé pour ça

            $perso=$_GET['name']; //On nomme la variable qui contient le nom du joueur

        if(!empty($perso)) { $name = mysql_real_escape_string($perso); $valid = '1'; } else { $valid = '0'; } //Si cette variable n'est pas nul, on valide et on protège le nom

            $requette_name = mysql_query("SELECT mName FROM common.gmlist WHERE mName='$name'"); $sql_name = mysql_num_rows($requette_name); //On vérifie que le joueur n'est pas un GM

        if ($valid == '1' && $sql_name == '0') { //Si le joueur n'est pas un GM et que l'on ait validé le nom
            
            //On lance la requête pour avoir les informations du compte
            $requette = ("SELECT * FROM player.player WHERE name LIKE '$name' AND name NOT IN(SELECT mName FROM common.gmlist)"); $sql = mysql_query($requette) or die('Erreur SQL !<br />'.$requette.'<br />'.mysql_error()); 
            
            //On lance la variable Tant que...    
            while(($data = mysql_fetch_array($sql)))
                {
                    $job = $data['job']; //On dénomine la classe,
                    $level = $data['level']; //Le niveau,
                    $player_id = $data['id']; //L'id
                    $align_v = $data['alignment']; //L'alignement

                    //On séléctionne l'empire
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
                }

                $img_job = $job; //On copie la valeur de $job pour la sauvegarder.
                $empire = $empire_array[$empire]; //On donne une valeur texte à l'empire grâce à l'array $empire_array présent dans le includes.php
                $job = $job_array[$job]; //On fait la même chose pour la classe
                $image = $image_array[$img_job]; //On récupère la copie de la variable de classe pour donner l'image

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
                $align = "<font style='color:rgb(0, 0, 0);'>[Neutre]</font>";
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
?>
<table width="70%" border="0">
    <tr>
        <td colspan="4" align="center"><h2 style="border-bottom:none;"><?php echo "$align $name"; ?></h2></td>
    </tr>
    <tr>
        
        <td valign="middle" align="center" rowspan="5" colspan="2"><img  src="<?php echo"$image"; ?>" style="border:none;" alt="" /></td>
        <td rowspan="1" colspan="2" valign="right" align="center"><?php include('includes-armory/php/stuff.php') ?></td>
    </tr>

    <tr valign="right">
        <td>Level:</td><td align="center"><?php echo "$level"; ?></td>
    </tr>
    <tr valign="right">
        <td>Guilde:</td><td align="center"><?php echo "$guilde"; ?></td>
    </tr>
    <tr valign="right">
        <td>Royaume:</td><td align="center"><?php echo "$empire"; ?></td>
    </tr>
    <tr valign="right">
        <td>Race:</td><td align="center"><?php echo"$job"; ?></td>
    </tr>
</table>
<?php
        } elseif ($sql_name == '1') { //Si on séléctionne un membre du Staff
?>
<p>
    <div class="error">
        <p>Le personnage ne peut &ecirc;tre un membre du staff.</p>
        <p>Redirection vers l'accueil dans 3 secondes.</p>
    </div>

<meta http-equiv="refresh" content="3; url=index.php" />

</p>
<?php
        } elseif($valid == '0') { //Si aucun personnage n'est séléctionné
?>
<p>
    <div class="error">
        <p>Aucun personnage n'est s&eacute;l&eacute;ctionn&eacute;.</p>
        <p>Redirection vers l'accueil dans 3 secondes.</p>
    </div>

<meta http-equiv="refresh" content="3; url=index.php" />

</p>
<?php
        } // On clotûre la page.
?>