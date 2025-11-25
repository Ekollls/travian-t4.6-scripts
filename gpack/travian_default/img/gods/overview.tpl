<div id="textmenu">
                    <a href="gods.php" class="selected"><?php if($session->lang == 'ar'){ echo 'Genel'; }else{ echo 'Overview'; } ?></a>
                    | <a href="gods.php?s=1" class="">Hera</a>
                    | <a href="gods.php?s=2" class="">Ares</a>
                    | <a href="gods.php?s=3" class="">Athena</a>
                    | <a href="gods.php?s=4" class="">Artemis</a>

                </div><?php if($session->lang == 'ar'){ echo 'Yeni bir Tanrı seçerek tüm ilahi gücü kaybedeceksiniz'; }else{ echo 'By choosing a new God you will lose all divine power'; } ?></a> <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15">.
                <br>
                <?php if($session->lang == 'ar'){ echo 'Şu anda sahip olduğunuz:'; }else{ 'You currently have:'; } ?> <b><?php echo $session->favor; ?></b> <?php if($session->lang == 'ar'){ echo 'İlahi Güç'; }else{ echo 'Divine Power'; } ?> <img src="gpack/travian_default/img/a/Favor.png" alt="Favour" height="15">
                <table id="overview" cellpadding="1" cellspacing="1" class="borderGap">
                    <thead>
                        <tr>
                            <th colspan="100%"><?php if($session->lang == 'ar'){ echo 'Genel'; }else{ echo 'Overview'; } ?></th>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if($session->lang == 'ar'){ echo 'Tanrı'; }else{ echo 'Divinity'; } ?></td>
                            <td colspan="2"><?php if($session->lang == 'ar'){ echo 'Açıklama'; }else{ echo 'Description'; } ?></td>
                        </tr>
                    </thead>
                    <tbody class="hoverable">

                        <tr class="hover">
                            <td>
                            <?php
                                if ($session->god != 1) {
                                ?>
                                <img src="gpack/travian_default/img/gods/Hera.png" height="100">
                                 <?php
                                } else {
                                ?>
                                 <img src="gpack/travian_default/img/gods/Hera.png" height="100" style="border: 4px solid #094D9C;border-radius: 50%;">
                                <?php
                                }
                                ?>
                            </td>
                            <td>Hera</td>
                            <td><i><?php if($session->lang == 'ar'){ echo 'Hammadde'; }else{ echo 'Resources'; } ?> &amp; <?php if($session->lang == 'ar'){ echo 'Altın'; }else{ echo 'Gold'; } ?> <b> <img src="img/x.gif" class="gold" alt="Gold"></b></i></td>
                            <td>
                                <?php
                                if ($session->god != 1) {
                                ?>
                                    <form action="gods.php?id=1" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Yeni bir Tanrı seçerek tüm ilahi gücü kaybedeceksiniz'; }else{ echo 'By choosing a new God you will lose all divine power'; } ?>')"><input class="trav_buttons" type="submit" value="Activate"></form>
                                <?php
                                } else {
                                    echo '<a href="?s=1">Use Now</a>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($session->god != 2) {
                                ?>
                                <img src="gpack/travian_default/img/gods/Ares.png" height="100">
                                 <?php
                                } else {
                                ?>
                                 <img src="gpack/travian_default/img/gods/Ares.png" height="100" style="border: 4px solid #094D9C;border-radius: 50%;">
                                <?php
                                }
                                ?>
                            </td>
                            <td>Ares</td>
                            <td><i><?php if($session->lang == 'ar'){ echo 'Savaş'; }else{ echo 'War'; } ?></i></td>
                            <td>
                                <?php
                                if ($session->god != 2) {
                                ?>
                                    <form action="gods.php?id=2" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Yeni bir Tanrı seçerek tüm ilahi gücü kaybedeceksiniz'; }else{ echo 'By choosing a new God you will lose all divine power'; } ?>')"><input class="trav_buttons" type="submit" value="Activate"></form>
                                <?php
                                } else {
                                    echo '<a href="?s=2">Use Now</a>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($session->god != 3) {
                                ?>
                                <img src="gpack/travian_default/img/gods/Athena.png" height="100">
                                 <?php
                                } else {
                                ?>
                                 <img src="gpack/travian_default/img/gods/Athena.png" height="100" style="border: 4px solid #094D9C;border-radius: 50%;">
                                <?php
                                }
                                ?>
                            </td>
                            <td>Athena</td>
                            <td><i><?php if($session->lang == 'ar'){ echo 'Defans'; }else{ echo 'Defence'; } ?></i></td>
                            <td>
                                <?php
                                if ($session->god != 3) {
                                ?>
                                    <form action="gods.php?id=3" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Yeni bir Tanrı seçerek tüm ilahi gücü kaybedeceksiniz'; }else{ echo 'By choosing a new God you will lose all divine power'; } ?>')"><input class="trav_buttons" type="submit" value="Activate"></form>
                                <?php
                                } else {
                                    echo '<a href="?s=3">Use Now</a>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($session->god != 4) {
                                ?>
                                <img src="gpack/travian_default/img/gods/Artemis.png" height="100">
                                 <?php
                                } else {
                                ?>
                                 <img src="gpack/travian_default/img/gods/Artemis.png" height="100" style="border: 4px solid #094D9C;border-radius: 50%;">
                                <?php
                                }
                                ?>
                            </td>
                            <td>Artemis</td>
                            <td><i><?php if($session->lang == 'ar'){ echo 'Casus'; }else{ echo 'Scout'; } ?></i></td>
                            <td>
                                <?php
                                if ($session->god != 4) {
                                ?>
                                    <form action="gods.php?id=4" method="POST" onsubmit="return confirm('<?php if($session->lang == 'ar'){ echo 'Yeni bir Tanrı seçerek tüm ilahi gücü kaybedeceksiniz'; }else{ echo 'By choosing a new God you will lose all divine power'; } ?>')"><input class="trav_buttons" type="submit" value="Activate"></form>
                                <?php
                                } else {
                                    echo '<a href="?s=4">Use Now</a>';
                                }
                                ?>
                            </td>
                        </tr>


                    </tbody>
                </table>
         