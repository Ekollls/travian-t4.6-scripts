<div id="textmenu">
                    <a href="gods.php" class="selected"><?php if($session->lang == 'ar'){ echo 'Genel'; }else{ echo 'Overview'; } ?></a>
                    | <a href="gods.php?s=1" class="">Hera</a>
                    | <a href="gods.php?s=2" class="">Ares</a>
                    | <a href="gods.php?s=3" class="">Athena</a>
                    | <a href="gods.php?s=4" class="">Artemis</a>

</div>
<?php if($session->lang == 'ar'){ echo 'Şu anda sahip olduğunuz:'; }else{ echo 'You currently have:'; } ?> <b><?php echo $session->favor; ?></b> <?php if($session->lang == 'ar'){ echo 'İlahi Güç'; }else{ echo 'Divine Power'; } ?> <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15"><br><br>
<table id="overview" cellpadding="1" cellspacing="1" class="borderGap">
<thead>
	<tr>
		<th colspan="100%">Athena</th>
	</tr>
	<tr>
		<td colspan="2">Bonus</td>
		<td colspan="2"><?php if($session->lang == 'ar'){ echo 'Maliyetler'; }else{ echo 'Costs'; } ?></td>
	</tr>
	</thead>
	<tbody class="hoverable">

                        <tr class="hover">
		<td><img src="gpack/travian_default/img/gods/deftroops.png" height="100"></td>
		<td>
			<b>+4800</b>
            
            <?php
            if($session->tribe == 1){
            echo '<img class="unit u2" src="img/x.gif" alt="Praetorian" title="Praetorian">';
            }elseif($session->tribe == 2){
                echo '<img class="unit u12" src="img/x.gif" alt="Spearman" title="Spearman">';
            }elseif($session->tribe == 3){
                 echo '<img class="unit u21" src="img/x.gif" alt="Phalanx" title="Phalanx">';
            }elseif($session->tribe == 6){
                 echo '<img class="unit u52" src="img/x.gif" alt="Spider" title="Spider">';
            }elseif($session->tribe == 7){
                 echo '<img class="unit u61" src="img/x.gif" alt="Clubswinger" title="Clubswinger">';
            }
            ?>
            <br>
			
		</td>
		<td><b>-1000</b> <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>

            <?php
            if($session->god == 3){
                                if ($session->favor >= 1000) {
                                ?>
                                    <form action="gods.php?id=6&&athena=1" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-1000 <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }

                                }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Athena</a>';
                                }
                                ?>
            
            </td>
	</tr>







    <tr>
		<td><img src="gpack/travian_default/img/gods/cityprotection.png" height="100"></td>
		<td>
			<b>+1 <?php if($session->lang == 'ar'){ echo 'Günlük Koruma'; }else{ echo 'Day protect'; } ?></b>
            
            <br>
			
		</td>
		<td><b>-3000</b> <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>

            <?php
            if($session->god == 3){
                                if ($session->favor >= 3000 && $session->protect < time()) {
                                ?>
                                    <form action="gods.php?id=6&&athena=2" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-3000 <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }

                                }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Athena</a>';
                                }
                                ?>
            
            </td>
	</tr>
	</tbody>
</table>
