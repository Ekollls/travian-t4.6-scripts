<?php
if ($session->qData['quest'] == 6 && $session->qData['step1'] == 0) {
    $database->query("UPDATE quests SET step1 = 1 WHERE userid = " . $session->uid . "");
    header('Location: hero_inventory.php');
}

if ($session->qData['quest'] == 13 && $session->qData['step1'] == 0) {
    $database->query("UPDATE quests SET step1 = 1 WHERE userid = " . $session->uid . "");
    header('Location: hero_inventory.php');
}

if ($tribe == 1) {
    $tp = 100;
} else {
    $tp = 80;
}

$hero = $herodata = $session->heroD;

$units = $database->getUnit($herodata['wref']);

$ttitle = constant("TRIBE" . $session->tribe);
$aid = $session->alliance;
if ($aid) {
    $allianceinfoMY = $database->getAlliance($aid);
}
if ($herodata['dead'] == 1) {
    $healtstat = '101';
    $status = SIDEINFO_HERO1;
} /*
elseif($herodata['dead']==0 && $herodata['health']<100){
    $healtstat = '101Regenerate';
    $status = SIDEINFO_HERO1;
}*/ elseif ($herodata['dead'] == 0) {
    if ($units['u11'] != 0) {
        $healtstat = '100';
    } else {
        $healtstat = '9';
    }
    $status = SIDEINFO_HERO2;
}
foreach ($session->vvillages as $vi) {
    if ($herodata['wref'] == $vi['wref']) {
        $vname = $vi['name'];
        break;
    }
}

if ($herodata['dead'] == 0) {

    if ($units['u11'] != 0) {
        $where2 = SIDEINFO_HERO3 . ' <a onclick="document.location.href=\'karte.php?z=' . $vi["wref"] . '\'">' . $vname . '</a>.';
        $where = SIDEINFO_HERO4 . ' ' . $vname . '.';
        $where2 = SIDEINFO_HERO4 . ' <a onclick="document.location.href=\'karte.php?z=' . $vi["wref"] . '\'">' . $vname . '</a>.';
        $position = SIDEINFO_HERO5H;
    } elseif ($units['u11'] == 0) {
        $position = SIDEINFO_HERO5;
        $where = SIDEINFO_HERO6 . ' «' . $vname . '». ' . SIDEINFO_HERO5;
        $where2 = SIDEINFO_HERO6 . ' «<a onclick="document.location.href=\'karte.php?z=' . $vi["wref"] . '\'">' . $vname . '</a>» ' . SIDEINFO_HERO7;
    }
} else {
    $position = SIDEINFO_HERO1;
    $where = SIDEINFO_HERO6 . ' «' . $vname . '». ' . SIDEINFO_HERO7;
    $where2 = SIDEINFO_HERO4 . ' <a onclick="document.location.href=\'karte.php?z=' . $vi["wref"] . '\'">' . $vname . '</a>';
}


ob_start();
$availiblepoint = $session->heroD['level'] * 4;

$freepoints = $availiblepoint - ($session->heroD['power'] + $session->heroD['offBonus'] + $session->heroD['defBonus'] + $session->heroD['product']);
$rp = 3 * SPEED * $session->heroD['product'];
?>

<div id="topBarHero">
    <svg class="health" viewBox="0 0 110 110">
        <defs>
            <clipPath id="healthMask" maskContentUnits="objectBoundingBox">
                <path d="M55 55L47.35 109.46A 55 55 0 0 0 109.86602276429 51.163393944073" fill="white"></path>
            </clipPath>
        </defs>
        <image xlink:href="gpack/mainPage/img_ltr/hud/topBar/header/hero/health.png" x="0" y="0" width="110" height="110" style="clip-path: url(#healthMask);">
        </image>
        <path class="title" d="M55 55L47.35 109.46A 55 55 0 0 0 109.87 51.16" fill="transparent">

        </path>
        <title>Health: <?php echo $session->heroD['health']; ?>%</title>
    </svg>

    <svg class="experience" viewBox="0 0 110 110">
        <defs>
            <clipPath id="experienceMask" maskContentUnits="objectBoundingBox">
                <path d="M55 55L32.63 105.25A 55 55 0 0 1 12.813140725628 90.288367836503" fill="white"></path>
            </clipPath>
        </defs>

        <image xlink:href="gpack/mainPage/img_ltr/hud/topBar/header/hero/experience.png" x="0" y="0" width="110" height="110" style="clip-path: url(#experienceMask);"></image>

        <path class="title" d="M55 55L32.63 105.25A 55 55 0 0 1 4 34.4" fill="transparent">

        </path>
        <title>Experience: <?php echo $session->heroD['experience']; ?></title>
    </svg>

    <a id="heroImageButton" href="hero_inventory.php" class="heroImageButton" type="button">
        <div class="heroImageHover">
            <img class="heroImage" src="hero_image.php?uid=<?php echo $session->uid; ?>&size=sideinfo&<?php echo $heroF->heroHash(); ?>" alt="">
        </div>
    </a>


    <div class="heroStatus" title="<?= SIDEINFO_HERO8; ?>||<?= $where ?>" data-status="100">
        <a href="/build.php?id=39&amp;&amp;tt=2" title="">
            <?

            if ($units['u11'] == 0) { ?>
                <svg viewBox="0 0 19.08 20" class="heroRunning">
                    <g class="outline">
                        <path d="M18.62 18.28a1.75 1.75 0 0 0 .05-.46 2.18 2.18 0 0 0-2.18-2.18h-.23l-1.94.11-4-3V7l2.88-.11s-.33-4.26-1-5.67C10.8-.13 2.85-.59 1 1-.17 2 0 7.35 0 7.35l2-.08v5.42a4 4 0 0 0-1.42 3v1.82l-.4.3V20h18.9v-1.72z"></path>
                    </g>
                    <g class="icon">
                        <path d="M18.62 18.28a1.75 1.75 0 0 0 .05-.46 2.18 2.18 0 0 0-2.18-2.18h-.23l-1.94.11-4-3V7l2.88-.11s-.33-4.26-1-5.67C10.8-.13 2.85-.59 1 1-.17 2 0 7.35 0 7.35l2-.08v5.42a4 4 0 0 0-1.42 3v1.82l-.4.3V20h18.9v-1.72z"></path>
                    </g>
                </svg>

            <?     } else { ?>
                <svg viewBox="0 0 20 17.43" class="heroHome">
                    <g class="outline">
                        <path d="M20 10L10 0 0 10l2.56 2.56 1.74-1.75v6.62h11.39V11l1.64 1.63zm-8.36 4.92H8.36V9.58h3.28z"></path>
                    </g>
                    <g class="icon">
                        <path d="M20 10L10 0 0 10l2.56 2.56 1.74-1.75v6.62h11.39V11l1.64 1.63zm-8.36 4.92H8.36V9.58h3.28z"></path>
                    </g>
                </svg>
            <?    }
            ?>

        </a>
    </div>
    <?php
    $availiblepoint = $hero['level'] * 4;
    $freepoints = $availiblepoint - ($hero['power'] + $hero['offBonus'] + $hero['defBonus'] + $hero['product'] + 1);
    if ($session->heroD['dead'] == 1) { ?>
        <div class="bigSpeechBubble dead">
            <svg viewBox="0 0 15.45 20" class="heroDead" style="fill: #bd0929;
    width: 35px;
    height: 35px;
    margin-left: 4px;
    margin-top: 3px;">

                <g class="icon">
                    <path d="M14.66 10.16l.68-2.09a56.45 56.45 0 0 0-1.67-5.76C11.67.27 7.72 0 7.72 0S3.78.27 1.78 2.31A56.45 56.45 0 0 0 .11 8.07l.68 2.09s-2.32 4.72 1 5.08c1.73 0 1.77.23 1.77.23s.37 1.31-.54 1.67-.14 1.09-.14 1.09h.5l.81-.23s-.65.9-.33 1.13a6.31 6.31 0 0 0 1.23.5l.82-1.14.14 1.51h1.31l.39-1.31v.11l.38 1.2H9.4l.14-1.5.82 1.14a6.31 6.31 0 0 0 1.23-.5c.32-.23-.33-1.13-.33-1.13l.82.22h.5s.77-.72-.14-1.09-.54-1.67-.54-1.67 0-.23 1.77-.23c3.33-.36.99-5.08.99-5.08zm-10.52 2.9c-1 0-1.68-.41-1.68-1.36A2.7 2.7 0 0 1 4 9.28c1.7-.75 2.93-.21 2.93 1.38-.02.94-1.75 2.4-2.79 2.4zm3.58 3.31l-1.13.5s.36-3 1.13-3.63c.77.64 1.14 3.63 1.14 3.63zm3.59-3.31c-1 0-2.77-1.46-2.77-2.4 0-1.59 1.23-2.13 2.93-1.38A2.7 2.7 0 0 1 13 11.7c0 .95-.65 1.36-1.69 1.36z"></path>
                </g>
            </svg>
            <img src="img/x.gif" alt="">
        </div>
    <?php } elseif ($freepoints > 0) { ?>
        <i class="levelUp show" title="Level Up"></i>
    <?php    } ?>
    <a class="layoutButton buttonFramed round auction green withIcon" id="buttonz4" href="hero_auction.php">
        <svg viewBox="0 0 20.18 19.44" class="auction">
            <g class="outline">
                <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
            </g>
            <g class="icon">
                <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
            </g>
        </svg>
    </a>
    <script type="text/javascript" id="buttonz4_script">
        jQuery(function() {
            jQuery('#buttonz4').on('mouseover', function(event) {
                Travian.Game.Layout.loadLayoutButtonTitle(event.delegateTarget, 'hero', 'auction');
            });
        });

        jQuery('#buttonz4').click(function(event) {
            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {
                "type": "button",
                "class": "layoutButton buttonFramed round auction green withIcon",
                "svg": "topBar\/auction.svg",
                "redirectUrl": "hero_auction.php",
                "loadTitle": true,
                "id": "buttonz4"
            }]);
        });
    </script>

    <a class="layoutButton buttonFramed round adventure green withIcon attention" id="buttonL5" href="hero_adventure.php">
        <?php
        $adventures = $database->query("SELECT end FROM adventure WHERE `uid`='" . $session->uid . "' AND `end` = 0 and `time` > '" . time() . "'");
        ?>
        <div class="content"><?php echo count($adventures); ?></div>
    </a>
    <script type="text/javascript" id="buttonL5_script">
        jQuery(function() {
            jQuery('#buttonL5').on('mouseover', function(event) {
                Travian.Game.Layout.loadLayoutButtonTitle(event.delegateTarget, 'hero', 'adventure');
            });
        });

        jQuery('#buttonL5').click(function(event) {
            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {
                "type": "button",
                "class": "layoutButton buttonFramed round adventure green withIcon attention",
                "svg": false,
                "redirectUrl": "hero_adventure.php",
                "loadTitle": true,
                "attention": true,
                "content": "7",
                "id": "buttonL5"
            }]);
        });
    </script>

</div>