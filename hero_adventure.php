<?php
include("application/Account.php");


if (isset($_GET['active']) and $session->gold >= 10) {
    $sData = $database->query('SELECT * FROM `odata` WHERE `owner` = 4 ORDER BY RAND() LIMIT 1');
    foreach ($sData as $row) {
        $uid = $session->uid;
        $coor = $row['wref'];
        $database->addAdventure($coor, $uid, 1);
    }
    $database->query('UPDATE `users` SET `gold` = gold - 10 WHERE `id` = ' . $uid . ' ');


}


?>


<?php include("application/views/html.php"); ?>
<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en-US hero_adventure <?php if ($dorf1 == '') {
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
                    <div id="content" class="hero hero_adventure">
                        <h1 class="titleInHeader"><?= $session->username ?> - <?php echo U0; ?> <?= LVL . "  " . $session->heroD['level'] ?></h1>
                        <div class="contentNavi subNavi tabFavorWrapper">

                            <button type="button" class="scrollFrom" disabled="disabled"></button>
                            <div class="scrollingContainer">
                                <div class="content favor favorKey0">
                                    <a href="hero_inventory.php" class="tabItem normal"><?= herohero0 ?></a>
                                </div>
                                <div class="content favor favorKey1">
                                    <a href="hero.php" class="tabItem normal"><?= herohero1 ?></a>
                                </div>
                                <div class="content favor favorKey2">
                                    <a href="hero_adventure.php" class="tabItem active"><?= herohero2 ?></a>
                                </div>
                                <div class="content favor favorKey3">
                                    <a href="hero_auction.php" class="tabItem normal"><?= herohero3 ?></a>
                                </div>
                            </div>
                            <button type="button" class="scrollTo" disabled="disabled"></button>
                        </div>

                        <table cellspacing="1" cellpadding="1">
                            <thead>
                            <tr>
                                <th class="location" colspan="2"><?= HEROA0 ?></th>
                                <th class="moveTime"><?= HEROA1 ?></th>
                                <th class="difficulty"><?= HEROA2 ?></th>
                                <th class="timeLeft"><?= HEROA3 ?></th>
                                <th class="goTo"><?= HEROA4 ?></th>
                            </tr>
                            </thead>
                            <tbody>

                            <div class="boxes boxesColor gray adventureStatusMessage">
                                <div class="boxes-contents cf">
                                    <div class="heroStatusMessage header">

                                        <img alt="In the native village" src="img/x.gif" class="heroStatus100"/>
                                        <?= $where2 ?>
<!--                                        <div class="featureButton" style="float:right">-->
<!--                                            <a href="hero_adventure.php?active">-->
<!--                                                <button type="button" class="gold prosButton buyadventure textButtonV1" title=""-->
<!--                                                        coins="100" id="buttonbuyadventure"-->
<!--                                                        onclick="javascript:window.location='hero_adventure.php?buy'">-->
<!--                                                    <div class="button-container addHoverClick">-->
<!--                                                        <div class="button-background">-->
<!--                                                            <div class="buttonStart">-->
<!--                                                                <div class="buttonEnd">-->
<!--                                                                    <div class="buttonMiddle"></div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="button-content">Find Adventure-->
<!--                                                            <span class="goldValue">10 gold <img src="img/x.gif"-->
<!--                                                                                                 class="gold"-->
<!--                                                                                                 alt="gold">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </button>-->
<!--                                            </a>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <?php
                            $database->query("DELETE FROM adventure WHERE `time`<= '" . time() . "' and `end`='0'");
                            $sql = $database->query("SELECT * FROM adventure WHERE `end` = '0' and `uid` = '" . $session->uid . "' ORDER BY time ASC");
                            $query = count($sql);

                            $outputList = '';
                            if (!isset($timer)) {
                                $timer = 1;
                            }
                            if ($query == 0) {
                                $outputList .= "<td colspan=\"6\" class=\"none\"><center>" . HEROA5 . "</center></td>";
                            } else {
                                $hVillCoor = $database->getCoor($session->heroD['wref']);
                                $from = array('x' => $hVillCoor['x'], 'y' => $hVillCoor['y']);
                                foreach ($sql as $row) {


                                    $to = array('x' => $row['x'], 'y' => $row['y']);
                                    $speed = $session->heroD['speed'];
                                    $time = $database->procDistanceTime2($from, $to, $speed, 1);


                                    switch ($row['type']) {
                                        case 1:
                                            $tname = HEROA7;
                                            break;
                                        case 2:
                                            $tname = HEROA8;
                                            break;
                                        case 3:
                                            $tname = HEROA9;
                                            break;
                                        case 4:
                                            $tname = HEROA10;
                                            break;
                                    }

                                    $outputList .= "<tr><td class=\"location\">" . $tname . "</td>";

                                    $outputList .= '<td class="coords"><a>
        <span class="coordinates coordinatesWrapper coordinatesAligned coordinates<?php echo DIRECTION; ?>">
        <span class="coordinateHeroX">(' . $row['x'] . '</span>
        <span class="coordinatePipe">|</span>
        <span class="coordinateHeroY">' . $row['y'] . ')</span>
        </span><span class="clear"></span>
        </a></td>';
                                    $outputList .= "<td class=\"moveTime\"> " . $generator->getTimeFormat($time) . " </td>";
                                    if (!$row['dif']) {
                                        $outputList .= "<td class='difficulty'><img src='img/x.gif' class='adventureDifficulty2' title='Normális' /></td>";
                                    } else {
                                        $outputList .= "<td class='difficulty'><img src='img/x.gif' class='adventureDifficulty0' title='Veszélyes' /></td>";
                                    }
                                    $outputList .= "<td class=\"timeLeft\"><span class=\"timer\" counting=\"down\" value=\"" . ($row['time'] - time()) . "\">" . $generator->getTimeFormat($row['time'] - time()) . "</span></td>";
                                    $outputList .= "<td class=\"goTo\"><a class=\"gotoAdventure arrow\" href=\"start_adventure.php?kid=" . $row['wref'] . "&h=1\">" . HEROA6 . "</a></td></tr>";
                                    $timer++;
                                }
                            }
                            echo $outputList;
                            ?>

                            </tbody>
                        </table>

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
