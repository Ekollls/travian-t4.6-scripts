<?php
$green = $session->plus ? 'green' : 'gold';
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


/*<div id="sidebarBoxHero" class="sidebarBox toggleable <?php if($_COOKIE['box']==1){echo 'expanded';}else{ echo 'collapsed';}?> ">*/

?>


<div id="sidebarBeforeContent" class="sidebar beforeContent">
    <?php
    $villmas = implode(',', $session->villages);
    $fff = array();
    $posolstvo = 0;
    $fdata = $database->query("SELECT * FROM `fdata` WHERE vref IN (" . $villmas . ")");
    $link = '';
    foreach ($fdata as $f) {
        $fff[$f['vref']] = $f;
        for ($i = 19; $i < 40; $i++) {
            if ($f['f' . $i . 't'] == 18) {
                $new = $database->getTypeLevel(18, $f['vref'], $f);
                $posolstvo = $posolstvo < $new ? $new : $posolstvo;
                if ($session->alliance != 0) {
                    $link = "window.location.href='build.php?id=" . $i . "&newdid=" . $f['vref'] . "';";
                }
                break;
            }
        }
    }
    ?>
    <div class="sidebarBoxWrapper">
        <?php if ($session->alliance != 0) { ?>
            <div id="sidebarBoxAlliance" class="sidebarBox   ">
                <div class="header ">
                    <div class="buttonsWrapper">
                        <a id="buttonM6" class="layoutButton buttonFramed withIcon round alliance green " title="Alliance overview||" href="allianz.php">
                            <svg viewBox="0 0 20 14.2" class="alliance">
                                <g class="outline">
                                    <path d="M4.42 1.17L2 6.62a.51.51 0 0 1-.66.26L.3 6.41a.51.51 0 0 1-.3-.66L2.43.3a.51.51 0 0 1 .66-.3l1.08.51a.49.49 0 0 1 .25.66zM20 5.61L17.68.53A.51.51 0 0 0 17 .28l-.82.37a.5.5 0 0 0-.25.66l2.28 5.08a.49.49 0 0 0 .66.25l.82-.37a.5.5 0 0 0 .31-.66zM4.85 1.11L4.49 2l3.09.22 1.06-.9zM2.69 5.86l-.46.87 1.11 1.61.52-.82zm2.16 1.66a.84.84 0 0 0-1.1.48l-.63 1.39a.84.84 0 1 0 1.53.67l.63-1.43a.84.84 0 0 0-.43-1.11zm1.44 1.35a.84.84 0 0 0-1.1.43l-.63 1.44a.84.84 0 0 0 .44 1.1.85.85 0 0 0 1.11-.43L6.72 10a.84.84 0 0 0-.43-1.13zM17 10.29a1.18 1.18 0 0 1-.76.48 1.14 1.14 0 0 1-.2.87 1.19 1.19 0 0 1-1 .51H15a1.18 1.18 0 0 1-1.2 1.14 1.12 1.12 0 0 1-.67-.22L13 13a1.21 1.21 0 0 1-.22.7 1.19 1.19 0 0 1-1 .51 1.12 1.12 0 0 1-.67-.22l-1.93-1.34a.81.81 0 0 1-.77 0 .84.84 0 0 1-.49-.93l-.16.37a.84.84 0 1 1-1.53-.67L6.85 10A.86.86 0 0 1 8 9.6a.85.85 0 0 1 .48.94l.16-.37a.84.84 0 0 1 1.11-.43.81.81 0 0 1 .45.49l3.24 2.24a.5.5 0 0 0 .69-.13.49.49 0 0 0 0-.58l-3.25-2.24a6.61 6.61 0 0 0 .39-.52l3.17 2.19a.77.77 0 0 1 .19.17l.1.06a.51.51 0 0 0 .7-.12.49.49 0 0 0 .09-.28.47.47 0 0 0-.12-.32l-.09-.06-3.64-2.58V8a4 4 0 0 0 .15-.7l3.91 2.7a.48.48 0 0 0 .55-.19.47.47 0 0 0 .09-.28.49.49 0 0 0-.21-.41l-4.34-3a3.82 3.82 0 0 0-.15-.67l-.62-.38a2.88 2.88 0 0 1-.83-.76s-.94.58-1.1.65a3.08 3.08 0 0 1-1.55.43 1.69 1.69 0 0 1-1.68-1.18A1.32 1.32 0 0 1 7 2.67a5.82 5.82 0 0 0 1.17-.17A7.59 7.59 0 0 0 10.08 1a1.1 1.1 0 0 1 .69-.37c1 0 1.46 1.21 2.74 1.21a4.32 4.32 0 0 0 1.93-.44l2.23 4.86a4.54 4.54 0 0 1-.62 1.19c-.25.23-.66.18-1 .18a3 3 0 0 1-1.29-.3l1.93 1.33a1.19 1.19 0 0 1 .31 1.63zm-4.88 2.6a.49.49 0 0 0-.22-.41L10 11.17l-.4.93 1.72 1.19a.51.51 0 0 0 .7-.12.51.51 0 0 0 .08-.28z"></path>
                                </g>
                                <g class="icon">
                                    <path d="M4.42 1.17L2 6.62a.51.51 0 0 1-.66.26L.3 6.41a.51.51 0 0 1-.3-.66L2.43.3a.51.51 0 0 1 .66-.3l1.08.51a.49.49 0 0 1 .25.66zM20 5.61L17.68.53A.51.51 0 0 0 17 .28l-.82.37a.5.5 0 0 0-.25.66l2.28 5.08a.49.49 0 0 0 .66.25l.82-.37a.5.5 0 0 0 .31-.66zM4.85 1.11L4.49 2l3.09.22 1.06-.9zM2.69 5.86l-.46.87 1.11 1.61.52-.82zm2.16 1.66a.84.84 0 0 0-1.1.48l-.63 1.39a.84.84 0 1 0 1.53.67l.63-1.43a.84.84 0 0 0-.43-1.11zm1.44 1.35a.84.84 0 0 0-1.1.43l-.63 1.44a.84.84 0 0 0 .44 1.1.85.85 0 0 0 1.11-.43L6.72 10a.84.84 0 0 0-.43-1.13zM17 10.29a1.18 1.18 0 0 1-.76.48 1.14 1.14 0 0 1-.2.87 1.19 1.19 0 0 1-1 .51H15a1.18 1.18 0 0 1-1.2 1.14 1.12 1.12 0 0 1-.67-.22L13 13a1.21 1.21 0 0 1-.22.7 1.19 1.19 0 0 1-1 .51 1.12 1.12 0 0 1-.67-.22l-1.93-1.34a.81.81 0 0 1-.77 0 .84.84 0 0 1-.49-.93l-.16.37a.84.84 0 1 1-1.53-.67L6.85 10A.86.86 0 0 1 8 9.6a.85.85 0 0 1 .48.94l.16-.37a.84.84 0 0 1 1.11-.43.81.81 0 0 1 .45.49l3.24 2.24a.5.5 0 0 0 .69-.13.49.49 0 0 0 0-.58l-3.25-2.24a6.61 6.61 0 0 0 .39-.52l3.17 2.19a.77.77 0 0 1 .19.17l.1.06a.51.51 0 0 0 .7-.12.49.49 0 0 0 .09-.28.47.47 0 0 0-.12-.32l-.09-.06-3.64-2.58V8a4 4 0 0 0 .15-.7l3.91 2.7a.48.48 0 0 0 .55-.19.47.47 0 0 0 .09-.28.49.49 0 0 0-.21-.41l-4.34-3a3.82 3.82 0 0 0-.15-.67l-.62-.38a2.88 2.88 0 0 1-.83-.76s-.94.58-1.1.65a3.08 3.08 0 0 1-1.55.43 1.69 1.69 0 0 1-1.68-1.18A1.32 1.32 0 0 1 7 2.67a5.82 5.82 0 0 0 1.17-.17A7.59 7.59 0 0 0 10.08 1a1.1 1.1 0 0 1 .69-.37c1 0 1.46 1.21 2.74 1.21a4.32 4.32 0 0 0 1.93-.44l2.23 4.86a4.54 4.54 0 0 1-.62 1.19c-.25.23-.66.18-1 .18a3 3 0 0 1-1.29-.3l1.93 1.33a1.19 1.19 0 0 1 .31 1.63zm-4.88 2.6a.49.49 0 0 0-.22-.41L10 11.17l-.4.93 1.72 1.19a.51.51 0 0 0 .7-.12.51.51 0 0 0 .08-.28z"></path>
                                </g>
                            </svg>
                        </a>
                        <!--                    <a id="buttonT7" class="layoutButton buttonFramed withIcon round forum green " title="Alliance forum||" href="/alliance/forum">-->
                        <!--                        <svg viewBox="0 0 20 18.54" class="forum"><g class="outline">-->
                        <!--                                <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>-->
                        <!--                            </g><g class="icon">-->
                        <!--                                <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>-->
                        <!--                            </g></svg>            -->
                        <!--                    </a>-->

                        <a id="buttonS8" class="layoutButton buttonFramed withIcon round embassy green
                        <?php if (!$posolstvo || !$session->alliance) {
                            echo "disabled";
                        } ?>
                        " title="Embassy||" onclick="<?php echo $link; ?>">
                            <svg viewBox="0 0 17.63 20" class="embassy">
                                <g class="outline">
                                    <path d="M16.15 2.21l-.23 1.66h-1.45v-.4A2.28 2.28 0 0 0 11 2.15l-.34.28h-.05a2.77 2.77 0 0 1-1.82.45 2.78 2.78 0 0 1-2.06-1.22c-.06-.13-.12-.25-.19-.37V1.2A2.68 2.68 0 0 0 3 .31c-.48.25-1.86 1.11-1.86 1.11.53-.31 3.46-.2 3.63 1.33C1 .92 0 4.37 0 4.37s2.42-1.48 4.19 1.48A3 3 0 0 0 .88 8c.55-.34 1.79-.07 2.48 0a3 3 0 0 1 2.39 1.62A2.5 2.5 0 0 0 9.63 11a1.67 1.67 0 0 1 .23-.23 1.56 1.56 0 0 1 .2-.16 2.46 2.46 0 0 1 1.65-.43c.32 0 .39.29.41.55a.89.89 0 0 0 1.59.55v-.31H15l-1.27 8.83 1.48.2 2.42-17.58zM13.6 10a17.28 17.28 0 0 1-.06-2.72 10.63 10.63 0 0 1 .54-1.81h1.62L15.08 10z"></path>
                                </g>
                                <g class="icon">
                                    <path d="M16.15 2.21l-.23 1.66h-1.45v-.4A2.28 2.28 0 0 0 11 2.15l-.34.28h-.05a2.77 2.77 0 0 1-1.82.45 2.78 2.78 0 0 1-2.06-1.22c-.06-.13-.12-.25-.19-.37V1.2A2.68 2.68 0 0 0 3 .31c-.48.25-1.86 1.11-1.86 1.11.53-.31 3.46-.2 3.63 1.33C1 .92 0 4.37 0 4.37s2.42-1.48 4.19 1.48A3 3 0 0 0 .88 8c.55-.34 1.79-.07 2.48 0a3 3 0 0 1 2.39 1.62A2.5 2.5 0 0 0 9.63 11a1.67 1.67 0 0 1 .23-.23 1.56 1.56 0 0 1 .2-.16 2.46 2.46 0 0 1 1.65-.43c.32 0 .39.29.41.55a.89.89 0 0 0 1.59.55v-.31H15l-1.27 8.83 1.48.2 2.42-17.58zM13.6 10a17.28 17.28 0 0 1-.06-2.72 10.63 10.63 0 0 1 .54-1.81h1.62L15.08 10z"></path>
                                </g>
                            </svg>
                        </a>
                        <script type="text/javascript">
                            jQuery(function() {
                                jQuery('#buttonS8').one('mouseenter', function(event) {
                                    Travian.Game.Layout.loadLayoutButtonTitle(event.delegateTarget, 'alliance', 'embassyWhite');
                                });
                            });
                        </script>
                    </div>
                </div>

                <div class="content">
                    <div class="boxTitle">
                        <div class="name">
                            <?php
                            if ($session->alliance == 0) {
                                echo '<span>' . $lang['Alliance']['00'] . '</span>';
                            } else {
                                echo '<center><font color="dark">' . $allianceinfoMY['tag'] . '</font>';
                            }
                            ?>

                            <center>

                                <?php
                                if (!isset($aid)) {
                                    $aid = $session->alliance;
                                }
                                if ($aid == $session->alliance) {
                                    $allianceinfo = $database->getAlliance($aid);

                                    $noticeArray = $database->readAlliNotice($aid);

                                    //echo "<h1>".$allianceinfo['tag']." - ".$allianceinfo['name']."</h1>";
                                    include("alli_menu.php");
                                ?>

                                    <tbody>
                                        <?php
                                        foreach ($noticeArray as $notice) {
                                            $date = $generator->procMtime($notice['date']);

                                            echo "<br><td class=dat><center>" . $date['0'] . " " . $date['1'] . "</center></td>";
                                            echo "<td class=event>" . $notice['comment'] . "</td>";
                                        }
                                        ?>
                                    </tbody>

                                <?php } ?>
                            </center>

                        </div>
                    </div>
                </div>
            </div>


        <?php
        }
        $i = 0;
        $timestamp = $session->deleting;
        $first = '';
        if ($session->protect > time()) {
            $i++;
            if ($first == '') {
                $first = 'protect';
            }
        } elseif ($timestamp) {
            $i++;
            if ($first == '') {
                $first = 'delete';
            }
        }


        $i += 1;
        $art = $plan = '';
        if (!isset($timer)) {
            $timer = 1;
        }

        if ($i > 0) {
        ?>
            <div id="sidebarBoxInfobox" class="sidebarBox toggleable <?php if ($_COOKIE['box2'] == 1) {
                                                                            echo 'expanded';
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?> ">
                <div class="header"></div>
                <div class="content">

                    <div class="boxTitle"><?php echo infobox_desc_text_1; ?></div>
                    <div class="inlineIcon messageShortInfo" title="Total messages: <?php echo $news->nSum(); ?>">
                        <svg viewBox="0 0 20 14.28" class="messageNew">
                            <path d="M.72.93A1.69 1.69 0 0 1 .33.21L.54 0h19a1.56 1.56 0 0 1 .16.2 1.73 1.73 0 0 1-.39.73l-7.2 7.78a2.79 2.79 0 0 1-4.18 0zm13.59 7.89l3.55 2.5-4.92-1.06a4.31 4.31 0 0 1-5.84 0l-4.89 1.06 3.53-2.49L0 2.62v10.06a1.54 1.54 0 0 0 1.47 1.6h17.06a1.54 1.54 0 0 0 1.47-1.6v-10z"></path>
                        </svg>
                        <span class="value"><?php echo $news->nSum(); ?></span>
                    </div>

                    <ul>
                        <?php echo $news->getNews(); ?>
                        <?php
                        $k = 0;
                        if ($session->protection - time() > 0 && $session->protect == 1) {
                            $k++;

                            $uurover = $generator->getTimeFormat($session->protection - time());
                        ?>
                            <li id="infoID_<?php echo $i; ?>" <?php if ($first == 'protect') {
                                                                    echo "  class=\"firstElement\"";
                                                                } ?>><?php echo sprintf(PROTECTION_TIME, $session->protection - time(), $uurover); ?></li>
                        <?php
                        } elseif ($timestamp) {
                            $k++;
                            $time = $generator->getTimeFormat(($timestamp - time()));
                        ?>
                            <style>
                                .buttonQ {
                                    width: 24px;
                                    height: 24px;
                                    background-image: url(gpack/img_rtl/round/button/buttonSmall-rtl.png);
                                    padding: 0;
                                    border: none;
                                    border-radius: 2px;
                                }
                            </style>
                            <li id="infoID_<?php echo $i; ?>" <?php if ($first == 'delete') {
                                                                    echo "  class=\"firstElement\"";
                                                                } ?>>
                                <button type="button" class="icon" onclick="window.location.href = 'options.php?s=3&delcancel=1'; return false;">
                                    <img src="img/x.gif" class="del" alt="del"></button>
                                <?php echo sprintf(ACCOUNT_DELETION, ($timestamp - time()), $time); ?>
                            </li>
                        <?php
                        }

                        if (ARTEFACTS > time()) {
                            echo "<li>Artefacts will be released in: <span class=\"timer\" counting=\"down\" value=\"" . (ARTEFACTS - time()) . "\">" . $generator->getTimeFormat((ARTEFACTS - time())) . "</span> hour.</li>";
                        }
                        if (WW_PLAN > time()) {
                            echo "<li>Building plans will be released in: <span class=\"timer\" counting=\"down\" value=\"" . (WW_PLAN - time()) . "\">" . $generator->getTimeFormat((WW_PLAN - time())) . "</span> hour.</li>";
                        }

                        ?>

                    </ul>

                </div>
                <div class="toggle">
                    <button type="button" class="toggle" onclick="if (!window.__cfRLUnblockHandlers) return false; " style="margin-top:0px;">
                        <svg class="toggleArrow" viewBox="0 0 18 11">
                            <filter id="insetShadow">
                                <feFlood flood-color="#a2e25e"></feFlood>
                                <feComposite in2="SourceAlpha" operator="out"></feComposite>
                                <feGaussianBlur stdDeviation="2" result="blur"></feGaussianBlur>
                                <feComposite operator="atop" in2="SourceGraphic"></feComposite>
                            </filter>
                            <path class="caret" d="M1 10H17L9 1z"></path>
                            <path class="glow" d="M1 10H17L9 1z"></path>
                        </svg>
                    </button>

                </div>
                <script type="text/javascript">
                    window.addEvent('domready', function() {
                        Travian.Translation.add({
                            'hero_collapsed': 'Daha fazla bilgi göster',
                            'hero_expanded': 'Ek bilgi gizleme'
                        });

                        var box = $('sidebarBoxInfobox');
                        box.down('button.toggle').addEvent('click', function(e) {
                            if (box.toggleClass('expanded').hasClass('expanded')) {
                                document.cookie = 'box2=1; expires=Wed, 1 Jan 2030 00:00:00 GMT';
                            } else {
                                document.cookie = 'box2=0; expires=Thu, 01-Jan-1970 00:00:01 GMT';
                            }
                            Travian.Game.Layout.toggleBox(box, 'travian_toggle', 'sidebarBoxInfobox');
                        });

                    });
                </script>
                <script type="text/javascript">
                    jQuery(function() {
                        Travian.Game.Layout.setupInfoboxItemsDeletionWithMessage('Bu mesaj kalıcı olarak silinsin mi?', 'Onaylamak');
                        Travian.Translation.add({
                            'infobox_collapsed': 'Daha fazla mesaj göster',
                            'infobox_expanded': 'Mesajları gizle'
                        });

                        var box = jQuery('#sidebarBoxInfobox');
                        box.find('button.toggleBox').click(function(e) {
                            Travian.Game.Layout.toggleBox(box, 'travian_toggle', 'infobox');
                        });
                    });
                </script>

            </div>
        <?php } ?>

        <div id="sidebarBoxLinklist" class="sidebarBox   ">
            <div class="header">
                <div class="buttonsWrapper">
                    <a id="buttonSbCOS5JTM2euX" class="layoutButton buttonFramed withIcon round edit
                        <?php if ($session->plus) {
                            echo 'green';
                        } else {
                            echo 'gold';
                        } ?>
                    " href="#">
                        <svg viewBox="0 0 15.59 20" class="edit">
                            <g class="outline">
                                <path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
                            </g>
                            <g class="icon">
                                <path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
                            </g>
                        </svg>
                    </a>

                    <script type="text/javascript">
                        <?php if ($session->plus) { ?>
                            if ($('buttonSbCOS5JTM2euX')) {
                                $('buttonSbCOS5JTM2euX').addEvent('click', function() {
                                    window.fireEvent('buttonClicked', [this, {
                                        "type": "green",
                                        "onclick": "return false;",
                                        "loadTitle": false,
                                        "boxId": "",
                                        "disabled": false,
                                        "speechBubble": "",
                                        "class": "",
                                        "id": "buttonSbCOS5JTM2euX",
                                        "redirectUrl": "spieler.php?s=2",
                                        "redirectUrlExternal": "",
                                        "title": "List the link || Edit List the Links"
                                    }]);
                                });
                            }

                        <?php } else { ?>


                            if ($('buttonSbCOS5JTM2euX')) {
                                $('buttonSbCOS5JTM2euX').addEvent('click', function() {
                                    window.fireEvent('buttonClicked', [this, {
                                        "type": "gold",
                                        "onclick": "return false;",
                                        "loadTitle": false,
                                        "boxId": "",
                                        "disabled": false,
                                        "speechBubble": "",
                                        "class": "",
                                        "id": "buttonSbCOS5JTM2euX",
                                        "redirectUrl": "",
                                        "redirectUrlExternal": "",
                                        "plusDialog": {
                                            "featureKey": "linkList",
                                            "infoIcon": "http:\/\/t4.answers.travian.us\/index.php?aid=Help#go2answer"
                                        },
                                        "title": "List the link || Plus you are allowed to add list the links"
                                    }]);
                                });
                            }
                        <?php } ?>
                    </script>
                </div>
            </div>

            <div class="content">
                <div class="boxTitle">Link list</div>
                <ul>
                    <li class=""><a href="gods.php">
                            ► <span class="name">
                                <?php
                                if ($session->lang == 'en') {
                                    echo '<b><font color="#094D9C">Divinity⚡</font></b>';
                                } else {
                                    echo '<b><font color="#094D9C">İlahiyat⚡</font></b>';
                                }
                                ?></span>
                        </a>
                    </li>
                    <li class=""><a href="/build.php?t=99&amp;id=39">► <span class="name">Farmlist</span></a></li>
                    <li class="newTab">
                        <a tyle="color: red; font-weight: bold" href="/nachrichten.php?t=1&id=6"">
                        <svg viewBox=" 0 0 20 19.6" class="link">
                            <path d="M15.31 10.86v3.94a2.62 2.62 0 0 1-2.63 2.62H4.8a2.62 2.62 0 0 1-2.63-2.62V6.92A2.63 2.63 0 0 1 4.8 4.29h5.12V2.12H4a4 4 0 0 0-4 4v9.42a4 4 0 0 0 4 4h9.42a4 4 0 0 0 4-4v-4.68zM19.51 0H12.1a.48.48 0 0 0-.2.81l1.28 1.29.42.42a.49.49 0 0 1 0 .69l-.49.5-1 1L10 6.79l-3 3a.49.49 0 0 0 0 .69L9.53 13a.51.51 0 0 0 .69 0l2.7-2.71 1.57-1.57 1.62-1.62.66-.65a.47.47 0 0 1 .69 0l1.71 1.7a.48.48 0 0 0 .83-.39V.49a.49.49 0 0 0-.49-.49z"></path>
                            </svg>
                            <span class="name">Contact Support</span>
                        </a>
                    </li>

                    <?php
                    if ($session->plus) {
                        $links = $database->getLinks($session->uid);
                        $query = count($links);
                        if ($query > 0) {
                            echo '<div id="linkList" class="listing"><div class="list none">';
                            foreach ($links as $link) {
                                echo '<ul><li class="entry">';
                                echo '<a href="' . $link['url'] . '" title="' . $link['name'] . '"><span class="name">' . $link['name'] . '</span></a></li></ul>';
                            }
                            echo '<div class="pager"><a href="#" class="back" style="display: none; "></a><a href="#" class="next" style="display: none; "></a></div></div></div>';
                        }
                    } else {
                        echo "<br />";
                        echo Link_desc_text_1;
                    }
                    ?>
                </ul>
            </div>







            <div id="sidebarBoxLinklist" class="sidebarBox   ">
                <div class="header"></div>
                <div class="content">
                    <div class="boxTitle">Ayarlar</div>

                    <center>
                        <form action="" method="post">
                            <tr>
                                <td>Dil:</td>
                                <td>

                                    <select name="language">

                                        <?php
                                        if ($session->lang == 'en') {
                                            echo '<option value="en" selected="selected">English</option>';
                                        } else {
                                            echo '<option value="en">English</option>';
                                        }
                                        if ($session->lang == 'ar') {
                                            echo '<option value="ar" selected="selected">Turkish</option>';
                                        } else {
                                            echo '<option value="ar">Turkish</option>';
                                        }
                                        ?>
                                    </select>
                                    <input type="submit" value="Select" name="yolla">
                        </form>
                        <?php
                        if (isset($_POST['yolla'])) {
                            $database->query("UPDATE users SET lang = '" . $_POST['language'] . "' WHERE id = '" . $session->uid . "'");
                            header("refresh:0");
                        }
                        ?>
                        </td>
                        </tr>
                        </form>
                    </center>



                </div>
            </div>











        </div>
        <div class="clear"></div>
    </div>

</div>