<?php

include_once "application/Account.php";


require_once("application/Ranking.php");
$ranking->PlayerClimber();
if (!isset($_GET['id'])) {
    $_GET['id'] = 1;
}
$id = $database->filterIntValue($database->filterVar($_GET['id']));
$_GET['id'] = $id;
if (isset($id) && !is_numeric($id)) die('Hacking Attemp');
if (isset($_GET['rank'])) {
    $_GET['rank'] = $database->filterIntValue($database->filterVar($_GET['rank']));
}
if (isset($_GET['rank']) && !is_numeric($_GET['rank'])) die('Hacking Attemp');
if (isset($_POST['rank'])) {
    $_POST['rank'] = $database->filterIntValue($database->filterVar($_POST['rank']));
}
if (isset($_POST['rank']) && !is_numeric($_POST['rank'])) die('Hacking Attemp');
$ranking->procRankReq($_GET);
$ranking->procRank($_POST);

?>


<?php include("application/views/html.php"); ?>


<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> statistics  perspectiveResources <?php echo DIRECTION; ?> buildingsV3">
    <div id="reactDialogWrapper"></div>

    <div id="background">
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

                <?php include("application/views/sideinfo.php"); ?>

                <div id="contentOuterContainer" class="size1">
                    <?php include("application/views/res.php"); ?>

                    <div class="contentTitle">
                        <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf2.php">
                            <svg viewBox="0 0 20 20">
                                <g class="outline">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g>
                                <g class="icon">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g>
                            </svg>
                        </a>
                        <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://t4answers.tralord.com/?lang=en&amp;aid=1#go2answer" target="_blank">&nbsp;</a>
                    </div>

                    <div class="contentContainer">
                        <div id="content" class="statistics">
                            <script type="text/javascript">
                                window.addEvent('domready', function() {
                                    $$('.subNavi').each(function(element) {
                                        new Travian.Game.Menu(element);
                                    });
                                });
                            </script>


                            <h1 class="titleInHeader"><?= HEADER_STATS ?></h1>
                            <div class="contentNavi subNavi tabFavorWrapper">

                                <button type="button" class="scrollFrom" disabled="disabled"></button>
                                <div class="scrollingContainer">
                                    <?php
                                    $t = -1;
                                    if (isset($_GET['id'])) {
                                        $t = $_GET['id'];
                                    }
                                    ?>
                                    <div class="content favor favorKeyNone">
                                        <a href="statistiken.php" class="tabItem <?php if ($t == -1 || $t == 1 || $t == 31 || $t == 32 || $t == 7) {
                                                                                        echo 'active';
                                                                                    } else {
                                                                                        echo 'normal';
                                                                                    } ?>">
                                            <?= STATISTIC28 ?>
                                        </a>
                                    </div>
                                    <div class="content favor favorKey4">
                                        <a href="statistiken.php?id=4" class="tabItem <?php if ($t == 4 || $t == 41 || $t == 42 || $t == 43) {
                                                                                            echo 'active';
                                                                                        } else {
                                                                                            echo 'normal';
                                                                                        } ?>">
                                            <?= STATISTIC29 ?>
                                        </a>
                                    </div>
                                    <div class="content favor favorKey2">
                                        <a href="statistiken.php?id=2" class="tabItem <?php if ($t == 2) {
                                                                                            echo 'active';
                                                                                        } else {
                                                                                            echo 'normal';
                                                                                        } ?>">
                                            <?= STATISTIC38 ?>
                                        </a>
                                    </div>
                                    <div class="content favor favorKey8">
                                        <a href="statistiken.php?id=8" class="tabItem <?php if ($t == 8) {
                                                                                            echo 'active';
                                                                                        } else {
                                                                                            echo 'normal';
                                                                                        } ?>">
                                            <?= STATISTIC30 ?>
                                        </a>
                                    </div>
                                    <div class="content favor favorKey0">
                                        <a href="statistiken.php?id=0" class="tabItem <?php if ($t == 0) {
                                                                                            echo 'active';
                                                                                        } else {
                                                                                            echo 'normal';
                                                                                        } ?>">
                                            <?= STATISTIC31 ?>
                                        </a>
                                    </div>

                                    <div class="content favor favorKey99">
                                        <a href="statistiken.php?id=99" class="tabItem <?php if ($t == 99) {
                                                                                            echo 'active';
                                                                                        } else {
                                                                                            echo 'normal';
                                                                                        } ?>">
                                            <?= STATISTIC27 ?>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="scrollTo" disabled="disabled"></button>
                            </div>
                            <?php
                            if (isset($id)) {
                                switch ($id) {
                                    case 31:
                                        include("application/views/Ranking/player_attack.php");
                                        break;
                                    case 32:
                                        include("application/views/Ranking/player_defend.php");
                                        break;
                                    case 7:
                                        include("application/views/Ranking/player_top10.php");
                                        break;
                                    case 4:
                                        include("application/views/Ranking/alliance.php");
                                        break;
                                    case 8:
                                        include("application/views/Ranking/heroes.php");
                                        break;
                                    case 11:
                                        include("application/views/Ranking/player_1.php");
                                        break;
                                    case 12:
                                        include("application/views/Ranking/player_2.php");
                                        break;
                                    case 13:
                                        include("application/views/Ranking/player_3.php");
                                        break;
                                    case 41:
                                        include("application/views/Ranking/alliance_attack.php");
                                        break;
                                    case 42:
                                        include("application/views/Ranking/alliance_defend.php");
                                        break;
                                    case 43:
                                        include("application/views/Ranking/ally_top10.php");
                                        break;
                                    case 0:
                                        include("application/views/Ranking/newGeneral.php");
                                        break;
                                    case 66:
                                        include("application/views/Ranking/general.php");
                                        break;
                                    case 1:
                                    default:
                                        include("application/views/Ranking/overview.php");
                                        break;
                                    case 2:
                                        include("application/views/Ranking/villages.php");
                                        break;
                                    case 99:
                                        include("application/views/Ranking/ww.php");
                                        break;
                                }
                            } else {
                                include("application/views/Ranking/overview.php");
                            }
                            ?>
                        </div>
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
            <div id="ce"></div>
        </div>
</body>

</html>