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
//include("player_menu.php");
?>

<h4 class="round">En büyük köyler</h4>
    <table cellpadding="1" cellspacing="1" id="villages" class="row_table_data">
        <thead>
		<tr>
            <td></td>
            <td>Köy</td>
            <td>Oyuncu</td>
            <td><?php echo OVERVIEW8; ?></td>
            <td>Koordinatlar</td>
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
            if(isset($ranking[$i]['villageid']) && $ranking[$i] != "pad") {

            if($i == $search) {
                echo "<tr class=\"hl\"><td class=\"ra fc\" >";
            }else {
                echo "<tr class=\"hover\"><td class=\"ra \" >";
            }
                echo $i.".</td><td class=\"vil \">";
                echo"<a href=\"karte.php?d=".$ranking[$i]['villageid']."\">".$database->RemoveXSS($ranking[$i]['vname'])."</a>";
                echo "</td>";
                echo '<td class="pla "><a href="spieler.php?uid='.($ranking[$i]['userid']).'">'.($database->getUserInfo($ranking[$i]['userid'])['username']).'</a></td>';
                echo "<td class=\"pop\" >".$ranking[$i]['pop']."</td>";
                echo '<td class="coords"><a class="" href="karte.php?x='.($ranking[$i]['vx']).'&amp;y='.($ranking[$i]['vy']).'">&lrm;&#8237;<span class="coordinates coordinatesWrapper coordinatesAligned coordinates'.strtoupper(DIRECTION).'"><span class="coordinateX">(&#8237;'.($ranking[$i]['vx']).'&#8236;&#8236;</span><span class="coordinatePipe">|</span><span class="coordinateY">&#8237;&#8237;'.($ranking[$i]['vy']).'&#8236;&#8236;)</span></span>&#8236;&lrm;</a></td>';
                echo '</tr>';
            }
            
        }
        }
        else {
        ?><td class="none" colspan="5"><?php echo STATISTIC2; ?></td>
        <?php }
?>
 </tbody>
</table>
<?php
include("ranksearch.php");
?>