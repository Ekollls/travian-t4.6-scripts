<?php
include_once "application/Account.php";
include ("application/Profile.php");

if(!isset($_GET['t']) || !is_numeric($_GET['t']) || $_GET['t'] > 5){$_GET['t'] = 1;}
?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE production <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV1">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">
            <?php
            include("application/views/topheader.php");
            include("application/views/toolbar.php");
            ?>
        </div>
        <div id="center">


            <?php include("application/views/sideinfo.php"); ?>

            <div id="contentOuterContainer" class="size1">

                <?php include("application/views/res.php"); ?>
                <div class="contentTitle"><a id="closeContentButton" class="contentTitleButton" href="dorf<?=$session->link?>.php" title="Close window">&nbsp;</a>
                    <a id="answersButton" class="contentTitleButton" href="http://t4.answers.travian.com/index.php?aid=106#go2answer" target="_blank" title="Travian Answers">&nbsp;</a></div>
			   <div class="contentContainer">
                    
<style>
.altın {
    border: 1px solid #283308;
    background-image: linear-gradient(to bottom,#7cb029,#587c1e);
    box-shadow: inset 2px 0 1px -1px #4b6f19, inset -2px 0 1px -1px #4b6f19, inset 0 3px 1px -1px #b5e251, inset 0 -3px 1px -1px rgb(44 75 12 / 60%);
    color: #fff;
    width: 150px;
    position: absolute;
    text-align:center;
    margin-left:220px;
    padding: 8px;
}
.aciklama {
    border: 1px solid #283308;
    background-image: linear-gradient(to bottom,#cf0000,#851a87);
    box-shadow: inset 2px 0 1px -1px #000000, inset -2px 0 1px -1px #000000, inset 0 3px 1px -1px #bc0722, inset 0 -3px 1px -1px rgb(0 0 0 / 60%);
    color: #fff;
    font-weight: 1000;
    position: absolute;
    text-align: center;
    margin-left: 120px;
    padding: 8px;
}
    </style>
   <center> <img src="img/buy.gif" style="width:550px;"></center>
<? 
if($session->lang == 'en'){
    echo '<h1 class="titleInHeader">Altın Satın Al</h1><center>';
    echo '<br><br><a href="https://shopier.com/4654641"><div class="altın"><font size="3px">600 <img src="img/x.gif" alt="Gold" class="gold"> 10 TL <br></font></div></a><br>';
    echo '<br><br><a href="https://shopier.com/4654673"><div class="altın"><font size="3px">1500 <img src="img/x.gif" alt="Gold" class="gold"> 15 TL <br></font></div></a><br>';
    echo '<br><br><a href="https://shopier.com/4654694"><div class="altın"><font size="3px">4500 <img src="img/x.gif" alt="Gold" class="gold"> 30 TL <br></font></div></a><br>';
    echo '<br><br><a href="https://shopier.com/4654755"><div class="altın"><font size="3px">10000 <img src="img/x.gif" alt="Gold" class="gold"> 55 TL <br></font></div></a><br>';
    echo '<br><br><a href="https://shopier.com/9714350"><div class="altın"><font size="3px">20.000 <img src="img/x.gif" alt="Gold" class="gold"> 75 TL <br></font></div></a><br>';
}else{
    echo '<h1 class="titleInHeader">Gold Buy</h1><center>';
    echo '<b><br><br><div class="altın"><font size="3px">600 <img src="img/x.gif" alt="Gold" class="gold"> 10$ <br></font></div><br>';
    echo '<br><br><div class="altın"><font size="3px">1500 <img src="img/x.gif" alt="Gold" class="gold"> 15$ <br></font></div><br>';
    echo '<br><br><div class="altın"><font size="3px">4500 <img src="img/x.gif" alt="Gold" class="gold"> 30$ <br></font></div><br>';
    echo '<br><br><div class="altın"><font size="3px">9500 <img src="img/x.gif" alt="Gold" class="gold"> 45$ <br></font></div><br>';
    echo '<br><br><div class="altın"><font size="3px">19.000 <img src="img/x.gif" alt="Gold" class="gold"> 55$ <br></font></div><br></b>';

    echo '<br><br><div class="aciklama">We receive payments in cryptocurrency (USDT).</div>';
}?>	<br/>


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






</center>
<br><br>

                    </div>
    <div class="clear"></div>
                <div class="contentFooter">&nbsp;</div>

            </div>
            <?php
            include("application/views/rightsideinfor.php");
            ?>
            <div class="clear"></div>
        </div>
        <?php

        include("application/views/header.php");
        ?>
    </div>
    <div id="ce"></div>
</div>
</body>
</html>
<?php 
?>