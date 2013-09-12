<?php
/* Boucliers */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '10' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$bouclier = $data['vnum'];


    $bbn_bonus_1 = $data['attrtype0'];
    $bbn_bonus_1_v = $data['attrvalue0'];
    $bbn_bonus_2 = $data['attrtype1'];
    $bbn_bonus_2_v = $data['attrvalue1'];
    $bbn_bonus_3 = $data['attrtype2'];
    $bbn_bonus_3_v = $data['attrvalue2'];
    $bbn_bonus_4 = $data['attrtype3'];
    $bbn_bonus_4_v = $data['attrvalue3'];

    $bbn_bonus_5 = $data['attrtype4'];
    $bbn_bonus_5_v = $data['attrvalue4'];

    $bbn_bonus_6 = $data['attrtype5'];
    $bbn_bonus_6_v = $data['attrvalue5'];
    $bbn_bonus_7 = $data['attrtype6'];
    $bbn_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$bouclier' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {

    $v1 = $data1['value1'];
    $v5 = $data1['value5'];
    $bbdef = $v5 *2 + $v1;
    $name_bouclier = htmlentities($data1['locale_name']);
    $bblvl = $data1['limitvalue0'];


    $bbantiflag = $data1['antiflag'];

    $bbbonus_1 = $data1['applytype0'];
    $bbbonus_1_v = $data1['applyvalue0'];
    $bbbonus_2 = $data1['applytype1'];
    $bbbonus_2_v = $data1['applyvalue1'];
    $bbbonus_3 = $data1['applytype2'];
    $bbbonus_3_v = $data1['applyvalue2'];

}


if($bbantiflag == '44' || $bbantiflag == '300'){
  $bbrace = 'Sura';
}
elseif($bbantiflag == '52' || $bbantiflag == '308'){
  $bbrace = 'Ninja';
}

elseif($bbantiflag == '56' || $bbantiflag == '312'){
  $bbrace = 'Guerrier';
}
elseif($bbantiflag == '28' || $bbantiflag == '284'){
  $bbrace = 'Chamane';
}
elseif($bbantiflag == '0' || $bbantiflag == '256'){
  $bbrace = 'Guerrier Ninja Sura Chamane';
}
elseif($bbantiflag == '1'){
  $bbrace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($bbantiflag == '2'){
  $bbrace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($bbbonus_1 >= 7 && $bbbonus_1 <= 47) {
  $bbbonus_1_v = $bbbonus_1_v.' %';
}
if ($bbbonus_2 >= 7 && $bbbonus_2 <= 47) {
  $bbbonus_2_v = $bbbonus_2_v.' %';
}
if ($bbbonus_3 >= 7 && $bbbonus_3 <= 47) {
  $bbbonus_3_v = $bbbonus_3_v.' %';
}


if ($bbn_bonus_1 >= '7' && $bbn_bonus_1 <= '47') {
  $bbn_bonus_1_v = $bbn_bonus_1_v.' %';
}
if ($bbn_bonus_2 >= '7' && $bbn_bonus_2 <= '47') {
  $bbn_bonus_2_v = $bbn_bonus_2_v.' %';
}
if ($bbn_bonus_3 >= '7' && $bbn_bonus_3 <= '47') {
  $bbn_bonus_3_v = $bbn_bonus_3_v.' %';
}
if ($bbn_bonus_4 >= '7' && $bbn_bonus_4 <= '47') {
  $bbn_bonus_4_v = $bbn_bonus_4_v.' %';
}
if ($bbn_bonus_5 >= '7' && $bbn_bonus_5 <= '47') {
  $bbn_bonus_5_v = $bbn_bonus_5_v.' %';
}
if ($bbn_bonus_6 >= '7' && $bbn_bonus_6 <= '47') {
  $bbn_bonus_6_v = $bbn_bonus_6_v.' %';
}
if ($bbn_bonus_7 >= '7' && $bbn_bonus_7 <= '47') {
  $bbn_bonus_7_v = $bbn_bonus_7_v.' %';
}

    $bbbonus_1 = $itembonus[$bbbonus_1];
    $bbbonus_2 = $itembonus[$bbbonus_2];
    $bbbonus_3 = $itembonus[$bbbonus_3];
    $bbn_bonus_1 = $itembonus[$bbn_bonus_1];
    $bbn_bonus_2 = $itembonus[$bbn_bonus_2];
    $bbn_bonus_3 = $itembonus[$bbn_bonus_3];
    $bbn_bonus_4 = $itembonus[$bbn_bonus_4];
    $bbn_bonus_5 = $itembonus[$bbn_bonus_5];
    $bbn_bonus_6 = $itembonus[$bbn_bonus_6];
    $bbn_bonus_7 = $itembonus[$bbn_bonus_7];
	
	if($bbbonus_1_v >= '0') { $bbcolor='color:rgba(200,255,200,1)'; } else { $bbcolor='color:#e57875'; }
	if($bbbonus_2_v >= '0') { $bbcolor2='color:rgba(200,255,200,1)'; } else { $bbcolor2='color:#e57875'; }
	if($bbbonus_3_v >= '0') { $bbcolor3='color:rgba(200,255,200,1)'; } else { $bbcolor3='color:#e57875'; }
	
	if($bbn_bonus_1_v >= '0') { $bbcolor4='color:rgba(200,255,200,1)'; } else { $bbcolor4='color:#e57875'; }
	if($bbn_bonus_2_v >= '0') { $bbcolor5='color:rgba(200,255,200,1)'; } else { $bbcolor5='color:#e57875'; }
	if($bbn_bonus_3_v >= '0') { $bbcolor6='color:rgba(200,255,200,1)'; } else { $bbcolor6='color:#e57875'; }
	if($bbn_bonus_4_v >= '0') { $bbcolor7='color:rgba(200,255,200,1)'; } else { $bbcolor7='color:#e57875'; }
	if($bbn_bonus_5_v >= '0') { $bbcolor8='color:rgba(200,255,200,1)'; } else { $bbcolor8='color:#e57875'; }
	if($bbn_bonus_6_v >= '0') { $bbcolor9='color:rgba(200,255,200,1)'; } else { $bbcolor9='color:#e57875'; }
	if($bbn_bonus_7_v >= '0') { $bbcolor10='color:rgba(200,255,200,1)'; } else { $bbcolor10='color:#e57875'; }

?>