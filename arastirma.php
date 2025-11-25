<?php
session_start();
if($_SESSION['id_user']>5){
include("application/config.php");
 //include("application/DB.php");
 include("application/Database/db_MYSQL.php");
include("application/Lang/" . $language . "/Lang.php");
	$resourcess=$database->query("SELECT wood,clay,iron,crop from vdata where wref =".$_SESSION['wid']);
	$usergold=$database->getUserGold($_SESSION['id_user']);
if($_GET['code']==1){ //akademi
	$urll= "https://".SPEED.".turkeytravian.com/build.php?id=".$_GET['id'];
	if($resourcess[0]['wood']>=40000 && $resourcess[0]['clay']>=40000 && $resourcess[0]['iron']>=40000 && $resourcess[0]['crop']>=40000 && $usergold[0]>=30 ){
	$database->modifyResource($_SESSION['wid'],40000,40000,40000,40000,0);
	$database->modifyGold($_SESSION['id_user'],30,0);
	$database->UpdateAchievU($_SESSION['id_user'],"`a5`=`a5`+30");
	$database->query("UPDATE `tdata` SET `t2`=1,`t3`=1,`t4`=1,`t5`=1,`t6`=1,`t7`=1,`t8`=1,`t9`=1 WHERE `vref`=".$_SESSION['wid']);
	}
	
}elseif($_GET['code']==2){//zırh
	$urll= "https://".SPEED.".turkeytravian.com/build.php?id=".$_GET['id'];
	if($resourcess[0]['wood']>=400000 && $resourcess[0]['clay']>=400000 && $resourcess[0]['iron']>=400000 && $resourcess[0]['crop']>=400000 && $usergold[0]>=50 ){
	$database->modifyResource($_SESSION['wid'],400000,400000,400000,400000,0);
	$database->modifyGold($_SESSION['id_user'],50,0);
	$database->UpdateAchievU($_SESSION['id_user'],"`a5`=`a5`+50");
	$database->query("UPDATE `abdata` SET `a1`=20,`a2`=20,`a3`=20,`a4`=20,`a5`=20,`a6`=20,`a7`=20,`a8`=20,`b1`=20,`b2`=20,`b3`=20,`b4`=20,`b5`=20,`b6`=20,`b7`=20,`b8`=20 WHERE `vref`=".$_SESSION['wid']);
	}
}else{
	$urll= "https://".SPEED.".turkeytravian.com/dorf1.php";
}

		header("Location: ".$urll."");
		exit;
}



?>