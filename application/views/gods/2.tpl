<div id="textmenu">
                    <a href="gods.php" class="selected"><?php if($session->lang == 'ar'){ echo 'Genel'; }else{ echo 'Overview'; } ?></a>
                    | <a href="gods.php?s=1" class="">Hera</a>
                    | <a href="gods.php?s=2" class="">Ares</a>
                    | <a href="gods.php?s=3" class="">Athena</a>
                    | <a href="gods.php?s=4" class="">Artemis</a>

</div>
<?php if($session->lang == 'ar'){ echo 'Şu anda sahip olduğunuz:'; }else{ echo 'You currently have:'; } ?> <b><?php echo $session->favor; ?></b> <?php if($session->lang == 'ar'){ echo 'İlahi Güç'; }else{ echo 'Divine Power'; } ?> <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15"><br><br>
<table id="overview" cellpadding="1" cellspacing="1">
<thead>
	<tr>
		<th colspan="100%">Ares</th>
	</tr>
	<tr>
		<td colspan="2">Bonus</td>
		<td colspan="2"><?php if($session->lang == 'ar'){ echo 'Maliyetler'; }else{ echo 'Costs'; } ?></td>
	</tr>
	</thead>
	<tbody class="hoverable">

                        <tr class="hover">
		<td><img src="https://gpack.newtravian.com/gpack/0/travian_default/img/gods/arestroops.png" height="100"></td>
		<td>
			<b>+800</b>
            
            <?php
            if($session->tribe == 1){
            echo '<img class="unit u6" src="img/x.gif" alt="Equites Caesaris" title="Equites Caesaris">';
            }elseif($session->tribe == 2){
                echo '<img class="unit u16" src="img/x.gif" alt="Teutonic Knight" title="Teutonic Knight">';
            }elseif($session->tribe == 3){
                 echo '<img class="unit u26" src="img/x.gif" alt="Haeduan" title="Haeduan">';
            }elseif($session->tribe == 6){
                 echo '<img class="unit u56" src="img/x.gif" alt="Wolf" title="Wolf">';
            }elseif($session->tribe == 7){
                 echo '<img class="unit u66" src="img/x.gif" alt="Teutonic Knight" title="Teutonic Knight">';
            }
            ?>
            <br>
			
		</td>
		<td><b>-1000</b> <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>

            <?php
            if($session->god == 2){
                                if ($session->favor >= 1000) {
                                ?>
                                    <form action="gods.php?id=6&&ares=1" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-1000 <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }

                                }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Ares</a>';
                                }
                                ?>
            
            </td>
	</tr>
	</tbody>
</table>
