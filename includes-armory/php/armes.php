<?php
/* Armes */
error_reporting(0);
$requette6 = ("SELECT * FROM player.item WHERE owner_id LIKE '$player_id' AND window LIKE 'EQUIPMENT' AND pos LIKE '4' LIMIT 1");
$sql6 = mysql_query($requette6) or die(mysql_error());
$data6 = mysql_fetch_array($sql6);
$arme = $data6['vnum'];


    $n_bonus_1 = $data6['attrtype0'];
    $n_bonus_1_v = $data6['attrvalue0'];
    $n_bonus_2 = $data6['attrtype1'];
    $n_bonus_2_v = $data6['attrvalue1'];
    $n_bonus_3 = $data6['attrtype2'];
    $n_bonus_3_v = $data6['attrvalue2'];
    $n_bonus_4 = $data6['attrtype3'];
    $n_bonus_4_v = $data6['attrvalue3'];

    $n_bonus_5 = $data6['attrtype4'];
    $n_bonus_5_v = $data6['attrvalue4'];

    $n_bonus_6 = $data6['attrtype5'];
    $n_bonus_6_v = $data6['attrvalue5'];
    $n_bonus_7 = $data6['attrtype6'];
    $n_bonus_7_v = $data6['attrvalue6'];

    $pierre_1 = $data6['socket0'];
    $pierre_2 = $data6['socket1'];
    $pierre_3 = $data6['socket2'];

   // if ($arme > "6999" && $arme < "7010"){ $arme_css = "images/char/armes/c/1_ev.png"; }

$requette7 = ("SELECT * FROM player.item_proto WHERE vnum LIKE '$arme' LIMIT 1");
$sql7 = mysql_query($requette7) or die(mysql_error());

while(($data7 = mysql_fetch_array($sql7))) {

    $v5 = $data7['value5'];
    $v4 = $data7['value4'];
    $v3 = $data7['value3'];
    $v2 = $data7['value2'];
    $v1 = $data7['value1'];

    $attakMin = $v3 + $v5;
    $attakMax = $v4 + $v5;

    $magikMin = $v1 + $v5;
    $magikMax = $v2 + $v5;

    $antiflag = $data7['antiflag'];
    $niveau = $data7['limitvalue0'];
    $name_arme = htmlentities($data7['locale_name']);

    $bonus_1 = $data7['applytype0'];
    $bonus_1_v = $data7['applyvalue0'];
    $bonus_2 = $data7['applytype1'];
    $bonus_2_v = $data7['applyvalue1'];
    $bonus_3 = $data7['applytype2'];
    $bonus_3_v = $data7['applyvalue2'];
}

	if($antiflag == '32' || $antiflag == '288'){
  $race = 'Guerrier Ninja Sura';
}
elseif($antiflag == '44' || $antiflag == '300'){
  $race = 'Sura';
}
elseif($antiflag == '52' || $antiflag == '308'){
  $race = 'Ninja';
}

elseif($antiflag == '56' || $antiflag == '312'){
  $race = 'Guerrier';
}
elseif($antiflag == '28' || $antiflag == '284'){
  $race = 'Chamane';
}
if ($bonus_1 >= 7 && $bonus_1 <= 47) {
	$bonus_1_v = $bonus_1_v.' %';
}
if ($bonus_2 >= 7 && $bonus_2 <= 47) {
  $bonus_2_v = $bonus_2_v.' %';
}
if ($bonus_3 >= 7 && $bonus_3 <= 47) {
  $bonus_3_v = $bonus_3_v.' %';
}
if ($bonus_1 == '71' || $bonus_1 == '72') {
  $bonus_1_v = $bonus_1_v.' %';
}
if ($bonus_2 == '71' || $bonus_2 == '72') {
  $bonus_2_v = $bonus_2_v.' %';
}
if ($bonus_3 == '71' || $bonus_3 == '72') {
  $bonus_3_v = $bonus_3_v.' %';
}


if ($n_bonus_1 >= '7' && $n_bonus_1 <= '47') {
  $n_bonus_1_v = $n_bonus_1_v.' %';
}
if ($n_bonus_2 >= '7' && $n_bonus_2 <= '47') {
  $n_bonus_2_v = $n_bonus_2_v.' %';
}
if ($n_bonus_3 >= '7' && $n_bonus_3 <= '47') {
  $n_bonus_3_v = $n_bonus_3_v.' %';
}
if ($n_bonus_4 >= '7' && $n_bonus_4 <= '47') {
  $n_bonus_4_v = $n_bonus_4_v.' %';
}
if ($n_bonus_5 >= '7' && $n_bonus_5 <= '47') {
  $n_bonus_5_v = $n_bonus_5_v.' %';
}
if ($n_bonus_6 >= '7' && $n_bonus_6 <= '47') {
  $n_bonus_6_v = $n_bonus_6_v.' %';
}
if ($n_bonus_7 >= '7' && $n_bonus_7 <= '47') {
  $n_bonus_7_v = $n_bonus_7_v.' %';
}


    if($pierre_1 == '28030' || $pierre_1 == '28130' || $pierre_1 == '28230' || $pierre_1 == '28330' || $pierre_1 == '28430' || $pierre_1 == '28530' || $pierre_1 == '28630') {
      $pierre_1_img = "<img src='include-armory/img/pierres/pene.png' alt='' />";
    }
elseif($pierre_1 == '28031' || $pierre_1 == '28131' || $pierre_1 == '28231' || $pierre_1 == '28331' || $pierre_1 == '28431' || $pierre_1 == '28531' || $pierre_1 == '28631') {
      $pierre_1_img = "<img src='include-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($pierre_1 == '28032' || $pierre_1 == '28132' || $pierre_1 == '28232' || $pierre_1 == '28332' || $pierre_1 == '28432' || $pierre_1 == '28532' || $pierre_1 == '28632') {
      $pierre_1_img = "<img src='include-armory/img/pierres/apai.png' alt='' />";
    }
elseif($pierre_1 == '28033' || $pierre_1 == '28133' || $pierre_1 == '28233' || $pierre_1 == '28333' || $pierre_1 == '28433' || $pierre_1 == '28533' || $pierre_1 == '28633') {
      $pierre_1_img = "<img src='include-armory/img/pierres/antig.png' alt='' />";
    }
elseif($pierre_1 == '28034' || $pierre_1 == '28134' || $pierre_1 == '28234' || $pierre_1 == '28334' || $pierre_1 == '28434' || $pierre_1 == '28534' || $pierre_1 == '28634') {
      $pierre_1_img = "<img src='include-armory/img/pierres/antin.png' alt='' />";
    }
elseif($pierre_1 == '28035' || $pierre_1 == '28135' || $pierre_1 == '28235' || $pierre_1 == '28335' || $pierre_1 == '28435' || $pierre_1 == '28535' || $pierre_1 == '28635') {
      $pierre_1_img = "<img src='include-armory/img/pierres/antis.png' alt='' />";
    }
elseif($pierre_1 == '28036' || $pierre_1 == '28136' || $pierre_1 == '28236' || $pierre_1 == '28336' || $pierre_1 == '28436' || $pierre_1 == '28536' || $pierre_1 == '28636') {
      $pierre_1_img = "<img src='include-armory/img/pierres/antich.png' alt='' />";
    }
elseif($pierre_1 == '28037' || $pierre_1 == '28137' || $pierre_1 == '28237' || $pierre_1 == '28337' || $pierre_1 == '28437' || $pierre_1 == '28537' || $pierre_1 == '28637') {
      $pierre_1_img = "<img src='include-armory/img/pierres/antim.png' alt='' />";
    }
elseif($pierre_1 == '28038' || $pierre_1 == '28138' || $pierre_1 == '28238' || $pierre_1 == '28338' || $pierre_1 == '28438' || $pierre_1 == '28538' || $pierre_1 == '28638') {
      $pierre_1_img = "<img src='include-armory/img/pierres/eva.png' alt='' />";
    }
elseif($pierre_1 == '28039' || $pierre_1 == '28139' || $pierre_1 == '28239' || $pierre_1 == '28339' || $pierre_1 == '28439' || $pierre_1 == '28539' || $pierre_1 == '28639') {
      $pierre_1_img = "<img src='include-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($pierre_1 == '28040' || $pierre_1 == '28140' || $pierre_1 == '28240' || $pierre_1 == '28340' || $pierre_1 == '28440' || $pierre_1 == '28540' || $pierre_1 == '28640') {
      $pierre_1_img = "<img src='include-armory/img/pierres/magie.png' alt='' />";
    }
elseif($pierre_1 == '28041' || $pierre_1 == '28141' || $pierre_1 == '28241' || $pierre_1 == '28341' || $pierre_1 == '28441' || $pierre_1 == '28541' || $pierre_1 == '28641') {
      $pierre_1_img = "<img src='include-armory/img/pierres/vie.png' alt='' />";
    }
elseif($pierre_1 == '28042' || $pierre_1 == '28142' || $pierre_1 == '28242' || $pierre_1 == '28342' || $pierre_1 == '28442' || $pierre_1 == '28542' || $pierre_1 == '28642') {
      $pierre_1_img = "<img src='include-armory/img/pierres/def.png' alt='' />";
    }
elseif($pierre_1 == '28043' || $pierre_1 == '28143' || $pierre_1 == '28243' || $pierre_1 == '28343' || $pierre_1 == '28443' || $pierre_1 == '28543' || $pierre_1 == '28643') {
      $pierre_1_img = "<img src='include-armory/img/pierres/hate.png' alt='' />";
    }
elseif($pierre_1 == '28960') {
      $pierre_1_img = "<img src='include-armory/img/pierres/casse.png' alt='' />";
}
else{
	$pierre_1_img = "";
}


if($pierre_2 == '28030' || $pierre_2 == '28130' || $pierre_2 == '28230' || $pierre_2 == '28330' || $pierre_2 == '28430' || $pierre_2 == '28530' || $pierre_2 == '28630') {
      $pierre_2_img = "<img src='include-armory/img/pierres/pene.png' alt='' />";
    }
elseif($pierre_2 == '28031' || $pierre_2 == '28131' || $pierre_2 == '28231' || $pierre_2 == '28331' || $pierre_2 == '28431' || $pierre_2 == '28531' || $pierre_2 == '28631') {
      $pierre_2_img = "<img src='include-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($pierre_2 == '28032' || $pierre_2 == '28132' || $pierre_2 == '28232' || $pierre_2 == '28332' || $pierre_2 == '28432' || $pierre_2 == '28532' || $pierre_2 == '28632') {
      $pierre_2_img = "<img src='include-armory/img/pierres/apai.png' alt='' />";
    }
elseif($pierre_2 == '28033' || $pierre_2 == '28133' || $pierre_2 == '28233' || $pierre_2 == '28333' || $pierre_2 == '28433' || $pierre_2 == '28533' || $pierre_2 == '28633') {
      $pierre_2_img = "<img src='include-armory/img/pierres/antig.png' alt='' />";
    }
elseif($pierre_2 == '28034' || $pierre_2 == '28134' || $pierre_2 == '28234' || $pierre_2 == '28334' || $pierre_2 == '28434' || $pierre_2 == '28534' || $pierre_2 == '28634') {
      $pierre_2_img = "<img src='include-armory/img/pierres/antin.png' alt='' />";
    }
elseif($pierre_2 == '28035' || $pierre_2 == '28135' || $pierre_2 == '28235' || $pierre_2 == '28335' || $pierre_2 == '28435' || $pierre_2 == '28535' || $pierre_2 == '28635') {
      $pierre_2_img = "<img src='include-armory/img/pierres/antis.png' alt='' />";
    }
elseif($pierre_2 == '28036' || $pierre_2 == '28136' || $pierre_2 == '28236' || $pierre_2 == '28336' || $pierre_2 == '28436' || $pierre_2 == '28536' || $pierre_2 == '28636') {
      $pierre_2_img = "<img src='include-armory/img/pierres/antich.png' alt='' />";
    }
elseif($pierre_2 == '28037' || $pierre_2 == '28137' || $pierre_2 == '28237' || $pierre_2 == '28337' || $pierre_2 == '28437' || $pierre_2 == '28537' || $pierre_2 == '28637') {
      $pierre_2_img = "<img src='include-armory/img/pierres/antim.png' alt='' />";
    }
elseif($pierre_2 == '28038' || $pierre_2 == '28138' || $pierre_2 == '28238' || $pierre_2 == '28338' || $pierre_2 == '28438' || $pierre_2 == '28538' || $pierre_2 == '28638') {
      $pierre_2_img = "<img src='include-armory/img/pierres/eva.png' alt='' />";
    }
elseif($pierre_2 == '28039' || $pierre_2 == '28139' || $pierre_2 == '28239' || $pierre_2 == '28339' || $pierre_2 == '28439' || $pierre_2 == '28539' || $pierre_2 == '28639') {
      $pierre_2_img = "<img src='include-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($pierre_2 == '28040' || $pierre_2 == '28140' || $pierre_2 == '28240' || $pierre_2 == '28340' || $pierre_2 == '28440' || $pierre_2 == '28540' || $pierre_2 == '28640') {
      $pierre_2_img = "<img src='include-armory/img/pierres/magie.png' alt='' />";
    }
elseif($pierre_2 == '28041' || $pierre_2 == '28141' || $pierre_2 == '28241' || $pierre_2 == '28341' || $pierre_2 == '28441' || $pierre_2 == '28541' || $pierre_2 == '28641') {
      $pierre_2_img = "<img src='include-armory/img/pierres/vie.png' alt='' />";
    }
elseif($pierre_2 == '28042' || $pierre_2 == '28142' || $pierre_2 == '28242' || $pierre_2 == '28342' || $pierre_2 == '28442' || $pierre_2 == '28542' || $pierre_2 == '28642') {
      $pierre_2_img = "<img src='include-armory/img/pierres/def.png' alt='' />";
    }
elseif($pierre_2 == '28043' || $pierre_2 == '28143' || $pierre_2 == '28243' || $pierre_2 == '28343' || $pierre_2 == '28443' || $pierre_2 == '28543' || $pierre_2 == '28643') {
      $pierre_2_img = "<img src='include-armory/img/pierres/hate.png' alt='' />";
    }
elseif($pierre_2 == '28960') {
      $pierre_2_img = "<img src='include-armory/img/pierres/casse.png' alt='' />";
}
else{
	$pierre_2_img = "";
}



    if($pierre_3 == '28030' || $pierre_3 == '28130' || $pierre_3 == '28230' || $pierre_3 == '28330' || $pierre_3 == '28430' || $pierre_3 == '28530' || $pierre_3 == '28630') {
      $pierre_3_img = "<img src='include-armory/img/pierres/pene.png' alt='' />";
    }
elseif($pierre_3 == '28031' || $pierre_3 == '28131' || $pierre_3 == '28231' || $pierre_3 == '28331' || $pierre_3 == '28431' || $pierre_3 == '28531' || $pierre_3 == '28631') {
      $pierre_3_img = "<img src='include-armory/img/pierres/mortel.png' alt='' />";
    }
elseif($pierre_3 == '28032' || $pierre_3 == '28132' || $pierre_3 == '28232' || $pierre_3 == '28332' || $pierre_3 == '28432' || $pierre_3 == '28532' || $pierre_3 == '28632') {
      $pierre_3_img = "<img src='include-armory/img/pierres/apai.png' alt='' />";
    }
elseif($pierre_3 == '28033' || $pierre_3 == '28133' || $pierre_3 == '28233' || $pierre_3 == '28333' || $pierre_3 == '28433' || $pierre_3 == '28533' || $pierre_3 == '28633') {
      $pierre_3_img = "<img src='include-armory/img/pierres/antig.png' alt='' />";
    }
elseif($pierre_3 == '28034' || $pierre_3 == '28134' || $pierre_3 == '28234' || $pierre_3 == '28334' || $pierre_3 == '28434' || $pierre_3 == '28534' || $pierre_3 == '28634') {
      $pierre_3_img = "<img src='include-armory/img/pierres/antin.png' alt='' />";
    }
elseif($pierre_3 == '28035' || $pierre_3 == '28135' || $pierre_3 == '28235' || $pierre_3 == '28335' || $pierre_3 == '28435' || $pierre_3 == '28535' || $pierre_3 == '28635') {
      $pierre_3_img = "<img src='include-armory/img/pierres/antis.png' alt='' />";
    }
elseif($pierre_3 == '28036' || $pierre_3 == '28136' || $pierre_3 == '28236' || $pierre_3 == '28336' || $pierre_3 == '28436' || $pierre_3 == '28536' || $pierre_3 == '28636') {
      $pierre_3_img = "<img src='include-armory/img/pierres/antich.png' alt='' />";
    }
elseif($pierre_3 == '28037' || $pierre_3 == '28137' || $pierre_3 == '28237' || $pierre_3 == '28337' || $pierre_3 == '28437' || $pierre_3 == '28537' || $pierre_3 == '28637') {
      $pierre_3_img = "<img src='include-armory/img/pierres/antim.png' alt='' />";
    }
elseif($pierre_3 == '28038' || $pierre_3 == '28138' || $pierre_3 == '28238' || $pierre_3 == '28338' || $pierre_3 == '28438' || $pierre_3 == '28538' || $pierre_3 == '28638') {
      $pierre_3_img = "<img src='include-armory/img/pierres/eva.png' alt='' />";
    }
elseif($pierre_3 == '28039' || $pierre_3 == '28139' || $pierre_3 == '28239' || $pierre_3 == '28339' || $pierre_3 == '28439' || $pierre_3 == '28539' || $pierre_3 == '28639') {
      $pierre_3_img = "<img src='include-armory/img/pierres/esqui.png' alt='' />";
    }
elseif($pierre_3 == '28040' || $pierre_3 == '28140' || $pierre_3 == '28240' || $pierre_3 == '28340' || $pierre_3 == '28440' || $pierre_3 == '28540' || $pierre_3 == '28640') {
      $pierre_3_img = "<img src='include-armory/img/pierres/magie.png' alt='' />";
    }
elseif($pierre_3 == '28041' || $pierre_3 == '28141' || $pierre_3 == '28241' || $pierre_3 == '28341' || $pierre_3 == '28441' || $pierre_3 == '28541' || $pierre_3 == '28641') {
      $pierre_3_img = "<img src='include-armory/img/pierres/vie.png' alt='' />";
    }
elseif($pierre_3 == '28042' || $pierre_3 == '28142' || $pierre_3 == '28242' || $pierre_3 == '28342' || $pierre_3 == '28442' || $pierre_3 == '28542' || $pierre_3 == '28642') {
      $pierre_3_img = "<img src='include-armory/img/pierres/def.png' alt='' />";
    }
elseif($pierre_3 == '28043' || $pierre_3 == '28143' || $pierre_3 == '28243' || $pierre_3 == '28343' || $pierre_3 == '28443' || $pierre_3 == '28543' || $pierre_3 == '28643') {
      $pierre_3_img = "<img src='include-armory/img/pierres/hate.png' alt='' />";
    }
elseif($pierre_3 == '28960') {
      $pierre_3_img = "<img src='include-armory/img/pierres/casse.png' alt='' />";
}
else{
	$pierre_3_img = "";
}



		$bonus_1 = $itembonus[$bonus_1];
		$bonus_2 = $itembonus[$bonus_2];
		$bonus_3 = $itembonus[$bonus_3];
		$n_bonus_1 = $itembonus[$n_bonus_1];
		$n_bonus_2 = $itembonus[$n_bonus_2];
		$n_bonus_3 = $itembonus[$n_bonus_3];
		$n_bonus_4 = $itembonus[$n_bonus_4];
		$n_bonus_5 = $itembonus[$n_bonus_5];
		$n_bonus_6 = $itembonus[$n_bonus_6];
		$n_bonus_7 = $itembonus[$n_bonus_7];
    $pierre_1 = $pierres[$pierre_1];
    $pierre_2 = $pierres[$pierre_2];
    $pierre_3 = $pierres[$pierre_3];
	
	if($bonus_1_v >= '0') { $color='color:rgba(200,255,200,1)'; } else { $color='color:#e57875'; }
	if($bonus_2_v >= '0') { $color2='color:rgba(200,255,200,1)'; } else { $color2='color:#e57875'; }
	if($bonus_3_v >= '0') { $color3='color:rgba(200,255,200,1)'; } else { $color3='color:#e57875'; }
	
	if($n_bonus_1_v >= '0') { $color4='color:rgba(200,255,200,1)'; } else { $color4='color:#e57875'; }
	if($n_bonus_2_v >= '0') { $color5='color:rgba(200,255,200,1)'; } else { $color5='color:#e57875'; }
	if($n_bonus_3_v >= '0') { $color6='color:rgba(200,255,200,1)'; } else { $color6='color:#e57875'; }
	if($n_bonus_4_v >= '0') { $color7='color:rgba(200,255,200,1)'; } else { $color7='color:#e57875'; }
	if($n_bonus_5_v >= '0') { $color8='color:rgba(200,255,200,1)'; } else { $color8='color:#e57875'; }
	if($n_bonus_6_v >= '0') { $color9='color:rgba(200,255,200,1)'; } else { $color9='color:#e57875'; }
	if($n_bonus_7_v >= '0') { $color10='color:rgba(200,255,200,1)'; } else { $color10='color:#e57875'; }
?>