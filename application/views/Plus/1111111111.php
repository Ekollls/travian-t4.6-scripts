<?php
include("Templates/Plus/pmenu.php");$extragoud="0";
$_SESSION['email']=$session->email;
?>
<?php if ($language=='ru'){ ?>
<style>
    .tdc{text-align:center;}
</style>


<br/>
<?php } if ($language == 'en' or $language=='ru'){?>
	<style>
    .tdc{text-align:center;}
</style>
<table width="100%" cellpadding="1" cellspacing="1" >
    <tr><thead>
        <th colspan="5"><center><b><font color="orange"><u>GOLD SHOP</u></b></font></center></th> <br>
    </tr>
    </thead><tr>
        <td  class="tdc" width="20%">#</td>
        <td  class="tdc" width="20%">Price</td>
        <td  class="tdc" width="20%">Amount</td>
        <td  class="tdc" width="20%">Buy(USD)</td>

    </tr><tr>
        <td class="tdc"> Tariff A</td>
        <td class="tdc"> 2 USD</td>
        <td class="tdc"> 100 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"> <a href="paytr/odeme.php?urun_id=1&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>
    </tr>
    <tr>
        <td class="tdc"> Tariff B</td>
        <td class="tdc"> 5 USD</td>
        <td class="tdc"> 250 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"> <a href="paytr/odeme.php?urun_id=2&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr><tr>
        <td class="tdc"> Tariff C</td>
        <td class="tdc"> 10 USD</td>
        <td class="tdc"> 600 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=3&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
    <tr>
        <td class="tdc"> Tariff D</td>
        <td class="tdc"> 20 USD</td>
        <td class="tdc"> 1600 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=4&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
    <tr>
        <td class="tdc"> Tariff E</td>
        <td class="tdc"> 50 USD</td>
        <td class="tdc"> 3600 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=5&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>
    </tr>
    <tr>
        <td class="tdc"> Tariff F</td>
        <td class="tdc"> 100 USD</td>
        <td class="tdc"> 10,000 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=6&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
	 <tr>
       <td class="tdc" ><font color="red"><b>MEGA PACK</b></font></td>
        <td class="tdc" > 200 USD</td>
        <td class="tdc"> 50,000 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=7&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
	
	<tr>
       <td class="tdc" ><font color="red"><b>MEGA PACK 2</b></font></td>
        <td class="tdc" > 300 USD</td>
        <td class="tdc"> 75,000 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=8&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
	
    <tr>
       <td class="tdc" ><font color="red"><b>CAMPAİGN PACK</b></font></td>
        <td class="tdc" > 50 USD</td>
        <td class="tdc"> 100,000 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=10&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>
	
	<tr>
       <td class="tdc" ><font color="red"><b>ULTRA PACK</b></font></td>
        <td class="tdc" > 500 USD</td>
        <td class="tdc"> 100,000 <img src="img/x.gif" class="gold" alt="gold"></td>
        <td class="tdc"><a href="paytr/odeme.php?urun_id=9&email=<? echo $session->email; ?>&username=<? echo $session->username;?>">Buy</a></td>

    </tr>


</table><br/>


<p align="left">

                 <h1><p><b><font color="orange"><center><img src="odemeimage/bank-garanti.png" alt=""/></center></b>
                    <table class="table" style="margin-bottom:0">
                        <tbody><tr>
                            <td>Şube No.</td>
                            <td>1575</td>
                        </tr>
                        <tr>
                            <td>Şube Adı</td>
                            <td>Zonguldak Çarşı Şubesi</td>
                        </tr>
                        <tr>
                            <td>Hesap No.</td>
                            <td>6696682</td>
                        </tr>
                        <tr>
                            <td>IBANN</td>
                            <td>TR77 0006 2001 5750 0006 6966 82</td>
                        </tr>
                        </tbody>
                    </table></a></font></b>
<?php }?>