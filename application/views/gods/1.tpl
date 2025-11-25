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
		<th colspan="100%">Hera</th>
	</tr>
	<tr>
		<td colspan="2">Bonus</td>
		<td colspan="2"><?php if($session->lang == 'ar'){ echo 'Maliyetler'; }else{ echo 'Costs'; } ?></td>
	</tr>
	</thead>
	<tbody class="hoverable">

                        <tr class="hover">
		<td><img src="https://gpack.newtravian.com/gpack/0/travian_default/img/gods/giveres.png" height="100"></td>
		<td>
			<b>+160000</b> <?php if($session->lang == 'ar'){ echo 'Hammadde'; }else{ 'Resources'; } ?><br>
			<img src="img/x.gif" class="r1">
			<img src="img/x.gif" class="r2">
			<img src="img/x.gif" class="r3">
			<img src="img/x.gif" class="r4">
		</td>
		<td><b>-1000</b> <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>

            <?php
            if($session->god == 1){
                                if ($session->favor >= 1000) {
                                ?>
                                    <form action="gods.php?id=6&&hera=1" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-1000 <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }

                                }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Hera</a>';
                                }
                                ?>
            
            </td>
	</tr>
	<tr>
		<td><img src="https://gpack.newtravian.com/gpack/0/travian_default/img/gods/culture.png" height="100"></td>
		<td>
			<b>+500</b> <?php if($session->lang == 'ar'){ echo 'Kültür Puanı'; }else{ echo 'Culture Points'; } ?>		</td>
		<td><b>-1000</b> <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>
			<?php
            if($session->god == 1){
                                if ($session->favor >= 1000) {
                                ?>
                                    <form action="gods.php?id=6&&hera=2" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-1000 <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }
                                 }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Hera</a>';
                                }
                                ?>
                                </td>
	</tr>
	<tr>
		<td><img src="img/bezahlung/Travian_paket_a.jpg" style="width:100px; height:100px;border-radius: 50%;" alt="Package A"></td>
		<td>
			<b>+5 </b><?php if($session->lang == 'ar'){ echo 'Altın'; }else{ echo 'Gold'; } ?> <img src="img/x.gif" class="gold" alt="Gold">
		</td>
		<td><b>-1000</b> <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15"></td>
		<td>
			<?php
            if($session->god == 1){
                                if ($session->favor >= 1000) {
                                ?>
                                    <form action="gods.php?id=6&&hera=3" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Satın alma işlemini onaylıyor musunuz?'; }else{ echo 'Do you confirm the purchase?'; } ?>')"><input class="trav_buttons" type="submit" value="Buy"></form>
                                <?php
                                } else {
                                ?>
<span class="none"> (-1000 <img src="https://gpack.newtravian.com/gpack/0/travian_default/img/a/Favor.png" alt="Favour" height="15">) </span>	
                                <?php
                                }
                                 }else{
                                    echo '<a href="gods.php" style="color:gray;"> Activate Hera</a>';
                                }
                                ?>
                                </td>
	</tr>
	</tbody>
</table>
