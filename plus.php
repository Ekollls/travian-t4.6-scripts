<?php
include_once "application/Account.php";






$database->isWinner();
 $schek =$session->checker;
if(isset($_GET['utakegold'])  and ($_GET['checker'])==$schek){
    $Refid=$database->FilterIntValue($_GET['utakegold']);
    $referer=$database->getUserField($Refid,'invited',0);
    $pop=$database->getVSumField($Refid,'pop');
    if($referer==$session->uid && $pop>=REF_POP){
	$Gu=$session->gold;
	$Gusum=$Gu+REF_GOLD;

	if($_GET['checker']==$session->checker){
        $database->query("UPDATE users set gold = '".$Gusum."' where id = ".$session->uid."");
        $database->query("UPDATE users set invited=0 where id = '".$Refid."'");
        $database->query("INSERT INTO `referals` (`id`,`uid`,`referer`) VALUES ('0','".$session->uid."','".$Refid."')");
    }
    $session->changeChecker();

    header("Location: plus.php?id=3");
    exit();
    }
     }

?>
<!DOCTYPE html>
<html>
<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE spieler <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
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
                <div class="contentTitle">
                    
                <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle"
                           href="/dorf1.php"
                           title="Pencereyi kapat">
                            <svg viewBox="0 0 20 20"><g class="outline">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g><g class="icon">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g></svg>
                        </a>
                                                                <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green"
                           href="https://t4answers.trtravian.com/?lang=tr&aid=1#go2answer"
                           target="_blank"
                           title="SSS">&nbsp;</a></div>
                <div class="contentContainer">
                    <div id="content" class="player">


<?php
if(!isset($_GET['change'])){
if(isset($_GET['id'])) {
$id = $database->filterIntValue($database->filterVar($_GET['id']));
} else {
$id = "";
}
if ($id == "" or $id==0) {
include("application/views/Plus/1.php");
}
elseif ($id == 3 || $id == 1) {
include("application/views/Plus/3.php");
}
elseif ($id == 4 || $id == 4) {
include("application/views/Plus/4.php");
}
elseif ($id == 5) {
include("application/views/Plus/5.php");
}
elseif ($id == 6) {
include("application/views/Plus/carkcevir.php");
}

$gold=$session->gold;
if ($id == 7 && $session->right['s4']) {
	if($gold>=2){
$building->finishAll();
header("Location: plus.php?id=3&fin");
        exit();
}else{ header("Location: plus.php?id=3&fig");
        exit();}
}


if ($id == 15) {
    if(!$session->goldclub && $session->right['s4']){
    $uid=$session->uid;
    $database->BuyClub($uid,$session->gold);
    }
    header("Location: plus.php?id=3");exit();
}
elseif ($id >= 16) {
include("application/views/Plus/3.php"); exit();
}
}else{
    include("application/views/Plus/7.php");
}

?>


                    <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>
                </div>
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