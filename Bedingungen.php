<?php



$M = date("m");
$d = date("d");
$y = date("Y");
$H = date("H");
$min = date("i");
$sek = date("s");


echo $d.".".$M.".".$y. "  ".$H.":".$min.":".$sek;

if($H >= 12 && $H <= 13) echo "<p>Es ist Mittag!</p>";
elseif($H < 12) echo "<p>Guten Morgen!</p>";
elseif($H > 13 && $H <18) echo "<p>Guten Nachmittag!</p>";
elseif($H >= 18 && $H <22) echo "<p>Guten Abend! </p>";
elseif ($H >=22 && $H <=3) echo "<p>Gute Nacht! </p>";
?>
