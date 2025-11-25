<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en-US village-2 <?php if ($dorf1 == '') {
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
        <div id="center">
            <?php require_once("application/views/sideinfo.php"); ?>
            <div id="contentOuterContainer" class="size1">
                <?php require_once("application/views/res.php"); ?>
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
                    <div id="content" class="<?php echo $pData['CClass']; ?>">
                        <h1 class="titleInHeader"><?php echo $pData['HTitle']; ?></h1>
