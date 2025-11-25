<?php
include("baglanti.php");
include("application/Account.php");  
if($session->bonusver == '0'){
  $odun = 2000*SPEED;
	$tugla = 2000*SPEED;
	$demir = 2000*SPEED;
	$tahil = 2000*SPEED;
	mysqli_query($connection,"UPDATE vdata set clay = clay + ".($session->clay+$tugla)."");
	mysqli_query($connection,"UPDATE vdata set iron = iron + ".($session->iron+$demir)."");
	mysqli_query($connection,"UPDATE vdata set crop = crop + ".($session->crop+$tahil)."");
	mysqli_query($connection,"UPDATE vdata set wood = wood + ".($session->wood+$odun)."");
//for($i=1;$i<=50; $i++){
$database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = 'Raw Materials Bonus!', message = 'Köyünüze ".number_format($odun).", ".number_format($tugla).", ".number_format($demir).", ".number_format($tahil)." Bonus hammadde aldınız.

İyi Oyunlar Dileriz..',`time` = ".time()." ");
$database->query("UPDATE `users` SET `bonusver` = 1 WHERE `id` = '".$session->uid."'");
$database->query("UPDATE `users` SET `gold` =  `gold` + 1 WHERE `id` = '".$session->uid."'");
//}
}
header("location:dorf1.php");
?>
