<?php
/* Colliers */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '5' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$collier = $data['vnum'];


    $coln_bonus_1 = $data['attrtype0'];
    $coln_bonus_1_v = $data['attrvalue0'];
    $coln_bonus_2 = $data['attrtype1'];
    $coln_bonus_2_v = $data['attrvalue1'];
    $coln_bonus_3 = $data['attrtype2'];
    $coln_bonus_3_v = $data['attrvalue2'];
    $coln_bonus_4 = $data['attrtype3'];
    $coln_bonus_4_v = $data['attrvalue3'];

    $coln_bonus_5 = $data['attrtype4'];
    $coln_bonus_5_v = $data['attrvalue4'];

    $coln_bonus_6 = $data['attrtype5'];
    $coln_bonus_6_v = $data['attrvalue5'];
    $coln_bonus_7 = $data['attrtype6'];
    $coln_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$collier' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {


    $name_collier = htmlentities($data1['locale_name']);
    $collvl = $data1['limitvalue0'];


    $colantiflag = $data1['antiflag'];

    $colbonus_1 = $data1['applytype0'];
    $colbonus_1_v = $data1['applyvalue0'];
    $colbonus_2 = $data1['applytype1'];
    $colbonus_2_v = $data1['applyvalue1'];
    $colbonus_3 = $data1['applytype2'];
    $colbonus_3_v = $data1['applyvalue2'];

}


if($colantiflag == '44' || $colantiflag == '300'){
  $colrace = 'Sura';
}
elseif($colantiflag == '52' || $colantiflag == '308'){
  $colrace = 'Ninja';
}

elseif($colantiflag == '56' || $colantiflag == '312'){
  $colrace = 'Guerrier';
}
elseif($colantiflag == '28' || $colantiflag == '284'){
  $colrace = 'Chamane';
}
elseif($colantiflag == '0' || $colantiflag == '256'){
  $colrace = 'Guerrier Ninja Sura Chamane';
}
elseif($colantiflag == '1'){
  $colrace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($colantiflag == '2'){
  $colrace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($colbonus_1 >= 7 && $colbonus_1 <= 47) {
  $colbonus_1_v = $colbonus_1_v.' %';
}
if ($colbonus_2 >= 7 && $colbonus_2 <= 47) {
  $colbonus_2_v = $colbonus_2_v.' %';
}
if ($colbonus_3 >= 7 && $colbonus_3 <= 47) {
  $colbonus_3_v = $colbonus_3_v.' %';
}


if ($coln_bonus_1 >= '7' && $coln_bonus_1 <= '47') {
  $coln_bonus_1_v = $coln_bonus_1_v.' %';
}
if ($coln_bonus_2 >= '7' && $coln_bonus_2 <= '47') {
  $coln_bonus_2_v = $coln_bonus_2_v.' %';
}
if ($coln_bonus_3 >= '7' && $coln_bonus_3 <= '47') {
  $coln_bonus_3_v = $coln_bonus_3_v.' %';
}
if ($coln_bonus_4 >= '7' && $coln_bonus_4 <= '47') {
  $coln_bonus_4_v = $coln_bonus_4_v.' %';
}
if ($coln_bonus_5 >= '7' && $coln_bonus_5 <= '47') {
  $coln_bonus_5_v = $coln_bonus_5_v.' %';
}
if ($coln_bonus_6 >= '7' && $coln_bonus_6 <= '47') {
  $coln_bonus_6_v = $coln_bonus_6_v.' %';
}
if ($coln_bonus_7 >= '7' && $coln_bonus_7 <= '47') {
  $coln_bonus_7_v = $coln_bonus_7_v.' %';
}

    $colbonus_1 = $itembonus[$colbonus_1];
    $colbonus_2 = $itembonus[$colbonus_2];
    $colbonus_3 = $itembonus[$colbonus_3];
    $coln_bonus_1 = $itembonus[$coln_bonus_1];
    $coln_bonus_2 = $itembonus[$coln_bonus_2];
    $coln_bonus_3 = $itembonus[$coln_bonus_3];
    $coln_bonus_4 = $itembonus[$coln_bonus_4];
    $coln_bonus_5 = $itembonus[$coln_bonus_5];
    $coln_bonus_6 = $itembonus[$coln_bonus_6];
    $coln_bonus_7 = $itembonus[$coln_bonus_7];

	if($colbonus_1_v >= '0') { $colcolor='color:rgba(200,255,200,1)'; } else { $colcolor='color:#e57875'; }
	if($colbonus_2_v >= '0') { $colcolor2='color:rgba(200,255,200,1)'; } else { $colcolor2='color:#e57875'; }
	if($colbonus_3_v >= '0') { $colcolor3='color:rgba(200,255,200,1)'; } else { $colcolor3='color:#e57875'; }
	
	if($coln_bonus_1_v >= '0') { $colcolor4='color:rgba(200,255,200,1)'; } else { $colcolor4='color:#e57875'; }
	if($coln_bonus_2_v >= '0') { $colcolor5='color:rgba(200,255,200,1)'; } else { $colcolor5='color:#e57875'; }
	if($coln_bonus_3_v >= '0') { $colcolor6='color:rgba(200,255,200,1)'; } else { $colcolor6='color:#e57875'; }
	if($coln_bonus_4_v >= '0') { $colcolor7='color:rgba(200,255,200,1)'; } else { $colcolor7='color:#e57875'; }
	if($coln_bonus_5_v >= '0') { $colcolor8='color:rgba(200,255,200,1)'; } else { $colcolor8='color:#e57875'; }
	if($coln_bonus_6_v >= '0') { $colcolor9='color:rgba(200,255,200,1)'; } else { $colcolor9='color:#e57875'; }
	if($coln_bonus_7_v >= '0') { $colcolor10='color:rgba(200,255,200,1)'; } else { $colcolor10='color:#e57875'; }
?>