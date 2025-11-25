<div id="resourceFieldContainer" class="resourceField<?=$village->type;?> tribe<?=$village->type;?>">
<!--    <div onclick="window.location.href='/build.php?id=1&amp;fastUP=1'" class="level colorLayer good gid1  buildingSlot1 level2">-->
<!--        <div class="labelLayer">2</div>-->
<!--    </div>-->

<?php
    $canornot = array();
    $demolition = $database->getDemolition($village->wid);

    for ($i = 1; $i <= 18; $i++) {
        $loopsame = $building->isCurrent($i) ? 1 : 0;
        $doublebuild = 0;
        $canornot[$i] = $building->canBuild($i, $village->resarray['f' . $i . 't'], $demolition);

        // if ($canornot[$i] != 1 && $canornot[$i] != 10) {
        if ($village->resarray['f' . $i . 't'] != 0) {
            if ($loopsame > 0 && $building->isLoop($i)) {
                $doublebuild = 1;
            }
            $uprequire = $building->resourceRequired($i, $village->resarray['f' . $i . 't'], ($loopsame > 0 ? 2 : 1) + $doublebuild);
            $level_b = $village->resarray['f' . $i] + ($loopsame > 0 ? 2 : 1) + $doublebuild;
            $bindicate = $building->canBuild($i, $village->resarray['f' . $i . 't'], $demolition);
            
            if ($_COOKIE['builder'] == "Off" || $building->isMax($village->resarray['f' . $i . 't'], $i) || $session->goldclub == 0) {
                // normal upgrade
                echo "<div onclick=\"window.location.href='build.php?id=" . $i . "'\"";
            } else {
                // fast upgrade
                //echo "<div onclick=\"window.location.href='/build.php?id=" . $i . "'\"";
                $link = 'dorf1.php?а=' . $i . '&c=' . $session->checker . '';
                echo '<div onclick="window.location.href=\'' . $link . '\'"';
            }
            if ($bindicate != 10 && $bindicate != 1) 
                echo 'title="'. htmlentities(sprintf(UPGRADECOST, ($village->resarray['f' . $i] + ($loopsame > 0 ? 2 : 1) + $doublebuild)) . ':<br/>
                <div class="inlineIconList resourceWrapper">
                 <span class="inlineIcon resources"> <i class="r1"></i> ' . $uprequire['wood'] . ' </span>
                 <span class="inlineIcon resources"> <i class="r2"></i> ' . $uprequire['clay'] . ' </span>
                 <span class="inlineIcon resources"> <i class="r3"></i> ' . $uprequire['iron'] . ' </span>
                 <span class="inlineIcon resources"> <i class="r4"></i> ' . $uprequire['crop'] . ' </span> 
                 </div>').'"';
            echo " class='level colorLayer "
            .(($onconstr > 0) ? 'underConstruction' : '') 
            . (($canornot[$i] == 8 || $canornot[$i] == 9) ? 'good' : (($canornot[$i] == 10 || $canornot[$i] == 1) ? 'maxLevel' : 'notNow')) 
            . " gid" . $village->resarray['f' . $i . 't'] 
            . " buildingSlot". $i 
            . " level" . ($village->resarray['f' . $i]) 
            . "'><div class=\"labelLayer\">" 
            . ($village->resarray['f' . $i] == 0 ? '' : $village->resarray['f' . $i]) 
            . "</div></div> ";
        } elseif ($canornot[$i] == 1) {
            //echo '<area href="build.php?id=' . $i . '" coords="' . $coorarray[$i] . '" shape="circle" title="<div style=\'color:#FFF\'><b>' . constant('B' . $village->resarray['f' . $i . 't']) . '</b> ' . LVL . ' ' . $village->resarray['f' . $i] . '</div>"/>';
        } elseif ($canornot[$i] == 10) {
            //echo '<area href="build.php?id=' . $i . '" coords="' . $coorarray[$i] . '" shape="circle" title="<div style=\'color:#FFF\'><b> 2 </div>"/>';
        }

        if ($village->resarray['f' . $i . 't'] != 0) {
            // $text = "";
            // $onconstr = $building->isCurrent($i) + $building->isLoop($i);
            // $style = '' . (DIRECTION == 'rtl' ? 'right' : 'left') . ':' . ($stylecoorarray[$i][0] - 1) . 'px;top:' . ($stylecoorarray[$i][1] - 2) . 'px;';

            // echo " class='level colorLayer "
            // .(($onconstr > 0) ? 'underConstruction' : '') 
            // . (($canornot[$i] == 8 || $canornot[$i] == 9) ? 'good' : (($canornot[$i] == 10 || $canornot[$i] == 1) ? 'maxLevel' : 'notNow')) 
            // . " gid" . $village->resarray['f' . $i . 't'] 
            // . " buildingSlot". $i 
            // . " level" . ($village->resarray['f' . $i]) 
            // . "'><div class=\"labelLayer\">" 
            // . ($village->resarray['f' . $i] == 0 ? '' : $village->resarray['f' . $i]) 
            // . "</div></div> ";
        }
    }


?>
<?php 

echo $dorf1_svg['resourceField'.$village->type];

?>

<svg class="villageCenter" viewBox="0 0 473 304">
    <path d="M223 109c-14.5 4.4-17.7 5.5-18.8 6.3-1.9 1.5-7.4 4.6-10.2 5.8-1.4.6-3.8 1.7-5.5 2.4-1.6.7-5 1.9-7.4 2.7-5.7 1.7-6.9 3.5-4.8 7.7 1.2 2.3 1.3 3.9.6 6.3-1.2 4.2-.3 6.7 2.6 7.4 2 .5 2.5 1.4 3.1 6 .7 5.6 3.4 10.4 6 10.4.8 0 2.2.9 3.1 2 1 1.1 2.9 2 4.3 2s4.8.9 7.6 1.9c3.1 1.2 10.2 2.4 18 3.1 7.1.6 16 1.5 19.7 2 8.1 1 10 .3 15.6-6.2 4-4.4 8-6.5 16.5-8.4 3.3-.8 4.1-1.4 4.8-4.1.5-1.8 1.7-3.4 2.8-3.8 2.4-.8 2.5-1.8.5-4.9-1.2-1.8-1.3-2.9-.5-5.2.8-1.9.8-3.5.1-4.9-.5-1.1-1.2-4.5-1.6-7.7-.6-5.4-.8-5.7-4.4-7.2-3.5-1.3-7.4-5-8.3-7.7-.2-.6-2.6-1.2-5.3-1.4-2.8-.1-5.7-.5-6.5-.8-1.6-.7-20.1-3.6-26-4.1-1.9-.2-4.6 0-6 .4z" onclick="window.location.href='/dorf2.php'"></path>
</svg>
</div>