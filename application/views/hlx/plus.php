<center><h1 class="titleInHeader">AVANTAJLARI AÇIN</h1><center>
    <p>
    <?=$lang['Plus']['Plus15']?>
    </p>
<table>
    <thead>
        <th>Avantaj</th>
        <th>Açıklama</th>
        <th>Kalan Süre</th>
    </thead>
    <tbody>
        <tr>
            <!--<td><?=$lang['Plus']['Plus02']?></td>-->
            <td>
                
<b><font color="#71D000">P</font><font color="#FF6F0F">l</font><font color="#71D000">u</font><font color="#FF6F0F">s</font></b> Hesap<br>
<span class="run">
<font size="1" color="#B3B3B3"><span id="ost8"></span><b><span id="time8"></span></b><span id="hour8"></span></font> </span>
</td>
            <td><?=($session->plus ? '<div class="featureRemainingTime featureSubtitle subtitle"><span class="renewalActive"> '.$lang['Plus']['Plus16'].' '.$generator->getTimeFormat($session->plust - time()).'.</span></div>' : '')?></td>
            <td>
            <center><button class="green " type="button" onclick="return Travian.Game.buyplus(8); return false;"><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><?=($session->plus ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']).' '.$config['Plus']?></div></div></button> </center>
            </td>
        </tr>
        <tr>
            <!--<td><?=$lang['Plus']['Plus03']?></td>-->
            <td>
            +<b>25</b>% <img class="r1" src="img/x.gif" alt="Odun"> Üretim: Odun<br>
<span class="run">
<font size="1" color="#B3B3B3"><span id="ost9"></span><b><span id="time9"></span></b><span id="hour9"></span></font> &nbsp;	</span>
</td>
            <td><?=($session->bonus1 ? '<div class="featureRemainingTime featureSubtitle subtitle"><span class="renewalActive"> '.$lang['Plus']['Plus16'].' '.$generator->getTimeFormat($session->bonus1 - time()).'.</span></div>' : '')?></td>
            <td>
                <center><button class="green " type="button" onclick="return Travian.Game.buyplus(9); return false;"><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><span id="action9"><?=($session->bonus1 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']).' '.$config['addonProduction']?></span></div></div></button> </center>
            </td>
        </tr>
        <tr>
            <!--<td><?=$lang['Plus']['Plus04']?></td>-->
            <td>+<b>25</b>% <img class="r2" src="img/x.gif" alt="Tuğla"> Üretim: Tuğla<br>
<span class="run">
<font size="1" color="#B3B3B3"><span id="ost10"></span><b><span id="time10"></span></b><span id="hour10"></span></font> &nbsp;	</span>
</td>
            <td><?=($session->bonus2 ? '<div class="featureRemainingTime featureSubtitle subtitle"><span class="renewalActive"> '.$lang['Plus']['Plus16'].' '.$generator->getTimeFormat($session->bonus2 - time()).'.</span></div>' : '')?></td>
            <td>
            <center><button class="green " type="button" onclick="return Travian.Game.buyplus(10); return false;"><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><span id="action10"><?=($session->bonus2 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']).' '.$config['addonProduction']?></span></div></div></button></center>
            </td>
        </tr>
        <tr>
            <!--<td><?=$lang['Plus']['Plus05']?></td>-->
            <td>
+<b>25</b>% <img class="r3" src="img/x.gif" alt="Demir"> Üretim: Demir<br>
<span class="run">
<font size="1" color="#B3B3B3"><span id="ost11"></span><b><span id="time11"></span></b><span id="hour11"></span></font> &nbsp;	</span>
</td>
            <td><?=($session->bonus3 ? '<div class="featureRemainingTime featureSubtitle subtitle"><span class="renewalActive"> '.$lang['Plus']['Plus16'].' '.$generator->getTimeFormat($session->bonus3 - time()).'.</span></div>' : '')?></td>
            <td>
            <center><button class="green " type="button" onclick="return Travian.Game.buyplus(11); return false;"><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><span id="action11"><?=($session->bonus2 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']).' '.$config['addonProduction']?></span></div></div></button></center>
            </td>
        </tr>
        <tr>
            <!--<td><?=$lang['Plus']['Plus06']?></td>-->
            <td>
+<b>25</b>% <img class="r4" src="img/x.gif" alt="Tahıl"> Üretim: Tahıl<br>
<span class="run">
<font size="1" color="#B3B3B3"><span id="ost12"></span><b><span id="time12"></span></b><span id="hour12"></span></font> &nbsp;	</span>
</td>
            <td><?=($session->bonus4 ? '<div class="featureRemainingTime featureSubtitle subtitle"><span class="renewalActive"> '.$lang['Plus']['Plus16'].' '.$generator->getTimeFormat($session->bonus4 - time()).'.</span></div>' : '')?></td>
            <td>
            <center><button class="green " type="button" onclick="return Travian.Game.buyplus(12); return false;"><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><span id="action12"><?=($session->bonus2 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']).' '.$config['addonProduction']?></span></div></div></button></center>
            </td>
        </tr>
        <tr>
            <!--<td><?=$lang['Plus']['Plus01']?></td>-->
            <td><a name="goldclub"></a>
<b>Gold Club</b>
<br>
<small><b>Gold Club Özellikleri:</b><br>
1.Yağma Listesi<br>
2.Ticaret Yolları<br>
3.Asker Kaçırma<br>
4.Tarla Bulucu<br>
5.Mimar<br>
6.x3 Ticaret<br>
<center><b>Tüm fonksiyonları ücretsiz!</b></center>
</small>
</td>
            <td><?=$session->goldclub?$lang['Plus']['Plus11']:''?></td>
        <td><center><button class=" <?=$session->goldclub?'gold disabled':'green'?>" type="button" <?php 
                if(!$session->goldclub)
                    echo 'onclick="window.location.href = \'satinal.php?clubAl=hlxClub\'; return false;"';
                else
                    echo 'disabled';
            ?> ><div class="button-container addHoverClick "> <div class="button-background"> <div class="buttonStart"> <div class="buttonEnd"> <div class="buttonMiddle"></div> </div> </div> </div> <div class="button-content"><?=($session->goldclub ? "Aktif" : "Aktifleştir").' <span id="costcp">'.$config['goldClub']?></span></div></div></button> </center>
            </td>
        </tr>
    </tbody>
</table>