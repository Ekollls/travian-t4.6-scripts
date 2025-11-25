<?php

include_once "application/Account.php";
if (!$session->right['s5']) {
    header("Location:dorf" . $session->link . ".php");
}

include("application/Message.php");
if (isset($_GET['t']) && !is_numeric($_GET['t'])) die('Hacking Attemp');
if (isset($_GET['id']) && !is_numeric($_GET['id'])) die('Hacking Attemp');
$message->procMessage($_POST);
if ($_GET['t'] == 1) {
    $database->isWinner();
}


?>


<?php include("application/views/html.php"); ?>
<body class="v35 webkit <?= LANG_UR ?> <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> message perspectiveBuildings <?php echo DIRECTION; ?> buildingsV3">
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
                        <svg viewBox="0 0 20 20"><g class="outline">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g><g class="icon">
                                <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                            </g></svg>
                    </a>
                    <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://t4answers.tralord.com/?lang=en&amp;aid=1#go2answer" target="_blank">&nbsp;</a>
                </div>
                <div class="contentContainer">
                    <div id="content" class="messages">

                        <h1 class="titleInHeader"><?php echo HEADER_MESSAGES; ?></h1>
                        <?php
                        include("application/views/Message/menu.php");
                        ?>
<!--                        <script type="text/javascript">-->
<!--                            window.addEvent('domready', function () {-->
<!--                                $$('.subNavi').each(function (element) {-->
<!--                                    new Travian.Game.Menu(element);-->
<!--                                });-->
<!--                            });-->
<!--                        </script>-->
                        <?php
                        if (isset($_GET['id']) && !isset($_GET['t'])) {
                            $message->loadMessage($_GET['id']);
                            include("application/views/Message/read.php");
                        } else if (isset($_GET['t'])) {
                            switch ($_GET['t']) {
                                case 1:
                                    if (isset($_GET['id'])) {
                                        $id = $database->filterIntValue($database->filterVar($_GET['id']));
                                    }
                                    include("application/views/Message/write.php");
                                    break;
                                case 2:
                                    include("application/views/Message/sent.php");
                                    break;

                                case 5:
                                    include("application/views/Message/ignoreList.php");
                                    break;

                                default:
                                    include("application/views/Message/inbox.php");
                                    break;
                            }
                        } else {
                            include("application/views/Message/inbox.php");
                        }
                        ?>

                        <div id="map_details">


                            <div class="clear"></div>

                        </div>

                        <div class="clear"></div>

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

