<?php
include_once "application/Account.php";
$_SESSION['dorf'] = $session->link = 2;
if (isset($_GET['visit'])) {
    //$database->UpdateAchievU($session->uid,"`a7`=1"); //ачиinка за группу
    header("Location:dorf2.php");
    exit;
}


$building->procBuild($_GET);
$_SESSION['dorf'] = 2;

if (isset($_GET['pivo'])) {

    $wid = $village->wid;

    $vwood = $village->awood;
    $vclay = $village->aclay;
    $viron = $village->airon;
    $vcrop = $village->acrop;

    if (38700 < $vwood && 16800 < $vclay && 59400 < $viron && 13400 < $vcrop) {
        $lvl = $village->resarray;
        $lvll = 0;
        for ($i = 16; $i <= 38; $i++) {
            if ($lvl['f' . $i . 't'] == 35) {
                $lvll = $lvl['f' . $i];
            }
        }
        if ($lvll) {
            $bre = $bid35[$lvll]['attri'];

            $database->breweryparty($bre, $wid, $session->uid);
        }
    }
}


?>
<!DOCTYPE html >

<?php include("application/views/html.php"); ?>
<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> village2  perspectiveBuildings <?php echo DIRECTION; ?> buildingsV3">
<div id="reactDialogWrapper"></div>
<script type="text/javascript">
    window.ajaxToken = '<?=md5(time())?>';
</script>
<div id="background" class="showWall <?=get_tribe()?>">
    <div id="headerBar"></div>

    <div id="topBar">
        <?php
        include("application/views/topheader.php");
        include("application/views/toolbar.php");
        ?>
    </div>

    <div id="topBarHeroWrapper">
        <?php
        include("application/views/hero.php");
        ?>
    </div>

    <div id="bodyWrapper">
        <img style="filter:chroma();" src="/img/x.gif" id="msfilter" alt="">
        <div id="center">

            <!-- div id = sidebarBeforeContent -->
            <?php include("application/views/sideinfo.php"); ?>

            <!-- div id = contentOuterContainer-->
            <div id="contentOuterContainer" class="size1">

                <?php include("application/views/res.php"); ?>
                <div class="contentTitle">
                    <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf2.php">
                        <svg viewBox="0 0 20 20"><g class="outline">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g><g class="icon">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g></svg>
                    </a>
                    <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://t4answers.tralord.com/?lang=en&amp;aid=1#go2answer" target="_blank">&nbsp;</a>
                </div>
                <div class="contentContainer">
                    <div id="content" class="village2">
                        <div class="villageMapWrapper">
                            <?php include("application/views/dorf2.php");?>
                        </div>
                        <?php
                        if ($building->NewBuilding) {
                            include("application/views/Building.php");
                        }
                        ?>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="contentFooter"> </div>
            </div>
            <!-- div id = sidebarAfterContent -->
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