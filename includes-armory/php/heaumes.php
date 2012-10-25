<?php
/* Heaumes */
error_reporting(0);
$requette = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '1' LIMIT 1");
$sql = mysql_query($requette) or die(mysql_error());
$data = mysql_fetch_array($sql);
$heaume = $data['vnum'];


    $hn_bonus_1 = $data['attrtype0'];
    $hn_bonus_1_v = $data['attrvalue0'];
    $hn_bonus_2 = $data['attrtype1'];
    $hn_bonus_2_v = $data['attrvalue1'];
    $hn_bonus_3 = $data['attrtype2'];
    $hn_bonus_3_v = $data['attrvalue2'];
    $hn_bonus_4 = $data['attrtype3'];
    $hn_bonus_4_v = $data['attrvalue3'];

    $hn_bonus_5 = $data['attrtype4'];
    $hn_bonus_5_v = $data['attrvalue4'];

    $hn_bonus_6 = $data['attrtype5'];
    $hn_bonus_6_v = $data['attrvalue5'];
    $hn_bonus_7 = $data['attrtype6'];
    $hn_bonus_7_v = $data['attrvalue6'];


$requette1 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$heaume' LIMIT 1");
$sql1 = mysql_query($requette1) or die(mysql_error());

while(($data1 = mysql_fetch_array($sql1))) {

    $v5_h = $data1['value5'];
    $v1_h = $data1['value1'];
    $name_heaume = $data1['locale_name'];
    $hlvl = $data1['limitvalue0'];

    $hdef = $v5_h * 2 + $v1_h;


    $hantiflag = $data1['antiflag'];

    $hbonus_1 = $data1['applytype0'];
    $hbonus_1_v = $data1['applyvalue0'];
    $hbonus_2 = $data1['applytype1'];
    $hbonus_2_v = $data1['applyvalue1'];
    $hbonus_3 = $data1['applytype2'];
    $hbonus_3_v = $data1['applyvalue2'];

}


if($hantiflag == '44' || $hantiflag == '300'){
  $hrace = 'Sura';
}
elseif($hantiflag == '52' || $hantiflag == '308'){
  $hrace = 'Ninja';
}

elseif($hantiflag == '56' || $hantiflag == '312'){
  $hrace = 'Guerrier';
}
elseif($hantiflag == '28' || $hantiflag == '284'){
  $hrace = 'Chamane';
}
elseif($hantiflag == '0'){
  $hrace = 'Guerrier Ninja Sura Chamane';
}
elseif($hantiflag == '1'){
  $hrace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($hantiflag == '2'){
  $hrace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}


if ($hbonus_1 >= 7 && $hbonus_1 <= 47) {
	$hbonus_1_v = $hbonus_1_v.' %';
}
if ($hbonus_2 >= 7 && $hbonus_2 <= 47) {
  $hbonus_2_v = $hbonus_2_v.' %';
}
if ($hbonus_3 >= 7 && $hbonus_3 <= 47) {
  $hbonus_3_v = $hbonus_3_v.' %';
}


if ($hn_bonus_1 >= '7' && $hn_bonus_1 <= '47') {
  $hn_bonus_1_v = $hn_bonus_1_v.' %';
}
if ($hn_bonus_2 >= '7' && $hn_bonus_2 <= '47') {
  $hn_bonus_2_v = $hn_bonus_2_v.' %';
}
if ($hn_bonus_3 >= '7' && $hn_bonus_3 <= '47') {
  $hn_bonus_3_v = $hn_bonus_3_v.' %';
}
if ($hn_bonus_4 >= '7' && $hn_bonus_4 <= '47') {
  $hn_bonus_4_v = $hn_bonus_4_v.' %';
}
if ($hn_bonus_5 >= '7' && $hn_bonus_5 <= '47') {
  $hn_bonus_5_v = $hn_bonus_5_v.' %';
}
if ($hn_bonus_6 >= '7' && $hn_bonus_6 <= '47') {
  $hn_bonus_6_v = $hn_bonus_6_v.' %';
}
if ($hn_bonus_7 >= '7' && $hn_bonus_7 <= '47') {
  $hn_bonus_7_v = $hn_bonus_7_v.' %';
}

		$hbonus_1 = $itembonus[$hbonus_1];
		$hbonus_2 = $itembonus[$hbonus_2];
		$hbonus_3 = $itembonus[$hbonus_3];
		$hn_bonus_1 = $itembonus[$hn_bonus_1];
		$hn_bonus_2 = $itembonus[$hn_bonus_2];
		$hn_bonus_3 = $itembonus[$hn_bonus_3];
		$hn_bonus_4 = $itembonus[$hn_bonus_4];
		$hn_bonus_5 = $itembonus[$hn_bonus_5];
		$hn_bonus_6 = $itembonus[$hn_bonus_6];
		$hn_bonus_7 = $itembonus[$hn_bonus_7];

?>