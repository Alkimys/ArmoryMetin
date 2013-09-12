<?php
/* Chaussures */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '2' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$chaussures = $data['vnum'];


    $chaun_bonus_1 = $data['attrtype0'];
    $chaun_bonus_1_v = $data['attrvalue0'];
    $chaun_bonus_2 = $data['attrtype1'];
    $chaun_bonus_2_v = $data['attrvalue1'];
    $chaun_bonus_3 = $data['attrtype2'];
    $chaun_bonus_3_v = $data['attrvalue2'];
    $chaun_bonus_4 = $data['attrtype3'];
    $chaun_bonus_4_v = $data['attrvalue3'];

    $chaun_bonus_5 = $data['attrtype4'];
    $chaun_bonus_5_v = $data['attrvalue4'];

    $chaun_bonus_6 = $data['attrtype5'];
    $chaun_bonus_6_v = $data['attrvalue5'];
    $chaun_bonus_7 = $data['attrtype6'];
    $chaun_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$chaussures' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {


    $name_chaussures = htmlentities($data1['locale_name']);
    $chaulvl = $data1['limitvalue0'];


    $chauantiflag = $data1['antiflag'];

    $chaubonus_1 = $data1['applytype0'];
    $chaubonus_1_v = $data1['applyvalue0'];
    $chaubonus_2 = $data1['applytype1'];
    $chaubonus_2_v = $data1['applyvalue1'];
    $chaubonus_3 = $data1['applytype2'];
    $chaubonus_3_v = $data1['applyvalue2'];

}


if($chauantiflag == '44' || $chauantiflag == '300'){
  $chaurace = 'Sura';
}
elseif($chauantiflag == '52' || $chauantiflag == '308'){
  $chaurace = 'Ninja';
}

elseif($chauantiflag == '56' || $chauantiflag == '312'){
  $chaurace = 'Guerrier';
}
elseif($chauantiflag == '28' || $chauantiflag == '284'){
  $chaurace = 'Chamane';
}
elseif($chauantiflag == '0' || $chauantiflag == '256'){
  $chaurace = 'Guerrier Ninja Sura Chamane';
}
elseif($chauantiflag == '1'){
  $chaurace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($chauantiflag == '2'){
  $chaurace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($chaubonus_1 >= 7 && $chaubonus_1 <= 47) {
  $chaubonus_1_v = $chaubonus_1_v.' %';
}
if ($chaubonus_2 >= 7 && $chaubonus_2 <= 47) {
  $chaubonus_2_v = $chaubonus_2_v.' %';
}
if ($chaubonus_3 >= 7 && $chaubonus_3 <= 47) {
  $chaubonus_3_v = $chaubonus_3_v.' %';
}


if ($chaun_bonus_1 >= '7' && $chaun_bonus_1 <= '47') {
  $chaun_bonus_1_v = $chaun_bonus_1_v.' %';
}
if ($chaun_bonus_2 >= '7' && $chaun_bonus_2 <= '47') {
  $chaun_bonus_2_v = $chaun_bonus_2_v.' %';
}
if ($chaun_bonus_3 >= '7' && $chaun_bonus_3 <= '47') {
  $chaun_bonus_3_v = $chaun_bonus_3_v.' %';
}
if ($chaun_bonus_4 >= '7' && $chaun_bonus_4 <= '47') {
  $chaun_bonus_4_v = $chaun_bonus_4_v.' %';
}
if ($chaun_bonus_5 >= '7' && $chaun_bonus_5 <= '47') {
  $chaun_bonus_5_v = $chaun_bonus_5_v.' %';
}
if ($chaun_bonus_6 >= '7' && $chaun_bonus_6 <= '47') {
  $chaun_bonus_6_v = $chaun_bonus_6_v.' %';
}
if ($chaun_bonus_7 >= '7' && $chaun_bonus_7 <= '47') {
  $chaun_bonus_7_v = $chaun_bonus_7_v.' %';
}

    $chaubonus_1 = $itembonus[$chaubonus_1];
    $chaubonus_2 = $itembonus[$chaubonus_2];
    $chaubonus_3 = $itembonus[$chaubonus_3];
    $chaun_bonus_1 = $itembonus[$chaun_bonus_1];
    $chaun_bonus_2 = $itembonus[$chaun_bonus_2];
    $chaun_bonus_3 = $itembonus[$chaun_bonus_3];
    $chaun_bonus_4 = $itembonus[$chaun_bonus_4];
    $chaun_bonus_5 = $itembonus[$chaun_bonus_5];
    $chaun_bonus_6 = $itembonus[$chaun_bonus_6];
    $chaun_bonus_7 = $itembonus[$chaun_bonus_7];

	if($chaubonus_1_v >= '0') { $chaucolor='color:rgba(200,255,200,1)'; } else { $chaucolor='color:#e57875'; }
	if($chaubonus_2_v >= '0') { $chaucolor2='color:rgba(200,255,200,1)'; } else { $chaucolor2='color:#e57875'; }
	if($chaubonus_3_v >= '0') { $chaucolor3='color:rgba(200,255,200,1)'; } else { $chaucolor3='color:#e57875'; }
	
	if($chaun_bonus_1_v >= '0') { $chaucolor4='color:rgba(200,255,200,1)'; } else { $chaucolor4='color:#e57875'; }
	if($chaun_bonus_2_v >= '0') { $chaucolor5='color:rgba(200,255,200,1)'; } else { $chaucolor5='color:#e57875'; }
	if($chaun_bonus_3_v >= '0') { $chaucolor6='color:rgba(200,255,200,1)'; } else { $chaucolor6='color:#e57875'; }
	if($chaun_bonus_4_v >= '0') { $chaucolor7='color:rgba(200,255,200,1)'; } else { $chaucolor7='color:#e57875'; }
	if($chaun_bonus_5_v >= '0') { $chaucolor8='color:rgba(200,255,200,1)'; } else { $chaucolor8='color:#e57875'; }
	if($chaun_bonus_6_v >= '0') { $chaucolor9='color:rgba(200,255,200,1)'; } else { $chaucolor9='color:#e57875'; }
	if($chaun_bonus_7_v >= '0') { $chaucolor10='color:rgba(200,255,200,1)'; } else { $chaucolor10='color:#e57875'; }
?>