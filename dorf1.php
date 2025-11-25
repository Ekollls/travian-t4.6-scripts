<?php
$start = microtime(true);
include_once "application/Account.php";
$_SESSION['dorf'] = $session->link = 1;
if (isset($_GET['visit'])) {
    header("Location:dorf1.php");
    exit;
}
$building->procBuild($_GET);
?>


<?php include("application/views/html.php"); ?>
<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> village1  perspectiveResources buildingsV3 <?php echo DIRECTION; ?> buildingsV3">
<div id="reactDialogWrapper"></div>

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
                    <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf1.php">
                        <svg viewBox="0 0 20 20"><g class="outline">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g><g class="icon">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g></svg>
                    </a>
                    <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://t4answers.tralord.com/?lang=en&amp;aid=1#go2answer" target="_blank">&nbsp;</a>
                </div>
                <div class="contentContainer">
                    <div id="content" class="village1">
                        <?php
                        include("application/views/field.php");
                        if (!isset($timer)) {
                            $timer = 1;
                        }
                        if ($building->NewBuilding) {
                            include("application/views/Building.php");
                        }
                        ?>
                        <div class="village1Content">
                            <div id="map_details">
                                <div class="movements">
                                    <?php
                                    include("application/views/movement.php");
                                    ?></div>
                                <?php
                                include("application/views/production.php");
                                include("application/views/troops.php");
                                echo '<div class="clear"></div>';
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- div id = sidebarAfterContent -->
                <?php
                include("application/views/rightsideinfor.php");
                ?>
                <div class="clear"></div>
            </div>

            <!-- div id = footer -->
            <?php
            include("application/views/header.php");
            ?>
        </div>
        <div id="ce"></div>
    </div>

</body>
</html>