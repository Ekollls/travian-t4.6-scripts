<?php
include("baglanti.php");
include("application/Account.php");

?>


<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if ($dorf1 == '') {
                                                                                                        echo 'perspectiveBuildings';
                                                                                                    } else {
                                                                                                        echo 'perspectiveResources';
                                                                                                    } ?> <?php echo DIRECTION; ?> buildingsV3">

    <div id="background" class="showWall <?= get_tribe() ?>">
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
                    <div class="contentTitle"><a id="closeContentButton" class="contentTitleButton" href="dorf<?= $session->link ?>.php" title="Close window">&nbsp;</a>
                        <a id="answersButton" class="contentTitleButton" href="http://t4.answers.travian.com/index.php?aid=106#go2answer" target="_blank" title="Travian Answers">&nbsp;</a>
                    </div>

                    <div class="contentContainer">
                        <div id="content" class="hero hero_adventure">

                            <div class="clear"></div>
                            <script type="text/javascript">
                                window.addEvent('domready', function() {
                                    $$('.subNavi').each(function(element) {
                                        new Travian.Game.Menu(element);
                                    });
                                });
                            </script>


                            <?php

                            if (isset($_GET['id'])) {
                                $id = preg_replace("/[^a-zA-Z0-9_-]/", "", $_GET['id']);
                            } else $id = "";


                            if ($id < 6) {
                                include("application/views/gods/gods.tpl");
                            }

                            if ($id == 6) {
                                include("application/views/gods/buy.tpl");
                            }

                            ?>

                            <h1 class="titleInHeader">Gods</h1>


                            <div class="village3">

                                <?php
                                if (isset($_GET['s'])) {
                                    if ($_GET['s'] == 1) {
                                        include("application/views/gods/1.tpl");
                                    } elseif ($_GET['s'] == 2) {
                                        include("application/views/gods/2.tpl");
                                    } elseif ($_GET['s'] == 3) {
                                        include("application/views/gods/3.tpl");
                                    } elseif ($_GET['s'] == 4) {
                                        include("application/views/gods/4.tpl");
                                    }
                                } else {
                                    include("application/views/gods/overview.tpl");
                                }
                                ?>




                                <div class="clear">&nbsp;</div>
                            </div>
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