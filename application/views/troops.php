<div class="boxes villageList units">
    <div class="boxes-tl"></div>
    <div class="boxes-tr"></div>
    <div class="boxes-tc"></div>
    <div class="boxes-ml"></div>
    <div class="boxes-mr"></div>
    <div class="boxes-mc"></div>
    <div class="boxes-bl"></div>
    <div class="boxes-br"></div>
    <div class="boxes-bc"></div>
    <div class="boxes-contents cf"><center>
<table id="troops" cellpadding="1" cellspacing="1">
            <thead>
                <tr>
                    <?php
                    if ($session->goldclub == 1) {
                    ?>
                        <a href="/build.php?id=39&t=99">
                            <div class="asdasd" style="border-radius:20px;text-align:center;color:#fff;height:17px;padding: 3px;width: 178px;border: 1pxsolid #283308;background-image: linear-gradient(to bottom,#7cb029,#587c1e);box-shadow: inset 2px 0 1px -1px #4b6f19, inset -2px 0 1px -1px #4b6f19, inset 0 3px 1px -1px #b5e251, inset 0 -3px 1px -1px rgb(44 75 12 / 60%);">Farm List</div>
                        </a>



                        <div id="raidList">
                            <div class="options">
                                <?php
                                if ($session->evasion == 1) {
                                ?>
                                    <input type="checkbox" class="check" name="hideShow" onclick="window.location.href = 'build.php?id=39&t=100&disable';" checked="checked">
                                    Asker Kaçırma Açık
                                <?php
                                } else {
                                ?>
                                    <input type="checkbox" class="check" name="hideShow" onclick="window.location.href = 'build.php?id=39&t=100&enable';">
                                    Asker Kaçırma Kapalı
                                <?php } ?>
                            </div>

                        </div>
                        <hr>
</center>
                    <?php
                    }
                    ?>
                    <th colspan="3">
                        <?php echo TROOPS_DORF; ?>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
$troops = $village->unitsInVillage();
$TroopsPresent = False;
if($troops['hero'] > 0) {
		echo "<tr><td class=\"ico\"><a href=\"build.php?t=1&id=39\"><img class=\"unit uhero\" src=\"img/x.gif\" alt=\"Hero\" title=\"Hero\" /></a></td>";
		echo "<td class=\"num\">".$troops['hero']."</td><td class=\"un\">".U0."</td></tr>";
		$TroopsPresent = True;
}
for($i=1;$i<=70;$i++) {
if(isset($troops['u'.$i])){
	if($troops['u'.$i] > 0) {
        echo "<tr><td class=\"ico\"><a href=\"build.php?t=1&id=39\"><img class=\"unit u".$i."\" src=\"img/x.gif\" alt=\"\" title=\"".constant('U'.$i)."\" /></a></td>";
		echo "<td class=\"num\">".number_format($troops['u'.$i])."</td><td class=\"un\">".constant('U'.$i)."</td></tr>";
		$TroopsPresent = True;
	}
}
}



if(!$TroopsPresent) {
    echo "<tr><td>".other21."</td></tr>";
}
?>
            </tbody>
        </table>
    </div>
</div>

