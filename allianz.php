<?php
include_once "application/Account.php";


include("application/Alliance.php");
if (isset($_GET['aid']) && !is_numeric($_GET['aid']) || $_GET['aid'] == '0') die('Hacking Attemp');
if (isset($_GET['s'])) {
    $_GET['s'] = $database->FilterIntValue($database->filterVar($_GET['s']));
}
if (isset($_GET['aid'])) {
    $_GET['aid'] = $database->FilterIntValue($database->filterVar($_GET['aid']));
}


$alliance->procAlliance($_GET);


if (!empty($_GET['aid']) or $session->alliance != 0) {
    if (!isset($_GET['aid']) || $_GET['aid'] != $session->alliance) {
        $myaid = 0;
    }
    if (isset($_GET['aid'])) {
        $aid = $database->FilterIntValue($database->FilterVar($_GET['aid']));
    } else {
        $aid = $session->alliance;
    }
    $allianceinfo = $database->getAlliance($aid);
    $tag = $database->RemoveXSS($allianceinfo['tag']);
    $aname = $database->RemoveXSS($allianceinfo['name']);
    ?>


    <?php include("application/views/html.php"); ?>


    <body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en-US alliance <?php if ($dorf1 == '') {
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

                        <div id="content" class="alliance">
                            <h1 class="titleInHeader"><?php

                                echo "<h1 class=\"titleInHeader\">" . $tag . " - " . $aname . "</h1>"; ?></h1>
                            <?php
                            $invite_permission = $database->getAlliancePermission($session->uid, "opt4", 0);


                            $myaid = 1;

                            if (!isset($_GET['aid']) || $_GET['aid'] != $session->alliance) {
                                $myaid = 0;
                            }

                            if (isset($_GET['s'])) {
                                if ($_GET['s'] != 5 or $session->sit == 0) {
                                    switch ($_GET['s']) {

                                        case 3:
                                            include("application/views/Alliance/attacks.php");
                                            break;
                                        case 4:
                                            include("application/views/Alliance/news.php");
                                            break;
                                        case 5:
                                            include("application/views/Alliance/option.php");
                                            break;

                                        case 1:
                                        default:
                                            include("application/views/Alliance/overview.php");
                                            break;
                                    }
                                    // Options
                                } else {
                                    header("Location: " . $_SERVER['PHP_SELF']);
                                    exit();
                                }
                            } else if (isset($_GET['delinvite']) && $invite_permission == 1) {
                                include("application/views/Alliance/invite.php");
                            } elseif (isset($_POST['o'])) {
                                switch ($_POST['o']) {
                                    case 1:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a_user'])) {
                                            $alliance->procAlliForm($_POST);
                                            //echo "Funcion para el cambio de nombre de la alianza";
                                            include("application/views/Alliance/changepos.php");
                                        } else {
                                            include("application/views/Alliance/assignpos.php");
                                        }
                                        break;
                                    case 2:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a']) == 2) {
                                            $alliance->procAlliForm($_POST);
                                            include("application/views/Alliance/kick.php");
                                        } else {
                                            include("application/views/Alliance/kick.php");
                                        }
                                        break;
                                    case 3:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a']) == 3) {
                                            $alliance->procAlliForm($_POST);
                                            //echo "Funcion para el cambio de nombre de la alianza";
                                            include("application/views/Alliance/allidesc.php");
                                        } else {
                                            include("application/views/Alliance/allidesc.php");
                                        }
                                        break;
                                    case 4:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a']) == 4) {
                                            $alliance->procAlliForm($_POST);
                                            //echo "Funcion para el cambio de nombre de la alianza";
                                            include("application/views/Alliance/invite.php");
                                        } else {
                                            include("application/views/Alliance/invite.php");
                                        }
                                        break;

                                    case 6:
                                        if (isset($_POST['dipl']) and isset($_POST['a_name'])) {
                                            $alliance->procAlliForm($_POST);
                                            include("application/views/Alliance/chgdiplo.php");
                                        } else {
                                            include("application/views/Alliance/chgdiplo.php");
                                        }
                                        break;
                                    case 11:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a']) == 11) {
                                            $alliance->procAlliForm($_POST);
                                            //echo "Funcion para el cambio de nombre de la alianza";
                                            include("application/views/Alliance/quitalli.php");
                                        } else {
                                            include("application/views/Alliance/quitalli.php");
                                        }
                                        break;
                                    default:
                                        include("application/views/Alliance/option.php");
                                        break;
                                    case 100:
                                        if (isset($_POST['s']) == 5 && isset($_POST['a']) == 100) {
                                            $alliance->procAlliForm($_POST);
                                            //echo "Funcion para el cambio de nombre de la alianza";
                                            include("application/views/Alliance/changename.php");
                                        } else {
                                            include("application/views/Alliance/changename.php");
                                        }
                                        break;
                                    case 101:
                                        $id = $database->filterIntValue($database->filterVar($_POST['id']));
                                        $database->diplomacyCancelOffer($id);
                                        include("application/views/Alliance/chgdiplo.php");
                                        break;
                                    case 102:
                                        $id = $database->filterIntValue($database->filterVar($_POST['id']));
                                        $database->diplomacyInviteDenied($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
                                        include("application/views/Alliance/chgdiplo.php");
                                        break;
                                    case 103:
                                        $type = $database->filterIntValue($database->filterVar($_POST['type']));
                                        if ($database->checkDiplomacyInviteAccept($session->alliance, $type)) {
                                            $id = $database->filterIntValue($database->filterVar($_POST['id']));
                                            $database->diplomacyInviteAccept($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
                                        }
                                        include("application/views/Alliance/chgdiplo.php");
                                        break;
                                    case 104:
                                        $id = $database->filterIntValue($database->filterVar($_POST['id']));
                                        $database->diplomacyCancelExistingRelationship($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
                                        include("application/views/Alliance/chgdiplo.php");
                                }
                            } else {
                                include("application/views/Alliance/overview.php");
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


    <?php
} ?>