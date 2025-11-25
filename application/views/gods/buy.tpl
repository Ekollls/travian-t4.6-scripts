<?php
if($_GET['hera'] == 1 && $session->favor >= 1000) {
	$odun = 160000;
	$tugla = 160000;
	$demir = 160000;
	$tahil = 160000;
	
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");

$database->query("UPDATE vdata set clay = clay + ".($session->clay+$tugla)." where `wref`='".$village->wid."'");
	$database->query("UPDATE vdata set iron = iron + ".($session->iron+$demir)." where `wref`='".$village->wid."'");
	$database->query("UPDATE vdata set crop = crop + ".($session->crop+$tahil)." where `wref`='".$village->wid."'");
	$database->query("UPDATE vdata set wood = wood + ".($session->wood+$odun)." where `wref`='".$village->wid."'");


	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Resource Pack. <br>'.$odun.' Wood, '.$tugla.' Clay, '.$demir.' Iron, '.$tahil.' Crop ';
    echo 'Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=1");
}

if($_GET['hera'] == 2 && $session->favor >= 1000 && $session->god == 1) {
	
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
	$database->query("UPDATE users set cp = cp + 500 where `id`='".$session->uid."'");


	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Culture Points Pack. <br>+500 Culture Points ';
    echo 'Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=1");
}


if($_GET['hera'] == 3 && $session->favor >= 1000 && $session->god == 1) {
	
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
	$database->query("UPDATE users set gold = gold + 5 where `id`='".$session->uid."'");


	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Gold Pack. <br>5 Gold ';
    echo 'Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=1");
}


if($_GET['ares'] == 1 && $session->favor >= 1000 && $session->god == 2) {
	

    if($session->tribe == 1){
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u6 = u6 + 800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 2){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u6 = u6 + 800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 3){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u6 = u6 + 800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 6){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u6 = u6 + 800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 7){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u6 = u6 + 800 where `vref` = '".$village->wid."'");
    }



	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Pack. <br>+800 ';
            if($session->tribe == 1){
            echo '<img class="unit u6" src="img/x.gif" alt="Equites Caesaris" title="Equites Caesaris">';
            }elseif($session->tribe == 2){
                echo '<img class="unit u16" src="img/x.gif" alt="Teutonic Knight" title="Teutonic Knight">';
            }elseif($session->tribe == 3){
                 echo '<img class="unit u26" src="img/x.gif" alt="Haeduan" title="Haeduan">';
            }elseif($session->tribe == 6){
                 echo '<img class="unit u56" src="img/x.gif" alt="Wolf" title="Wolf">';
            }elseif($session->tribe == 7){
                 echo '<img class="unit u66" src="img/x.gif" alt="Teutonic Knight" title="Teutonic Knight">';
            }


            
    echo ' Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=2");
}











if($_GET['athena'] == 1 && $session->favor >= 1000 && $session->god == 3) {
	

    if($session->tribe < 3){
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u2 = u2 + 4800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 3){
    $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u1 = u1 + 4800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 6){
    $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u2 = u2 + 4800 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 7){
    $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u1 = u1 + 4800 where `vref` = '".$village->wid."'");
    }


	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Pack. <br>+4800 ';
           if($session->tribe == 1){
            echo '<img class="unit u2" src="img/x.gif" alt="Praetorian" title="Praetorian">';
            }elseif($session->tribe == 2){
                echo '<img class="unit u12" src="img/x.gif" alt="Spearman" title="Spearman">';
            }elseif($session->tribe == 3){
                 echo '<img class="unit u21" src="img/x.gif" alt="Phalanx" title="Phalanx">';
            }elseif($session->tribe == 6){
                 echo '<img class="unit u52" src="img/x.gif" alt="Spider" title="Spider">';
            }elseif($session->tribe == 7){
                 echo '<img class="unit u61" src="img/x.gif" alt="Clubswinger" title="Clubswinger">';
            }
    echo ' Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=3");
}



if($_GET['athena'] == 2 && $session->favor >= 3000 && $session->god == 3 && $session->protect < 1) {
	

    $tar = time()+86400;
    $database->query("UPDATE users set ptime = '".$tar."', favor = favor - 3000 where `id`='".$session->uid."'");
    $database->query("UPDATE users set protect = '1' where `id`='".$session->uid."'");



	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Pack. <br>+1 Day protection';
    echo ' Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=3");
}










if($_GET['artemis'] == 1 && $session->favor >= 1000 && $session->god == 4) {
	

    if($session->tribe == 1){
	$database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u4 = u4 + 4000 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 2){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u4 = u4 + 4000 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 3){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u3 = u3 + 4000 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 6){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u4 = u4 + 4000 where `vref` = '".$village->wid."'");
    }elseif($session->tribe == 7){
        $database->query("UPDATE users set favor = favor - 1000 where `id`='".$session->uid."'");
    $database->query("UPDATE units set u3 = u3 + 4000 where `vref` = '".$village->wid."'");
    }



	echo '<center><b><img src="./img/case.gif" style="height:300px;"><br>You Opened the Pack. <br>+4000 ';
            if($session->tribe == 1){
            echo '<img class="unit u4" src="img/x.gif" alt="Equites Legati" title="Equites Legati">';
            }elseif($session->tribe == 2){
                echo '<img class="unit u14" src="img/x.gif" alt="Scout" title="Scout">';
            }elseif($session->tribe == 3){
                 echo '<img class="unit u23" src="img/x.gif" alt="Pathfinder" title="Pathfinder">';
            }elseif($session->tribe == 6){
                 echo '<img class="unit u54" src="img/x.gif" alt="Bat" title="Bat">';
            }elseif($session->tribe == 7){
                 echo '<img class="unit u63" src="img/x.gif" alt="Axeman" title="Axeman">';
            }
    echo ' Wins.</b></center><br><br>';
	
	header("Refresh:3; url=gods.php?s=3");
}
?>