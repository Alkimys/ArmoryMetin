<?php
/* Bracelets */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '3' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$bracelet = $data['vnum'];


    $bran_bonus_1 = $data['attrtype0'];
    $bran_bonus_1_v = $data['attrvalue0'];
    $bran_bonus_2 = $data['attrtype1'];
    $bran_bonus_2_v = $data['attrvalue1'];
    $bran_bonus_3 = $data['attrtype2'];
    $bran_bonus_3_v = $data['attrvalue2'];
    $bran_bonus_4 = $data['attrtype3'];
    $bran_bonus_4_v = $data['attrvalue3'];

    $bran_bonus_5 = $data['attrtype4'];
    $bran_bonus_5_v = $data['attrvalue4'];

    $bran_bonus_6 = $data['attrtype5'];
    $bran_bonus_6_v = $data['attrvalue5'];
    $bran_bonus_7 = $data['attrtype6'];
    $bran_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$bracelet' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {


    $name_bracelet = htmlentities($data1['locale_name']);
    $bralvl = $data1['limitvalue0'];


    $braantiflag = $data1['antiflag'];

    $brabonus_1 = $data1['applytype0'];
    $brabonus_1_v = $data1['applyvalue0'];
    $brabonus_2 = $data1['applytype1'];
    $brabonus_2_v = $data1['applyvalue1'];
    $brabonus_3 = $data1['applytype2'];
    $brabonus_3_v = $data1['applyvalue2'];

}


if($braantiflag == '44' || $braantiflag == '300'){
  $brarace = 'Sura';
}
elseif($braantiflag == '52' || $braantiflag == '308'){
  $brarace = 'Ninja';
}

elseif($braantiflag == '56' || $braantiflag == '312'){
  $brarace = 'Guerrier';
}
elseif($braantiflag == '28' || $braantiflag == '284'){
  $brarace = 'Chamane';
}
elseif($braantiflag == '0' || $braantiflag == '256'){
  $brarace = 'Guerrier Ninja Sura Chamane';
}
elseif($braantiflag == '1'){
  $brarace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($braantiflag == '2'){
  $brarace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($brabonus_1 >= 7 && $brabonus_1 <= 47) {
  $brabonus_1_v = $brabonus_1_v.' %';
}
if ($brabonus_2 >= 7 && $brabonus_2 <= 47) {
  $brabonus_2_v = $brabonus_2_v.' %';
}
if ($brabonus_3 >= 7 && $brabonus_3 <= 47) {
  $brabonus_3_v = $brabonus_3_v.' %';
}


if ($bran_bonus_1 >= '7' && $bran_bonus_1 <= '47') {
  $bran_bonus_1_v = $bran_bonus_1_v.' %';
}
if ($bran_bonus_2 >= '7' && $bran_bonus_2 <= '47') {
  $bran_bonus_2_v = $bran_bonus_2_v.' %';
}
if ($bran_bonus_3 >= '7' && $bran_bonus_3 <= '47') {
  $bran_bonus_3_v = $bran_bonus_3_v.' %';
}
if ($bran_bonus_4 >= '7' && $bran_bonus_4 <= '47') {
  $bran_bonus_4_v = $bran_bonus_4_v.' %';
}
if ($bran_bonus_5 >= '7' && $bran_bonus_5 <= '47') {
  $bran_bonus_5_v = $bran_bonus_5_v.' %';
}
if ($bran_bonus_6 >= '7' && $bran_bonus_6 <= '47') {
  $bran_bonus_6_v = $bran_bonus_6_v.' %';
}
if ($bran_bonus_7 >= '7' && $bran_bonus_7 <= '47') {
  $bran_bonus_7_v = $bran_bonus_7_v.' %';
}

    $brabonus_1 = $itembonus[$brabonus_1];
    $brabonus_2 = $itembonus[$brabonus_2];
    $brabonus_3 = $itembonus[$brabonus_3];
    $bran_bonus_1 = $itembonus[$bran_bonus_1];
    $bran_bonus_2 = $itembonus[$bran_bonus_2];
    $bran_bonus_3 = $itembonus[$bran_bonus_3];
    $bran_bonus_4 = $itembonus[$bran_bonus_4];
    $bran_bonus_5 = $itembonus[$bran_bonus_5];
    $bran_bonus_6 = $itembonus[$bran_bonus_6];
    $bran_bonus_7 = $itembonus[$bran_bonus_7];

	if($brabonus_1_v >= '0') { $bracolor='color:rgba(200,255,200,1)'; } else { $bracolor='color:#e57875'; }
	if($brabonus_2_v >= '0') { $bracolor2='color:rgba(200,255,200,1)'; } else { $bracolor2='color:#e57875'; }
	if($brabonus_3_v >= '0') { $bracolor3='color:rgba(200,255,200,1)'; } else { $bracolor3='color:#e57875'; }
	
	if($bran_bonus_1_v >= '0') { $bracolor4='color:rgba(200,255,200,1)'; } else { $bracolor4='color:#e57875'; }
	if($bran_bonus_2_v >= '0') { $bracolor5='color:rgba(200,255,200,1)'; } else { $bracolor5='color:#e57875'; }
	if($bran_bonus_3_v >= '0') { $bracolor6='color:rgba(200,255,200,1)'; } else { $bracolor6='color:#e57875'; }
	if($bran_bonus_4_v >= '0') { $bracolor7='color:rgba(200,255,200,1)'; } else { $bracolor7='color:#e57875'; }
	if($bran_bonus_5_v >= '0') { $bracolor8='color:rgba(200,255,200,1)'; } else { $bracolor8='color:#e57875'; }
	if($bran_bonus_6_v >= '0') { $bracolor9='color:rgba(200,255,200,1)'; } else { $bracolor9='color:#e57875'; }
	if($bran_bonus_7_v >= '0') { $bracolor10='color:rgba(200,255,200,1)'; } else { $bracolor10='color:#e57875'; }
?>