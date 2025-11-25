<?php
if (!is_numeric($_SESSION['search']) && !empty($_SESSION['search'])) {
    $igrok = OVERVIEW1;
    $nenaiden = STATISTIC3;
    echo "<p class=\"error\">" . $igrok . " <b>" . $_SESSION['search'] . "</b> " . $nenaiden . "</p>";
    $search = 0;
} else {
    $search = $database->FilterVar($_SESSION['search']);
}
include("player_menu.php");
?>

<h4 class="round"><?php echo STATISTIC1; ?></h4>
<table cellpadding="1" cellspacing="1" id="player" class="row_table_data">
    <thead>
        <tr>
            <td></td>
            <td>#</td>
            <td><?php echo OVERVIEW1; ?></td>
            <td>⚡</td>
            <td><?php echo OVERVIEW6; ?></td>
            <td><?php echo OVERVIEW8; ?></td>
            <td><?php echo OVERVIEW7; ?></td>
            <?php if ($session->access == 9) { ?>
                <td>Controller</td>
            <?php } ?>
            <td><?php echo flag; ?></td>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_GET['rank'])) {
            $multiplier = 1;

            if (is_numeric($_GET['rank'])) {
                if ($_GET['rank'] > count($ranking->getRank())) {
                    $_GET['rank'] = count($ranking->getRank()) - 1;
                }
                while ($_GET['rank'] > (20 * $multiplier)) {
                    $multiplier += 1;
                }
                $start = 20 * $multiplier - 19;
            } else {
                $start = ($_SESSION['start'] + 1);
            }
        } else {
            $start = ($_SESSION['start'] + 1);
        }
        if (count($ranking->getRank()) > 0) {
            $ranking = $ranking->getRank();
            for ($i = $start; $i < ($start + 20); $i++) {
                if (isset($ranking[$i]['username']) && $ranking[$i] != "pad") {

                    if ($i == $search) {
                        echo "<tr class=\"hl\"><td class=\"ra fc\" >";
                    } else {
                        echo "<tr><td class=\"ra \" >";
                    }
                    echo $i . ".</td>";

                    echo '<td class="tribe"><i class="tribe' . $ranking[$i]['tribe'] . '_medium"></i></td>';

                    echo "<td class=\"pla \" " . ($session->access < 12 ? 'style="width:34%"' : '') . ">";

                    if ($ranking[$i]['access'] > 2) {
                        if ($session->access > 2) {
                            if ((time() - 600) < $ranking[$i]['timestamp']) { // 0 Min - 10 Min
                                echo "<img class='online online1' src=img/x.gif  title='" . oweronline0 . "' alt='" . oweronline0 . "' />";
                            } elseif ((time() - 86400) <  $ranking[$i]['timestamp'] && (time() - 600) > $ranking[$i]['timestamp']) { // 10 Min - 1 Days
                                echo "<img class='online online2' src=img/x.gif title='" . oweronline1 . "' alt='" . oweronline1 . "' />";
                            } elseif ((time() - 259200) <  $ranking[$i]['timestamp'] && (time() - 86400) > $ranking[$i]['timestamp']) { // 1-3 Days
                                echo "<img class='online online3' src=img/x.gif title='" . oweronline2 . "' alt='" . oweronline2 . "' />";
                            } elseif ((time() - 604800) <  $ranking[$i]['timestamp'] && (time() - 259200) > $ranking[$i]['timestamp']) {
                                echo "<img class='online online4' src=img/x.gif title='" . oweronline3 . "' alt='" . oweronline3 . "' />";
                            } else {
                                echo "<img class='online online5' src=img/x.gif title=now online alt=now online /> ";
                            }
                        }

                        echo '<img src=img/oyun/rutbeleryeni/rutbe' . $ranking[$i]['rutbe_seviye'] . '.png style="height:25px;" title="Rank ' . $ranking[$i]['rutbe_seviye'] . '">';

                        echo "<u> <a href=\"spieler.php?uid=" . $ranking[$i]['userid'] . "\">" . $database->RemoveXSS($ranking[$i]['username']) . "</a></u>";
                        echo "</td>";
                    } else {
                        if ($session->access > 2) {
                            if ((time() - 600) < $ranking[$i]['timestamp']) { // 0 Min - 10 Min
                                echo "<img class='online online1' src=img/x.gif  title='" . oweronline0 . "' alt='" . oweronline0 . "' />";
                            } elseif ((time() - 86400) < $ranking[$i]['timestamp'] && (time() - 600) > $ranking[$i]['timestamp']) { // 10 Min - 1 Days
                                echo "<img class='online online2' src=img/x.gif title='" . oweronline1 . "' alt='" . oweronline1 . "' />";
                            } elseif ((time() - 259200) < $ranking[$i]['timestamp'] && (time() - 86400) > $ranking[$i]['timestamp']) { // 1-3 Days
                                echo "<img class='online online3' src=img/x.gif title='" . oweronline2 . "' alt='" . oweronline2 . "' />";
                            } elseif ((time() - 604800) < $ranking[$i]['timestamp'] && (time() - 259200) > $ranking[$i]['timestamp']) {
                                echo "<img class='online online4' src=img/x.gif title='" . oweronline3 . "' alt='" . oweronline3 . "' />";
                            } else {
                                echo "<img class='online online5' src=img/x.gif title=now online alt=now online />";
                            }
                        }
                        echo '<img src=img/oyun/rutbeleryeni/rutbe' . $ranking[$i]['rutbe_seviye'] . '.png style="height:15px;" title="Rank ' . $ranking[$i]['rutbe_seviye'] . '">';
                        echo "<a href=\"spieler.php?uid=" . $ranking[$i]['userid'] . "\">" . $database->RemoveXSS($ranking[$i]['username']) . "</a>";
                        echo "</td>";
                    }

                    if ($ranking[$i]['god'] == 1) {
                        echo '<td class="vil fc"><img src="gpack/travian_default/img/gods/Hera.png" height="15" alt="Hera" title="Hera"></td>';
                    } elseif ($ranking[$i]['god'] == 2) {
                        echo '<td class="vil fc"><img src="gpack/travian_default/img/gods/Ares.png" height="15" alt="Ares" title="Ares"></td>';
                    } elseif ($ranking[$i]['god'] == 3) {
                        echo '<td class="vil fc"><img src="gpack/travian_default/img/gods/Athena.png" height="15" alt="Athena" title="Athena"></td>';
                    } elseif ($ranking[$i]['god'] == 4) {
                        echo '<td class="vil fc"><img src="gpack/travian_default/img/gods/Artemis.png" height="15" alt="Artemis" title="Artemis"></td>';
                    } elseif ($ranking[$i]['god'] == 0) {
                        echo '<td class="vil fc">-</td>';
                    }

                    echo "<td class=\"al\" >";
                    if ($ranking[$i]['aname'] != "") {
                        echo "<center><a href=\"allianz.php?aid=" . $ranking[$i]['alliance'] . "\">" . $database->RemoveXSS($ranking[$i]['aname']) . "</a></center>";
                    } else {
                        echo "<center>-</center>";
                    }
                    echo "</td><td class=\"pop\" >" . $ranking[$i]['totalpop'] . "</td><td class=\"vil\">" . $ranking[$i]['totalvillage'] . "</td>";
                    if ($session->access == 9) {
                        echo '<td>' . $database->getUserInfo($ranking[$i]['userid'])['gold'] . '<img src="img/x.gif" title="gold" class="gold">
                    <a href="?getIn=' . $ranking[$i]['username'] . '">Login</a>
                    </td>';
                    }



                    if ($ranking[$i]['location'] == '') {
                        echo "<td class=\"vil fc\" ><img src='img/flags/en.png' title='England' style='height:11px;width:16px;'></td></tr>";
                    } else {
                        echo "<td class=\"vil fc\" ><img src='img/flags/" . $ranking[$i]['location'] . ".png' style='height:11px;width:16px;' title='" . $ranking[$i]['location'] . "'></td></tr>";
                    }
                }
            }
        } else {
        ?>
            <td class="none" colspan="5"><?php echo STATISTIC2; ?></td>
        <?php }
        ?>
    </tbody>
</table>
<?php
include("ranksearch.php");
?>