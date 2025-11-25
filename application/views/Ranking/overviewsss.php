<?php
if(!is_numeric($_SESSION['search']) && !empty($_SESSION['search'])) {
	$igrok=OVERVIEW1;
	$nenaiden= STATISTIC3;
	echo "<p class=\"error\">".$igrok." <b>".$_SESSION['search']."</b> ".$nenaiden."</p>";
    $search = 0;
}
else {
$search = $database->FilterVar($_SESSION['search']);
}
include("player_menu.php");
?>
<h4 class="round"><?php echo STATISTIC1; ?></h4>
<div class="player"> 



    <table cellpadding="1" cellspacing="1" id="player" class="row_table_data">
        <thead>
		<tr>
            <td></td>
            <td></td>
            <td><?php echo OVERVIEW1; ?></td>
            <td><?php echo OVERVIEW6; ?></td>
            <td>Pop</td>
            <td>Villages</td>
            <td>Country</td>
        <?php if($session->access == 9){ ?>
            <td></td>
        <?php } ?>
        </tr>
		</thead><tbody>
        <?php
        if(isset($_GET['rank'])){
            $multiplier = 1;

        if(is_numeric($_GET['rank'])) {
        if($_GET['rank'] > count($ranking->getRank())) {
        $_GET['rank'] = count($ranking->getRank())-1;
        }
        while($_GET['rank'] > (20*$multiplier)) {
        $multiplier +=1;
        }
        $start = 20*$multiplier-19;
        } else { $start = ($_SESSION['start']+1); }
        } else { $start = ($_SESSION['start']+1); }
        if(count($ranking->getRank()) > 0) {
        $ranking = $ranking->getRank();
        for($i=$start;$i<($start+20);$i++) {
            if(isset($ranking[$i]['username']) && $ranking[$i] != "ulke") {

            if($i == $search) {
                echo "<tr class=\"hl\"><td class=\"ra fc\" >";
            }else {
                echo "<tr><td class=\"ra \" >";
            }
                echo $i.".</td>";
                echo "<td class=\"ra \" ><img src='./gpack/img/oyun/tribes/".$ranking[$i]['tribe'].".png' style='width:22px;height:23px;'></td>";
                echo"<td class=\"pla \" ".($session->access == 9 ? 'style="width:34%"': '').">";

                
                if($ranking[$i]['access'] > 2){
                    if($session->access > 2){
                        if ((time()-600) < $ranking[$i]['timestamp']){ // 0 Min - 10 Min
                            echo "<img class='online online1' src=img/x.gif  title='".oweronline0."' alt='".oweronline0."' />";
                        }elseif ((time()-86400) < $ranking[$i]['timestamp'] && (time()-600) > $ranking[$i]['timestamp']){ // 10 Min - 1 Days
                            echo "<img class='online online2' src=img/x.gif title='".oweronline1."' alt='".oweronline1."' />";
                            }elseif ((time()-259200) < $ranking[$i]['timestamp'] && (time()-86400) > $ranking[$i]['timestamp']){ // 1-3 Days
                            echo "<img class='online online3' src=img/x.gif title='".oweronline2."' alt='".oweronline2."' />";
                        }elseif ((time()-604800) < $ranking[$i]['timestamp'] && (time()-259200) > $ranking[$i]['timestamp']){
                            echo "<img class='online online4' src=img/x.gif title='".oweronline3."' alt='".oweronline3."' />";
                        }else{
                             echo "<img class='online online5' src=img/x.gif title=now online alt=now online />";
                        }
                    }


                    echo"<u><a href=\"spieler.php?uid=".$ranking[$i]['userid']."\">".$database->RemoveXSS($ranking[$i]['username'])."</a></u></td>";
                } else {
if($session->access > 2){
                    if ((time()-600) < $ranking[$i]['timestamp']){ // 0 Min - 10 Min
                        echo "<img class='online online1' src=img/x.gif  title='".oweronline0."' alt='".oweronline0."' />";
                    }elseif ((time()-86400) < $ranking[$i]['timestamp'] && (time()-600) > $ranking[$i]['timestamp']){ // 10 Min - 1 Days
                        echo "<img class='online online2' src=img/x.gif title='".oweronline1."' alt='".oweronline1."' />";
                        }elseif ((time()-259200) < $ranking[$i]['timestamp'] && (time()-86400) > $ranking[$i]['timestamp']){ // 1-3 Days
                        echo "<img class='online online3' src=img/x.gif title='".oweronline2."' alt='".oweronline2."' />";
                    }elseif ((time()-604800) < $ranking[$i]['timestamp'] && (time()-259200) > $ranking[$i]['timestamp']){
                        echo "<img class='online online4' src=img/x.gif title='".oweronline3."' alt='".oweronline3."' />";
                    }else{
                         echo "<img class='online online5' src=img/x.gif title=now online alt=now online />";
                    }
                }

                    echo"<a href=\"spieler.php?uid=".$ranking[$i]['userid']."\">".$database->RemoveXSS($ranking[$i]['username'])."</a></td>";
                }
               


                echo"<td class=\"al\" >";
                    if($ranking[$i]['aname'] != "") {
                    echo "<a href=\"allianz.php?aid=".$ranking[$i]['alliance']."\">".$database->RemoveXSS($ranking[$i]['aname'])."</a>";
                    }
                    else {
                    echo "-";
                    }
                    echo "</td><td class=\"pop\" >".$ranking[$i]['totalpop']."</td><td class=\"vil\">".$ranking[$i]['totalvillage']."</td>";
                    if($ranking[$i]['access'] > 8){
                        echo '<td>-</td>';
                    }else{
                    echo "<td class=\"pop flags\" ><img src=\"img/x.gif\" alt=\"".$ranking[$i]['country']."\" title=\"".$generator->generateCountryName($ranking[$i]['country'])."\" class=\"flag_";
                    echo $ranking[$i]['country'];
                    echo "\"></td>";
                }

                if($session->access == 9){
                    echo '<td>'.$database->getUserInfo($ranking[$i]['userid'])['gold'].'<img src="img/x.gif" title="gold" class="gold">
                    <a href="?getIn='.$ranking[$i]['username'].'">Login</a>
                    </td>';
                }
                    echo '</tr>';
            }
            
        }
        }
        else {
        ?><td class="none" colspan="5"><?php echo STATISTIC2; ?></td>
        <?php }
?>
 </tbody>
</table></div>
<?php
include("ranksearch.php");
?>