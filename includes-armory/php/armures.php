<?php
/* Armures */
error_reporting(0);
$requette2 = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '0' LIMIT 1");
$sql2 = mysql_query($requette2) or die(mysql_error());
$data2 = mysql_fetch_array($sql2);
$armure = $data2['vnum'];


    $an_bonus_1 = $data2['attrtype0'];
    $an_bonus_1_v = $data2['attrvalue0'];
    $an_bonus_2 = $data2['attrtype1'];
    $an_bonus_2_v = $data2['attrvalue1'];
    $an_bonus_3 = $data2['attrtype2'];
    $an_bonus_3_v = $data2['attrvalue2'];
    $an_bonus_4 = $data2['attrtype3'];
    $an_bonus_4_v = $data2['attrvalue3'];

    $an_bonus_5 = $data2['attrtype4'];
    $an_bonus_5_v = $data2['attrvalue4'];

    $an_bonus_6 = $data2['attrtype5'];
    $an_bonus_6_v = $data2['attrvalue5'];
    $an_bonus_7 = $data2['attrtype6'];
    $an_bonus_7_v = $data2['attrvalue6'];

    $apierre_1 = $data2['socket0'];
    $apierre_2 = $data2['socket1'];
    $apierre_3 = $data2['socket2'];

   // if ($arme > "6999" && $arme < "7010"){ $arme_css = "images/char/armes/c/1_ev.png"; }

$requette3 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$armure' LIMIT 1");
$sql3 = mysql_query($requette3) or die(mysql_error());

while(($data3 = mysql_fetch_array($sql3))) {

    $v5 = $data3['value5'];
    $v4 = $data3['value4'];
    $v3 = $data3['value3'];
    $v2 = $data3['value2'];
    $v1 = $data3['value1'];

    $def_armure = $v5 *2 + $v1;

    $aantiflag = $data3['antiflag'];
    $aniveau = $data3['limitvalue0'];
    $name_armure = $data3['locale_name'];

    $abonus_1 = $data3['applytype0'];
    $abonus_1_v = $data3['applyvalue0'];
    $abonus_2 = $data3['applytype1'];
    $abonus_2_v = $data3['applyvalue1'];
    $abonus_3 = $data3['applytype2'];
    $abonus_3_v = $data3['applyvalue2'];
}


if($aantiflag == '44' || $aantiflag == '300'){
  $arace = 'Sura';
}
elseif($aantiflag == '52' || $aantiflag == '308'){
  $arace = 'Ninja';
}

elseif($aantiflag == '56' || $aantiflag == '312'){
  $arace = 'Guerrier';
}
elseif($aantiflag == '28' || $aantiflag == '284'){
  $arace = 'Chamane';
}
elseif($aantiflag == '0'){
  $arace = 'Guerrier Ninja Sura Chamane';
}
elseif($aantiflag == '1'){
  $arace = 'Guerrier Ninja Sura Chamane<br />Pour Homme';
}
elseif($aantiflag == '2'){
  $arace = 'Guerrier Ninja Sura Chamane<br />Pour Femme';
}

if ($abonus_1 >= 7 && $abonus_1 <= 47) {
	$abonus_1_v = $abonus_1_v.' %';
}
if ($abonus_2 >= 7 && $abonus_2 <= 47) {
  $abonus_2_v = $abonus_2_v.' %';
}
if ($abonus_3 >= 7 && $abonus_3 <= 47) {
  $abonus_3_v = $abonus_3_v.' %';
}

if ($an_bonus_1 >= '7' && $an_bonus_1 <= '47') {
  $an_bonus_1_v = $an_bonus_1_v.' %';
}
if ($an_bonus_2 >= '7' && $an_bonus_2 <= '47') {
  $an_bonus_2_v = $an_bonus_2_v.' %';
}
if ($an_bonus_3 >= '7' && $an_bonus_3 <= '47') {
  $an_bonus_3_v = $an_bonus_3_v.' %';
}
if ($an_bonus_4 >= '7' && $an_bonus_4 <= '47') {
  $an_bonus_4_v = $an_bonus_4_v.' %';
}
if ($an_bonus_5 >= '7' && $an_bonus_5 <= '47') {
  $an_bonus_5_v = $an_bonus_5_v.' %';
}
if ($an_bonus_6 >= '7' && $an_bonus_6 <= '47') {
  $an_bonus_6_v = $an_bonus_6_v.' %';
}
if ($an_bonus_7 >= '7' && $an_bonus_7 <= '47') {
  $an_bonus_7_v = $an_bonus_7_v.' %';
}


    if($apierre_1 == '28030' || $apierre_1 == '28130' || $apierre_1 == '28230' || $apierre_1 == '28330' || $apierre_1 == '28430' || $apierre_1 == '28530' || $apierre_1 == '28630') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/pene.png' alt='' />";
    }
elseif($apierre_1 == '28031' || $apierre_1 == '28131' || $apierre_1 == '28231' || $apierre_1 == '28331' || $apierre_1 == '28431' || $apierre_1 == '28531' || $apierre_1 == '28631') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($apierre_1 == '28032' || $apierre_1 == '28132' || $apierre_1 == '28232' || $apierre_1 == '28332' || $apierre_1 == '28432' || $apierre_1 == '28532' || $apierre_1 == '28632') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/apai.png' alt='' />";
    }
elseif($apierre_1 == '28033' || $apierre_1 == '28133' || $apierre_1 == '28233' || $apierre_1 == '28333' || $apierre_1 == '28433' || $apierre_1 == '28533' || $apierre_1 == '28633') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/antig.png' alt='' />";
    }
elseif($apierre_1 == '28034' || $apierre_1 == '28134' || $apierre_1 == '28234' || $apierre_1 == '28334' || $apierre_1 == '28434' || $apierre_1 == '28534' || $apierre_1 == '28634') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/antin.png' alt='' />";
    }
elseif($apierre_1 == '28035' || $apierre_1 == '28135' || $apierre_1 == '28235' || $apierre_1 == '28335' || $apierre_1 == '28435' || $apierre_1 == '28535' || $apierre_1 == '28635') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/antis.png' alt='' />";
    }
elseif($apierre_1 == '28036' || $apierre_1 == '28136' || $apierre_1 == '28236' || $apierre_1 == '28336' || $apierre_1 == '28436' || $apierre_1 == '28536' || $apierre_1 == '28636') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/antich.png' alt='' />";
    }
elseif($apierre_1 == '28037' || $apierre_1 == '28137' || $apierre_1 == '28237' || $apierre_1 == '28337' || $apierre_1 == '28437' || $apierre_1 == '28537' || $apierre_1 == '28637') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/antim.png' alt='' />";
    }
elseif($apierre_1 == '28038' || $apierre_1 == '28138' || $apierre_1 == '28238' || $apierre_1 == '28338' || $apierre_1 == '28438' || $apierre_1 == '28538' || $apierre_1 == '28638') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/eva.png' alt='' />";
    }
elseif($apierre_1 == '28039' || $apierre_1 == '28139' || $apierre_1 == '28239' || $apierre_1 == '28339' || $apierre_1 == '28439' || $apierre_1 == '28539' || $apierre_1 == '28639') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($apierre_1 == '28040' || $apierre_1 == '28140' || $apierre_1 == '28240' || $apierre_1 == '28340' || $apierre_1 == '28440' || $apierre_1 == '28540' || $apierre_1 == '28640') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/magie.png' alt='' />";
    }
elseif($apierre_1 == '28041' || $apierre_1 == '28141' || $apierre_1 == '28241' || $apierre_1 == '28341' || $apierre_1 == '28441' || $apierre_1 == '28541' || $apierre_1 == '28641') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/vie.png' alt='' />";
    }
elseif($apierre_1 == '28042' || $apierre_1 == '28142' || $apierre_1 == '28242' || $apierre_1 == '28342' || $apierre_1 == '28442' || $apierre_1 == '28542' || $apierre_1 == '28642') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/def.png' alt='' />";
    }
elseif($apierre_1 == '28043' || $apierre_1 == '28143' || $apierre_1 == '28243' || $apierre_1 == '28343' || $apierre_1 == '28443' || $apierre_1 == '28543' || $apierre_1 == '28643') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/hate.png' alt='' />";
    }
elseif($apierre_1 == '28960') {
      $apierre_1_img = "<img src='includes-armory/img/pierres/casse.png' alt='' />";
}
else{
	$apierre_1_img = "";
}


if($apierre_2 == '28030' || $apierre_2 == '28130' || $apierre_2 == '28230' || $apierre_2 == '28330' || $apierre_2 == '28430' || $apierre_2 == '28530' || $apierre_2 == '28630') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/pene.png' alt='' />";
    }
elseif($apierre_2 == '28031' || $apierre_2 == '28131' || $apierre_2 == '28231' || $apierre_2 == '28331' || $apierre_2 == '28431' || $apierre_2 == '28531' || $apierre_2 == '28631') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($apierre_2 == '28032' || $apierre_2 == '28132' || $apierre_2 == '28232' || $apierre_2 == '28332' || $apierre_2 == '28432' || $apierre_2 == '28532' || $apierre_2 == '28632') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/apai.png' alt='' />";
    }
elseif($apierre_2 == '28033' || $apierre_2 == '28133' || $apierre_2 == '28233' || $apierre_2 == '28333' || $apierre_2 == '28433' || $apierre_2 == '28533' || $apierre_2 == '28633') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/antig.png' alt='' />";
    }
elseif($apierre_2 == '28034' || $apierre_2 == '28134' || $apierre_2 == '28234' || $apierre_2 == '28334' || $apierre_2 == '28434' || $apierre_2 == '28534' || $apierre_2 == '28634') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/antin.png' alt='' />";
    }
elseif($apierre_2 == '28035' || $apierre_2 == '28135' || $apierre_2 == '28235' || $apierre_2 == '28335' || $apierre_2 == '28435' || $apierre_2 == '28535' || $apierre_2 == '28635') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/antis.png' alt='' />";
    }
elseif($apierre_2 == '28036' || $apierre_2 == '28136' || $apierre_2 == '28236' || $apierre_2 == '28336' || $apierre_2 == '28436' || $apierre_2 == '28536' || $apierre_2 == '28636') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/antich.png' alt='' />";
    }
elseif($apierre_2 == '28037' || $apierre_2 == '28137' || $apierre_2 == '28237' || $apierre_2 == '28337' || $apierre_2 == '28437' || $apierre_2 == '28537' || $apierre_2 == '28637') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/antim.png' alt='' />";
    }
elseif($apierre_2 == '28038' || $apierre_2 == '28138' || $apierre_2 == '28238' || $apierre_2 == '28338' || $apierre_2 == '28438' || $apierre_2 == '28538' || $apierre_2 == '28638') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/eva.png' alt='' />";
    }
elseif($apierre_2 == '28039' || $apierre_2 == '28139' || $apierre_2 == '28239' || $apierre_2 == '28339' || $apierre_2 == '28439' || $apierre_2 == '28539' || $apierre_2 == '28639') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($apierre_2 == '28040' || $apierre_2 == '28140' || $apierre_2 == '28240' || $apierre_2 == '28340' || $apierre_2 == '28440' || $apierre_2 == '28540' || $apierre_2 == '28640') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/magie.png' alt='' />";
    }
elseif($apierre_2 == '28041' || $apierre_2 == '28141' || $apierre_2 == '28241' || $apierre_2 == '28341' || $apierre_2 == '28441' || $apierre_2 == '28541' || $apierre_2 == '28641') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/vie.png' alt='' />";
    }
elseif($apierre_2 == '28042' || $apierre_2 == '28142' || $apierre_2 == '28242' || $apierre_2 == '28342' || $apierre_2 == '28442' || $apierre_2 == '28542' || $apierre_2 == '28642') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/def.png' alt='' />";
    }
elseif($apierre_2 == '28043' || $apierre_2 == '28143' || $apierre_2 == '28243' || $apierre_2 == '28343' || $apierre_2 == '28443' || $apierre_2 == '28543' || $apierre_2 == '28643') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/hate.png' alt='' />";
    }
elseif($apierre_2 == '28960') {
      $apierre_2_img = "<img src='includes-armory/img/pierres/casse.png' alt='' />";
}
else{
	$apierre_2_img = "";
}



    if($apierre_3 == '28030' || $apierre_3 == '28130' || $apierre_3 == '28230' || $apierre_3 == '28330' || $apierre_3 == '28430' || $apierre_3 == '28530' || $apierre_3 == '28630') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/pene.png' alt='' />";
    }
elseif($apierre_3 == '28031' || $apierre_3 == '28131' || $apierre_3 == '28231' || $apierre_3 == '28331' || $apierre_3 == '28431' || $apierre_3 == '28531' || $apierre_3 == '28631') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($apierre_3 == '28032' || $apierre_3 == '28132' || $apierre_3 == '28232' || $apierre_3 == '28332' || $apierre_3 == '28432' || $apierre_3 == '28532' || $apierre_3 == '28632') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/apai.png' alt='' />";
    }
elseif($apierre_3 == '28033' || $apierre_3 == '28133' || $apierre_3 == '28233' || $apierre_3 == '28333' || $apierre_3 == '28433' || $apierre_3 == '28533' || $apierre_3 == '28633') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/antig.png' alt='' />";
    }
elseif($apierre_3 == '28034' || $apierre_3 == '28134' || $apierre_3 == '28234' || $apierre_3 == '28334' || $apierre_3 == '28434' || $apierre_3 == '28534' || $apierre_3 == '28634') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/antin.png' alt='' />";
    }
elseif($apierre_3 == '28035' || $apierre_3 == '28135' || $apierre_3 == '28235' || $apierre_3 == '28335' || $apierre_3 == '28435' || $apierre_3 == '28535' || $apierre_3 == '28635') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/antis.png' alt='' />";
    }
elseif($apierre_3 == '28036' || $apierre_3 == '28136' || $apierre_3 == '28236' || $apierre_3 == '28336' || $apierre_3 == '28436' || $apierre_3 == '28536' || $apierre_3 == '28636') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/antich.png' alt='' />";
    }
elseif($apierre_3 == '28037' || $apierre_3 == '28137' || $apierre_3 == '28237' || $apierre_3 == '28337' || $apierre_3 == '28437' || $apierre_3 == '28537' || $apierre_3 == '28637') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/antim.png' alt='' />";
    }
elseif($apierre_3 == '28038' || $apierre_3 == '28138' || $apierre_3 == '28238' || $apierre_3 == '28338' || $apierre_3 == '28438' || $apierre_3 == '28538' || $apierre_3 == '28638') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/eva.png' alt='' />";
    }
elseif($apierre_3 == '28039' || $apierre_3 == '28139' || $apierre_3 == '28239' || $apierre_3 == '28339' || $apierre_3 == '28439' || $apierre_3 == '28539' || $apierre_3 == '28639') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($apierre_3 == '28040' || $apierre_3 == '28140' || $apierre_3 == '28240' || $apierre_3 == '28340' || $apierre_3 == '28440' || $apierre_3 == '28540' || $apierre_3 == '28640') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/magie.png' alt='' />";
    }
elseif($apierre_3 == '28041' || $apierre_3 == '28141' || $apierre_3 == '28241' || $apierre_3 == '28341' || $apierre_3 == '28441' || $apierre_3 == '28541' || $apierre_3 == '28641') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/vie.png' alt='' />";
    }
elseif($apierre_3 == '28042' || $apierre_3 == '28142' || $apierre_3 == '28242' || $apierre_3 == '28342' || $apierre_3 == '28442' || $apierre_3 == '28542' || $apierre_3 == '28642') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/def.png' alt='' />";
    }
elseif($apierre_3 == '28043' || $apierre_3 == '28143' || $apierre_3 == '28243' || $apierre_3 == '28343' || $apierre_3 == '28443' || $apierre_3 == '28543' || $apierre_3 == '28643') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/hate.png' alt='' />";
    }
elseif($apierre_3 == '28960') {
      $apierre_3_img = "<img src='includes-armory/img/pierres/casse.png' alt='' />";
}
else{
	$apierre_3_img = "";
}



		$abonus_1 = $itembonus[$abonus_1];
		$abonus_2 = $itembonus[$abonus_2];
		$abonus_3 = $itembonus[$abonus_3];
		$an_bonus_1 = $itembonus[$an_bonus_1];
		$an_bonus_2 = $itembonus[$an_bonus_2];
		$an_bonus_3 = $itembonus[$an_bonus_3];
		$an_bonus_4 = $itembonus[$an_bonus_4];
		$an_bonus_5 = $itembonus[$an_bonus_5];
		$an_bonus_6 = $itembonus[$an_bonus_6];
		$an_bonus_7 = $itembonus[$an_bonus_7];
    $apierre_1 = $pierres[$apierre_1];
    $apierre_2 = $pierres[$apierre_2];
    $apierre_3 = $pierres[$apierre_3];


?>