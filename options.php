<?php
include_once "application/Account.php";
if ($session->sit == 1) {
    header("Location: dorf" . $session->link . ".php");
}
include("application/Profile.php");

$profile->procProfile($_POST);
$profile->procSpecial($_GET);
if (isset($_GET['uid']) && !is_numeric($_GET['uid'])) die('Hacking Attemp');
if (isset($_GET['delcancel']) && $_GET['delcancel'] == 1) {
    //if((($session->deleting)-time())>42300){
    $profile->cancelDeleting();
    //}
}


if (isset($_GET['s'])) {
    $database->isWinner();
}
?>


<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en-US options <?php if ($dorf1 == '') {
    echo 'perspectiveBuildings';
} else {
    echo 'perspectiveResources';
} ?> <?php echo DIRECTION; ?> buildingsV3">

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


            <?php include("application/views/sideinfo.php"); ?>

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
                    <div id="content" class="options">
                        <h1 class="titleInHeader">Preferences</h1>

                        <div class="contentNavi subNavi tabFavorWrapper">
                            <button type="button" class="scrollFrom" disabled="disabled"></button>
                            <div class="scrollingContainer">

                                <div title="" class="content favor favorKey0">
                                    <a href="options.php" class="tabItem <?php if (!isset($_GET['s'])) {
                                        echo "active";
                                    } else {
                                        echo "normal";
                                    } ?>"><?php echo $lang['main']['options'][1]; ?></a>
                                </div>

                                <div title="" class="content favor favorKey2">
                                    <a href="options.php?s=2" class="tabItem <?php if (!isset($_GET['s']) && is_numeric($_GET['s']) && $_GET['s'] == 2) {
                                        echo "active";
                                    } else {
                                        echo "normal";
                                    } ?>"><?= PROFM4 ?></a>
                                </div>

                            </div>
                            <button type="button" class="scrollTo" disabled="disabled"></button>
                        </div>
                        <?php

                        if (isset($_GET['s']) && is_numeric($_GET['s']) && $_GET['s'] == 2) {
                            include("application/views/Profile/account.php");
                        } else {
                            include("application/views/Profile/goptions.php");
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