<?php
include_once "application/Account.php";

if (isset($_GET['id']) && !is_numeric($_GET['id'])) die('Hacking Attemp');
if (isset($_GET['vill']) && !is_numeric($_GET['vill'])) die('Hacking Attemp');
if (isset($_GET['t']) && !is_numeric($_GET['t'])) die('Hacking Attemp');
if (isset($_GET['s']) && !is_numeric($_GET['s'])) die('Hacking Attemp');
if (isset($_GET['id'])) {
    $id = $_GET['id'] = $database->filterIntValue($database->filterVar($_GET['id']));
}

if (isset($_POST["del_x"]) && $session->right['s6']) {

    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST['n' . $i]) && is_numeric($_POST['n' . $i])) {
            $database->removeNotice($_POST['n' . $i]);
        }
    }
}

if (isset($_POST['realAll'])) {
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST['n' . $i]) && is_numeric($_POST['n' . $i])) {
            $database->readNotice($_POST['n' . $i]);
        }
    }

    header("Location: berichte.php" . ($_POST['page'] ? '?s=' . $_POST['page'] . '' : '') . "");
}

if (isset($_GET['t']) && ($_GET['t'] > 4 || $_GET['t'] < 1)) {
    unset($_GET['t']);
}

// op op op
?>


<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> reports  perspectiveBuildings <?php echo DIRECTION; ?> buildingsV3">
<div id="reactDialogWrapper"></div>

<div id="background" class="showWall ">
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
                    <div id="content" class="reports">
                        <h1 class="titleInHeader"><?= XUYXUYXUY ?></h1>
                        <div class="contentNavi subNavi tabFavorWrapper">
                            <button type="button" class="scrollFrom" disabled="disabled"></button>
                            <div class="scrollingContainer">
                                <?php
                                $t = 0;
                                if (isset($_GET['t'])){
                                    $t = $_GET['t'];
                                }
                                ?>
                                <div class="content favor favorKey0">
                                    <a href="berichte.php" class="tabItem <?php if($t==0){echo 'active';}else{echo 'normal';}?>" >
                                        <?= ot4m0 ?>
                                    </a>
                                </div>
                                <div class="content favor favorKey3">
                                    <a href="berichte.php?t=3" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>" >
                                        <?= ot4m1 ?>
                                    </a>
                                </div>
                                <div class="content favor favorKey1">
                                    <a href="berichte.php?t=1" class="tabItem <?php if($t==1){echo 'active';}else{echo 'normal';}?>" >
                                        <?= ot4m2 ?>
                                    </a>
                                </div>
                                <div class="content favor favorKey4">
                                    <a href="berichte.php?t=4" class="tabItem <?php if($t==4){echo 'active';}else{echo 'normal';}?>" >
                                        <?= ot4m3 ?>
                                    </a>
                                </div>
                                <div class="content favor favorKey2">
                                    <a href="berichte.php?t=2" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                                        <?= ot4m4 ?>
                                    </a>
                                </div>

                            </div>
                            <button type="button" class="scrollTo" disabled="disabled"></button>
                        </div>

                        <?php

                        if (isset($id)) {
                            $all = $database->getNotice5($id);

                            $ally = $all['ally'];
                            if ($all['uid'] == $session->uid or ($session->alliance == $ally and $ally != 0 and $session->alliance != 0) or $session->access == 9) {
                                $dataarray = explode(",", $all['data']);
                                if (!$all['viewed'] && $session->uid == $all['uid'] && !$_SESSION['adminLogin']) {
                                    $database->noticeViewed($all['id']);
                                }
                                $type = $all['ntype'];

                                switch ($type) {
                                    case 2:
                                        $type = 1;
                                        break;
                                    case 4:
                                        $type = 1;
                                        break;
                                    case 5:
                                        $type = 1;
                                        break;
                                    case 6:
                                        $type = 1;
                                        break;
                                    case 7:
                                        $type = 1;
                                        break;
                                    case 11:
                                        $type = 10;
                                        break;
                                    case 12:
                                        $type = 10;
                                        break;
                                    case 13:
                                        $type = 10;
                                        break;
                                    case 14:
                                        $type = 10;
                                        break;
                                    case 16:
                                        $type = 18;
                                        break;
                                    case 17:
                                        $type = 3;
                                        break;
                                    case 18:
                                        $type = 18;
                                        break;
                                    case 19:
                                        $type = 18;
                                        break;
                                    case 20:
                                        $type = 30;
                                        break;
                                    case 21:
                                        $type = 9;
                                        break;
                                    case 25:
                                        $type = 15;
                                        break;
                                    case 26:
                                        $type = 15;
                                        break;
                                    case 27:
                                        $type = 15;
                                        break;


                                }

                                include("application/views/Notice/" . $type . ".php");

                            }
                        } else {
                            include("application/views/Notice/all.php");
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
        <div id="ce"></div>
    </div>
</body>
</html>