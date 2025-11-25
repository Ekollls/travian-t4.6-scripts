<?php
include_once "application/Account.php";

?>


<?php include("application/views/html.php"); ?>


<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> village3  perspectiveResources <?php echo DIRECTION; ?> buildingsV3">

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
                    <div id="content" class="village3">
                        <h1 class="titleInHeader"><?= PLUS1 ?></h1>

                        <script type="text/javascript">
                            window.addEvent('domready', function () {
                                $$('.subNavi').each(function (element) {
                                    new Travian.Game.Menu(element);
                                });
                            });
                        </script>
                        <?php
                        include('application/views/dorf3/menu.php');
                        ?>
                        <?php
                        if ($session->plus) {
                            $int = intval($_GET['s']);
                            $num = ($int > 0 && $int <= 5) ? $int : 1;
                            include("application/views/dorf3/" . $num . ".php");
                        } else {
                            include("application/views/dorf3/noplus.php");
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

