<?php
// On inclue les fichiers requits
    require('includes.php');
    require('heaumes.php');
    require('armes.php');
    require('armures.php');
    require('boucliers.php');
    require('colliers.php');
    require('chaussures.php');
    require('bracelets.php');
    require('boucles_oreilles.php');
    error_reporting(0);
?>

<div id="inventaire"> <!-- L'inventaire est créé -->
    <?php if($name_arme != '') { ?>
    <div onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" style="cursor:pointer;" title="
        <table>
        <tr>
            <td colspan='2'><font style='color:rgba(200,255,200,1); text-align:center;'><?php echo "$name_arme"; echo " (lv. "; echo "$niveau"; echo " )"; ?></font></td>
        </tr>
            <?php if($attakMin != '' && $attakMin != '0'){ ?> <tr><td colspan='2' align='center'>Valeur d&#146;attaque <?php echo "$attakMin"; ?> - <?php echo "$attakMax"; ?></td></tr><?php } ?>
            <?php if($magikMin != '' && $magikMin != '0'){ ?> <tr><td colspan='2' align='center'>Valeur d&#146;attaque Magique <?php echo "$magikMin"; ?> - <?php echo "$magikMax"; ?></td></tr><?php } ?>
    <?php
    if ($bonus_1 != '' && $bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bonus_1"; ?></td>
            <td width='50px'><?php echo "$bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bonus_2 != '' && $bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bonus_2"; ?></td>
            <td><?php echo "$bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bonus_3 != '' && $bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bonus_3"; ?></td>
            <td><?php echo "$bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($n_bonus_1 != '' && $n_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_1"; ?></td>
            <td><?php echo "$n_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($n_bonus_2 != '' && $n_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_2"; ?></td>
            <td><?php echo "$n_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($n_bonus_3 != '' && $n_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_3"; ?></td>
            <td><?php echo "$n_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($n_bonus_4 != '' && $n_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_4"; ?></td>
            <td><?php echo "$n_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($n_bonus_5 != '' && $n_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_5"; ?></td>
            <td><?php echo "$n_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($n_bonus_6 != '' && $n_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_6"; ?></td>
            <td><?php echo "$n_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($n_bonus_7 != '' && $n_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$n_bonus_7"; ?></td>
            <td><?php echo "$n_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$race"; ?></td>
        </tr>
    <?php
    if ($pierre_1 != '' && $pierre_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$pierre_1"; ?></td>
            <td><?php echo "$pierre_1_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($pierre_2 != '' && $pierre_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$pierre_2"; ?></td>
            <td><?php echo "$pierre_2_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($pierre_3 != '' && $pierre_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$pierre_3"; ?></td>
            <td><?php echo "$pierre_3_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    " id="data-arme"><img src="includes-armory/img/items/<?php echo "$arme"; ?>.png" alt="" /></div>
     <?php
    }
    ?>

    <?php
    if($name_heaume != '') { 
    ?>
    <div id ="data-heaume" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_heaume"; echo " (lv. "; echo "$hlvl"; echo " )"; ?></font></td>
        </tr>
        <tr>
            <td>D&eacute;fense :</td>
            <td><?php echo "$hdef"; ?></td>
        </tr>
    <?php
    if ($hbonus_1 != '' && $hbonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hbonus_1"; ?></td>
            <td width='50px'><?php echo "$hbonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hbonus_2 != '' && $hbonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hbonus_2"; ?></td>
            <td><?php echo "$hbonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hbonus_3 != '' && $hbonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hbonus_3"; ?></td>
            <td><?php echo "$hbonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($hn_bonus_1 != '' && $hn_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_1"; ?></td>
            <td><?php echo "$hn_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($hn_bonus_2 != '' && $hn_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_2"; ?></td>
            <td><?php echo "$hn_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hn_bonus_3 != '' && $hn_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_3"; ?></td>
            <td><?php echo "$hn_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hn_bonus_4 != '' && $hn_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_4"; ?></td>
            <td><?php echo "$hn_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hn_bonus_5 != '' && $hn_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_5"; ?></td>
            <td><?php echo "$hn_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hn_bonus_6 != '' && $hn_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_6"; ?></td>
            <td><?php echo "$hn_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($hn_bonus_7 != '' && $hn_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$hn_bonus_7"; ?></td>
            <td><?php echo "$hn_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$hrace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$heaume"; ?>.png" alt="" /></div>
    <?php
    }
    ?>

    <?php
    if($name_armure != '') { 
    ?>
    <div id ="data-armure" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_armure"; echo " (lv. "; echo "$aniveau"; echo " )"; ?></font></td>
        </tr>
            <?php if($def_armure != '' && $def_armure != '0'){ ?><tr><td colspan='2' align='center'>D&eacute;fense : <?php echo "$def_armure"; ?></td></tr><?php } ?>
    <?php
    if ($abonus_1 != '' && $abonus_1 != 'Rien' && $abonus_1_v != '0 %' && $abonus_1_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$abonus_1"; ?></td>
            <td width='50px'><?php echo "$abonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($abonus_2 != '' && $abonus_2 != 'Rien' && $abonus_2_v != '0 %' && $abonus_2_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$abonus_2"; ?></td>
            <td><?php echo "$abonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($abonus_3 != '' && $abonus_3 != 'Rien' && $abonus_3_v != '0 %' && $abonus_3_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$abonus_3"; ?></td>
            <td><?php echo "$abonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($an_bonus_1 != '' && $an_bonus_1 != 'Rien' && $an_bonus_1_v != '0 %' && $an_bonus_1_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_1"; ?></td>
            <td><?php echo "$an_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($an_bonus_2 != '' && $an_bonus_2 != 'Rien' && $an_bonus_2_v != '0 %' && $an_bonus_2_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_2"; ?></td>
            <td><?php echo "$an_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($an_bonus_3 != '' && $an_bonus_3 != 'Rien' && $an_bonus_3_v != '0 %' && $an_bonus_3_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_3"; ?></td>
            <td><?php echo "$an_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($an_bonus_4 != '' && $an_bonus_4 != 'Rien' && $an_bonus_4_v != '0 %' && $an_bonus_4_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_4"; ?></td>
            <td><?php echo "$an_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($an_bonus_5 != '' && $an_bonus_5 != 'Rien' && $an_bonus_5_v != '0 %' && $an_bonus_5_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_5"; ?></td>
            <td><?php echo "$an_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($an_bonus_6 != '' && $an_bonus_6 != 'Rien' && $an_bonus_6_v != '0 %' && $an_bonus_6_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_6"; ?></td>
            <td><?php echo "$an_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($an_bonus_7 != '' && $an_bonus_7 != 'Rien' && $an_bonus_7_v != '0 %' && $an_bonus_7_v != '0')
    {
    ?>
        <tr>
            <td><?php echo "$an_bonus_7"; ?></td>
            <td><?php echo "$an_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$arace"; ?></td>
        </tr>
    <?php
    if ($apierre_1 != '' && $apierre_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$apierre_1"; ?></td>
            <td><?php echo "$apierre_1_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($apierre_2 != '' && $apierre_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$apierre_2"; ?></td>
            <td><?php echo "$apierre_2_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($apierre_3 != '' && $apierre_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$apierre_3"; ?></td>
            <td><?php echo "$apierre_3_img"; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$armure"; ?>.png" alt="" /></div>
    <?php
    }
    ?>
    <?php
    if($name_bouclier != '') { 
    ?>
    <div id ="data-bouclier" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_bouclier"; echo " (lv. "; echo "$bblvl"; echo " )"; ?></font></td>
        </tr>
        <tr>
            <td>D&eacute;fense :</td>
            <td><?php echo "$bbdef"; ?></td>
        </tr>
    <?php
    if ($bbbonus_1 != '' && $bbbonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbbonus_1"; ?></td>
            <td width='50px'><?php echo "$bbbonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbbonus_2 != '' && $bbbonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbbonus_2"; ?></td>
            <td><?php echo "$bbbonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbbonus_3 != '' && $bbbonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbbonus_3"; ?></td>
            <td><?php echo "$bbbonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($bbn_bonus_1 != '' && $bbn_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_1"; ?></td>
            <td><?php echo "$bbn_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($bbn_bonus_2 != '' && $bbn_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_2"; ?></td>
            <td><?php echo "$bbn_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbn_bonus_3 != '' && $bbn_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_3"; ?></td>
            <td><?php echo "$bbn_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbn_bonus_4 != '' && $bbn_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_4"; ?></td>
            <td><?php echo "$bbn_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbn_bonus_5 != '' && $bbn_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_5"; ?></td>
            <td><?php echo "$bbn_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbn_bonus_6 != '' && $bbn_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_6"; ?></td>
            <td><?php echo "$bbn_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bbn_bonus_7 != '' && $bbn_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bbn_bonus_7"; ?></td>
            <td><?php echo "$bbn_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$bbrace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$bouclier"; ?>.png" alt="" /></div>
    <?php
    }
    ?>
    <?php
    if($name_bracelet != '') { 
    ?>
    <div id ="data-bracelet" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_bracelet"; echo " (lv. "; echo "$bralvl"; echo " )"; ?></font></td>
        </tr>
    <?php
    if ($brabonus_1 != '' && $brabonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$brabonus_1"; ?></td>
            <td width='50px'><?php echo "$brabonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($brabonus_2 != '' && $brabonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$brabonus_2"; ?></td>
            <td><?php echo "$brabonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($brabonus_3 != '' && $brabonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$brabonus_3"; ?></td>
            <td><?php echo "$brabonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($bran_bonus_1 != '' && $bran_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_1"; ?></td>
            <td><?php echo "$bran_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($bran_bonus_2 != '' && $bran_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_2"; ?></td>
            <td><?php echo "$bran_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bran_bonus_3 != '' && $bran_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_3"; ?></td>
            <td><?php echo "$bran_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bran_bonus_4 != '' && $bran_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_4"; ?></td>
            <td><?php echo "$bran_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bran_bonus_5 != '' && $bran_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_5"; ?></td>
            <td><?php echo "$bran_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bran_bonus_6 != '' && $bran_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_6"; ?></td>
            <td><?php echo "$bran_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($bran_bonus_7 != '' && $bran_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$bran_bonus_7"; ?></td>
            <td><?php echo "$bran_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$brarace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$bracelet"; ?>.png" alt="" /></div>
    <?php
    }
    ?>

    <?php
    if($name_collier != '') { 
    ?>
    <div id ="data-collier" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_collier"; echo " (lv. "; echo "$collvl"; echo " )"; ?></font></td>
        </tr>
    <?php
    if ($colbonus_1 != '' && $colbonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$colbonus_1"; ?></td>
            <td width='50px'><?php echo "$colbonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($colbonus_2 != '' && $colbonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$colbonus_2"; ?></td>
            <td><?php echo "$colbonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($colbonus_3 != '' && $colbonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$colbonus_3"; ?></td>
            <td><?php echo "$colbonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($coln_bonus_1 != '' && $coln_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_1"; ?></td>
            <td><?php echo "$coln_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($coln_bonus_2 != '' && $coln_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_2"; ?></td>
            <td><?php echo "$coln_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($coln_bonus_3 != '' && $coln_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_3"; ?></td>
            <td><?php echo "$coln_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($coln_bonus_4 != '' && $coln_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_4"; ?></td>
            <td><?php echo "$coln_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($coln_bonus_5 != '' && $coln_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_5"; ?></td>
            <td><?php echo "$coln_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($coln_bonus_6 != '' && $coln_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_6"; ?></td>
            <td><?php echo "$coln_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($coln_bonus_7 != '' && $coln_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$coln_bonus_7"; ?></td>
            <td><?php echo "$coln_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$colrace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$collier"; ?>.png" alt="" /></div>
    <?php
    }
    ?>


    <?php
    if($name_chaussures != '') { 
    ?>
    <div id ="data-chaussure" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_chaussures"; echo " (lv. "; echo "$chaulvl"; echo " )"; ?></font></td>
        </tr>
    <?php
    if ($chaubonus_1 != '' && $chaubonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaubonus_1"; ?></td>
            <td width='50px'><?php echo "$chaubonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaubonus_2 != '' && $chaubonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaubonus_2"; ?></td>
            <td><?php echo "$chaubonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaubonus_3 != '' && $chaubonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaubonus_3"; ?></td>
            <td><?php echo "$chaubonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($chaun_bonus_1 != '' && $chaun_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_1"; ?></td>
            <td><?php echo "$chaun_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($chaun_bonus_2 != '' && $chaun_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_2"; ?></td>
            <td><?php echo "$chaun_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaun_bonus_3 != '' && $chaun_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_3"; ?></td>
            <td><?php echo "$chaun_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaun_bonus_4 != '' && $chaun_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_4"; ?></td>
            <td><?php echo "$chaun_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaun_bonus_5 != '' && $chaun_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_5"; ?></td>
            <td><?php echo "$chaun_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaun_bonus_6 != '' && $chaun_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_6"; ?></td>
            <td><?php echo "$chaun_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($chaun_bonus_7 != '' && $chaun_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$chaun_bonus_7"; ?></td>
            <td><?php echo "$chaun_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$chaurace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$chaussures"; ?>.png" alt="" /></div>
    <?php
    }
    ?>


    <?php
    if($name_boucles != '') { 
    ?>
    <div id ="data-boucle" onmouseover="tooltip.show(this)" onmouseout="tooltip.hide(this)" title="
    <table>
        <tr>
            <td colspan='2' style='text-align:center;'><font style='color:rgba(200,255,200,1);'><?php echo "$name_boucles"; echo " (lv. "; echo "$boolvl"; echo " )"; ?></font></td>
        </tr>
    <?php
    if ($boobonus_1 != '' && $boobonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boobonus_1"; ?></td>
            <td width='50px'><?php echo "$boobonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boobonus_2 != '' && $boobonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boobonus_2"; ?></td>
            <td><?php echo "$boobonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boobonus_3 != '' && $boobonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boobonus_3"; ?></td>
            <td><?php echo "$boobonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($boon_bonus_1 != '' && $boon_bonus_1 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_1"; ?></td>
            <td><?php echo "$boon_bonus_1_v"; ?></td>
        </tr>
    <?php
    }
    ?>

    <?php
    if ($boon_bonus_2 != '' && $boon_bonus_2 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_2"; ?></td>
            <td><?php echo "$boon_bonus_2_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boon_bonus_3 != '' && $boon_bonus_3 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_3"; ?></td>
            <td><?php echo "$boon_bonus_3_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boon_bonus_4 != '' && $boon_bonus_4 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_4"; ?></td>
            <td><?php echo "$boon_bonus_4_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boon_bonus_5 != '' && $boon_bonus_5 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_5"; ?></td>
            <td><?php echo "$boon_bonus_5_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boon_bonus_6 != '' && $boon_bonus_6 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_6"; ?></td>
            <td><?php echo "$boon_bonus_6_v"; ?></td>
        </tr>
    <?php
    }
    ?>
    <?php
    if ($boon_bonus_7 != '' && $boon_bonus_7 != 'Rien')
    {
    ?>
        <tr>
            <td><?php echo "$boon_bonus_7"; ?></td>
            <td><?php echo "$boon_bonus_7_v"; ?></td>
        </tr>
    <?php
    }
    ?>
        <tr>
            <td colspan='2' align='center'>[Portable]</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><?php echo "$boorace"; ?></td>
        </tr>
    </table>
    " style="cursor:pointer;"><img src="includes-armory/img/items/<?php echo "$boucles"; ?>.png" alt="" /></div>
    <?php
    }
    ?>
</div> <!-- On ferme l'inventaire -->