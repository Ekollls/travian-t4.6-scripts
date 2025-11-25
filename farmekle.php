<?php
include("application/Account.php");
if($session->gold >= 50){

  $sql = $database->query("SELECT * FROM farmlist WHERE `owner` = '".$session->uid."' and wref = '".$village->wid."'");
  $query = count($sql);
  foreach($sql as $row0){
      $lid = $row0["id"];
      $lname = $row0["name"];
      $lowner = $row0["owner"];
      $lwref = $row0["wref"];
      $lstart=$row0['laststart'];
      $lvname = $village->vname;
      $FLs=$database->getVilUFl($village->wid,$session->uid); 
      $coor = $village->coor;

      $varray = $database->getProfileVillages(3);
    foreach($varray as $vil) {

      $distance1 = $database->getDistance($coor['x'], $coor['y'], $vil["vx"], -$vil["vy"]);
      $speed = SPEED*15;
      $database->query("INSERT INTO raidlist (lid,towref,x,y,distance,t1) VALUES('$lid','".$vil["wref"]."','".$vil["vx"]."','".$vil["vy"]."','$distance1','$speed')");


    }

  }

  $database->query('UPDATE users SET gold = gold - 50 WHERE id = '.$session->uid.'');

header("location:build.php?id=39&t=99");
}