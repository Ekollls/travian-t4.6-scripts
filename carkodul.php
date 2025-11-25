<?php
include("baglanti.php");
include("application/Account.php"); 

if($session->cark > 0){

if($_GET['odul'] == 0){
  $database->query('UPDATE users SET gold = gold + 10000 WHERE id = '.$session->uid.'');
  $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
  $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10.000 Altın Kazandın!', message = '10.000 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
  header("location:cark.php?yazi=0");
}

if($_GET['odul'] == 1){
    $database->query('UPDATE users SET silver = silver + 1000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.000 Gümüş Kazandın!', message = '1.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=1");
  }

  if($_GET['odul'] == 2){
    $database->query('UPDATE users SET gold = gold + 10 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10 Altın Kazandın!', message = '10 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=2");
  }

  if($_GET['odul'] == 3){
    $database->query('UPDATE users SET cark = cark + 2 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '+2 Çark Çevirme Kazandın!', message = '+2 Çark Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=3");
  }

  if($_GET['odul'] == 4){
    $database->query('UPDATE users SET silver = silver + 20000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '20.000 Gümüş Kazandın!', message = '20.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=4");
  }

  if($_GET['odul'] == 5){
    $database->query('UPDATE users SET gold = gold + 10 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10 Altın Kazandın!', message = '10 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=5");
  }

  if($_GET['odul'] == 6){
    $database->query('UPDATE users SET gold = gold + 6400 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '6.400 Altın Kazandın!', message = '6.400 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=6");
  }

  if($_GET['odul'] == 7){
    $database->query('UPDATE users SET silver = silver + 20000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '20.000 Gümüş Kazandın!', message = '20.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");
    header("location:cark.php?yazi=7");
  }

  if($_GET['odul'] == 8){
    $tahil = 2000*SPEED;
    mysqli_query($connection,"UPDATE vdata set crop = crop + ".($session->crop+$tahil)."");
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '".number_format($tahil)." Bonus hammadde kazandın!', message = 'Köyünüze ".number_format($tahil)." Bonus hammadde kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=8");
  }


  if($_GET['odul'] == 9){
    $database->query('UPDATE users SET silver = silver + 1000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.000 Gümüş Kazandın!', message = '1.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=9");
  }

  if($_GET['odul'] == 10){
    $database->query('UPDATE users SET gold = gold + 3200 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '3.200 Altın Kazandın!', message = '3.200 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=10");
  }

  if($_GET['odul'] == 11){
    $database->query('UPDATE users SET gold = gold + 10 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10 Altın Kazandın!', message = '10 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=11");
  }

  if($_GET['odul'] == 12){
    $database->query('UPDATE users SET gold = gold + 1600 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.600 Altın Kazandın!', message = '1.600 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=12");
  }

  if($_GET['odul'] == 13){
    $database->query('UPDATE users SET silver = silver + 20000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '20.000 Gümüş Kazandın!', message = '20.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=13");
  }

  if($_GET['odul'] == 14){
    $database->query('UPDATE users SET silver = silver + 1000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.000 Gümüş Kazandın!', message = '1.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=14");
  }

  if($_GET['odul'] == 15){
    $database->query('UPDATE users SET cark = cark + 5 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '+5 Çark Çevirme Kazandın!', message = '+5 Çark Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=15");
  }

  if($_GET['odul'] == 16){
    $database->query('UPDATE users SET gold = gold + 10 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10 Altın Kazandın!', message = '10 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=16");
  }

  if($_GET['odul'] == 17){
    $database->query('UPDATE users SET silver = silver + 400000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '400.000 Gümüş Kazandın!', message = '400.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=17");
  }

  if($_GET['odul'] == 18){
    $database->query('UPDATE users SET gold = gold + 10 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '10 Altın Kazandın!', message = '10 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=18");
  }

  if($_GET['odul'] == 19){
    $database->query('UPDATE users SET silver = silver + 100000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '100.000 Gümüş Kazandın!', message = '100.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=19");
  }
  if($_GET['odul'] == 20){
    $database->query('UPDATE users SET silver = silver + 20000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '20.000 Gümüş Kazandın!', message = '20.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=20");
  }

  if($_GET['odul'] == 21){
    $database->query('UPDATE users SET silver = silver + 1000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.000 Gümüş Kazandın!', message = '1.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=21");
  }

  if($_GET['odul'] == 22){
    $database->query('UPDATE users SET gold = gold + 100 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '100 Altın Kazandın!', message = '100 Altın Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=22");
  }

  if($_GET['odul'] == 23){
    $database->query('UPDATE users SET cark = cark + 3 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '+3 Çark Çevirme Kazandın!', message = '+3 Çark Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=23");
  }
  if($_GET['odul'] == 24){
    $database->query('UPDATE users SET silver = silver + 1000 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET cark = cark - 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query('UPDATE users SET carksay = carksay + 1 WHERE id = '.$session->uid.'');
    $database->query("INSERT `mdata` SET `target` = '".$session->uid."', `owner` = '6', topic = '1.000 Gümüş Kazandın!', message = '1.000 Gümüş Kazandınız.

    İyi Oyunlar Dileriz..',`time` = ".time()." ");

    header("location:cark.php?yazi=24");
  }
}else{
  header("location:dorf1.php");
}
?>