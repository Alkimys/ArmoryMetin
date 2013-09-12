<?php
/* Boucles d'oreilles */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '6' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$boucles = $data['vnum'];


    $boon_bonus_1 = $data['attrtype0'];
    $boon_bonus_1_v = $data['attrvalue0'];
    $boon_bonus_2 = $data['attrtype1'];
    $boon_bonus_2_v = $data['attrvalue1'];
    $boon_bonus_3 = $data['attrtype2'];
    $boon_bonus_3_v = $data['attrvalue2'];
    $boon_bonus_4 = $data['attrtype3'];
    $boon_bonus_4_v = $data['attrvalue3'];

    $boon_bonus_5 = $data['attrtype4'];
    $boon_bonus_5_v = $data['attrvalue4'];

    $boon_bonus_6 = $data['attrtype5'];
    $boon_bonus_6_v = $data['attrvalue5'];
    $boon_bonus_7 = $data['attrtype6'];
    $boon_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$boucles' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {


    $name_boucles = htmlentities($data1['locale_name']);
    $boolvl = $data1['limitvalue0'];


    $booantiflag = $data1['antiflag'];

    $boobonus_1 = $data1['applytype0'];
    $boobonus_1_v = $data1['applyvalue0'];
    $boobonus_2 = $data1['applytype1'];
    $boobonus_2_v = $data1['applyvalue1'];
    $boobonus_3 = $data1['applytype2'];
    $boobonus_3_v = $data1['applyvalue2'];

}


if($booantiflag == '44' || $booantiflag == '300'){
  $boorace = 'Sura';
}
elseif($booantiflag == '52' || $booantiflag == '308'){
  $boorace = 'Ninja';
}

elseif($booantiflag == '56' || $booantiflag == '312'){
  $boorace = 'Guerrier';
}
elseif($booantiflag == '28' || $booantiflag == '284'){
  $boorace = 'Chamane';
}
elseif($booantiflag == '0' || $booantiflag == '256'){
  $boorace = 'Guerrier Ninja Sura Chamane';
}
elseif($booantiflag == '1'){
  $boorace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($booantiflag == '2'){
  $boorace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($boobonus_1 >= 7 && $boobonus_1 <= 47) {
  $boobonus_1_v = $boobonus_1_v.' %';
}
if ($boobonus_2 >= 7 && $boobonus_2 <= 47) {
  $boobonus_2_v = $boobonus_2_v.' %';
}
if ($boobonus_3 >= 7 && $boobonus_3 <= 47) {
  $boobonus_3_v = $boobonus_3_v.' %';
}


if ($boon_bonus_1 >= '7' && $boon_bonus_1 <= '47') {
  $boon_bonus_1_v = $boon_bonus_1_v.' %';
}
if ($boon_bonus_2 >= '7' && $boon_bonus_2 <= '47') {
  $boon_bonus_2_v = $boon_bonus_2_v.' %';
}
if ($boon_bonus_3 >= '7' && $boon_bonus_3 <= '47') {
  $boon_bonus_3_v = $boon_bonus_3_v.' %';
}
if ($boon_bonus_4 >= '7' && $boon_bonus_4 <= '47') {
  $boon_bonus_4_v = $boon_bonus_4_v.' %';
}
if ($boon_bonus_5 >= '7' && $boon_bonus_5 <= '47') {
  $boon_bonus_5_v = $boon_bonus_5_v.' %';
}
if ($boon_bonus_6 >= '7' && $boon_bonus_6 <= '47') {
  $boon_bonus_6_v = $boon_bonus_6_v.' %';
}
if ($boon_bonus_7 >= '7' && $boon_bonus_7 <= '47') {
  $boon_bonus_7_v = $boon_bonus_7_v.' %';
}

    $boobonus_1 = $itembonus[$boobonus_1];
    $boobonus_2 = $itembonus[$boobonus_2];
    $boobonus_3 = $itembonus[$boobonus_3];
    $boon_bonus_1 = $itembonus[$boon_bonus_1];
    $boon_bonus_2 = $itembonus[$boon_bonus_2];
    $boon_bonus_3 = $itembonus[$boon_bonus_3];
    $boon_bonus_4 = $itembonus[$boon_bonus_4];
    $boon_bonus_5 = $itembonus[$boon_bonus_5];
    $boon_bonus_6 = $itembonus[$boon_bonus_6];
    $boon_bonus_7 = $itembonus[$boon_bonus_7];

	if($boobonus_1_v >= '0') { $boocolor='color:rgba(200,255,200,1)'; } else { $boocolor='color:#e57875'; }
	if($boobonus_2_v >= '0') { $boocolor2='color:rgba(200,255,200,1)'; } else { $boocolor2='color:#e57875'; }
	if($boobonus_3_v >= '0') { $boocolor3='color:rgba(200,255,200,1)'; } else { $boocolor3='color:#e57875'; }
	
	if($boon_bonus_1_v >= '0') { $boocolor4='color:rgba(200,255,200,1)'; } else { $boocolor4='color:#e57875'; }
	if($boon_bonus_2_v >= '0') { $boocolor5='color:rgba(200,255,200,1)'; } else { $boocolor5='color:#e57875'; }
	if($boon_bonus_3_v >= '0') { $boocolor6='color:rgba(200,255,200,1)'; } else { $boocolor6='color:#e57875'; }
	if($boon_bonus_4_v >= '0') { $boocolor7='color:rgba(200,255,200,1)'; } else { $boocolor7='color:#e57875'; }
	if($boon_bonus_5_v >= '0') { $boocolor8='color:rgba(200,255,200,1)'; } else { $boocolor8='color:#e57875'; }
	if($boon_bonus_6_v >= '0') { $boocolor9='color:rgba(200,255,200,1)'; } else { $boocolor9='color:#e57875'; }
	if($boon_bonus_7_v >= '0') { $boocolor10='color:rgba(200,255,200,1)'; } else { $boocolor10='color:#e57875'; }
?>