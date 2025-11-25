<?php

include("Templates/Plus/pmenu.php");
$today = date("mdHi");

$disabl=(!$session->right['s4'])?'disabled':'';
echo "<div class=\"boxes boxesColor gray adventureStatusMessage\"><div class=\"boxes-tl\"></div><div class=\"boxes-tr\"></div><div class=\"boxes-tc\"></div><div class=\"boxes-ml\"></div><div class=\"boxes-mr\"></div><div class=\"boxes-mc\"></div><div class=\"boxes-bl\"></div><div class=\"boxes-br\"></div><div class=\"boxes-bc\"></div><div class=\"boxes-contents\"> ".pluss32." <b><span id='gold'>$session->gold</span></b>  ".pluss33." </div></div>";


?>
<span id="plushour" style="display: none;" ><?=PLUS_TIME/3600?></span>

<h4 class="spacer"><?=pluss6?></h4>
<table class="plusFunctions" cellpadding="1" cellspacing="1">
<thead>
<tr>


    <td><?=pluss7?></td>
    <td><?=pluss8?></td>
    <td ><?=pluss9?></td>
    <td><?=pluss10?></td>
</tr>
</thead>
<tbody>

<tr>

    <td class="desc">
        <b><font color="#71D000"><?=P?></font><font color="#FF6F0F"><?=L?></font><font color="#71D000"><?=U?></font><font
                color="#FF6F0F"><?=S?></font></b> <?=pluss11?><br/>
		<span class="run">
<?php
$datetimep = $session->plust;
$datetime1 = $session->bonus1;
$datetime2 = $session->bonus2;
$datetime3 = $session->bonus3;
$datetime4 = $session->bonus4;


//Retrieve the current date/time
$date2 = strtotime("NOW");

if ($datetimep > time()) {
    $holdtotmin = (($datetimep - $date2) / 60);
    $holdtothr = (($datetimep - $date2) / 3600);
    $holdtotday = intval(($datetimep - $date2) / 86400);
    echo "<font color='#B3B3B3' size='1'>".pluss28.": <b>" . $holdtotday . "</b> ".pluss29." ";

    $holdhr = intval(($holdtothr) - ($holdtotday * 24));
    echo " <b><span id='time8'>" . ($holdhr) . "</span></b> ".pluss30." ";

    $holdmr = intval(($holdtotmin) - (($holdhr * 60) + ($holdtotday * 1440)));
    echo "<b> " . ($holdmr) . "</b> ".pluss31."</font>";
} else {
    print "<font color='#B3B3B3' size='1'><span id='ost8'></span><b><span id='time8'></span></b><span id='hour8'></span></font>";
}
?>
	</span>
    </td>
    <td class="dur"><?php if (PLUS_TIME >= 86400) {
            echo '' . (PLUS_TIME / 86400) . ' '.PLUS8.'';
        } else if (PLUS_TIME < 86400) {
            echo '' . (PLUS_TIME / 3600) .' '.PLUS9.' ';
        } ?>
    </td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Gold" title="Gold" alt="Altın" title="Altın"/>20</td>
    <td class="act">

        <?php



        if ($session->gold > 19 && $datetimep < $date2) { //onclick=\"window.location.href = 'plus.php?id=8';
            echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onClick=\"return Travian.Game.buyplus(8); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\"><span id='action8'>".pluss25."</span></div></div></button>";

        } elseif
        ($session->gold > 19 && $datetimep > $date2
        ) {
            echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(8); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss26."</div></div></button>";

        } else {
            echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";

        }

        ?>
        </span></a></td>
</tr>

<tr>
    <td colspan="5" class="empty"></td>

</tr>
<tr>

    <td class="desc">
        +<b>25</b>% <img class="r1" src="img/x.gif" alt="Odun" title="Odun"/> <?=pluss34?><br/>
				<span class="run">
<?php

$tl_b1 = $datetime1;
if ($tl_b1 > $date2) {
    $holdtotmin1 = (($tl_b1 - $date2) / 60);
    $holdtothr1 = (($tl_b1 - $date2) / 3600);
    $holdtotday1 = intval(($tl_b1 - $date2) / 86400);
    $holdhr1 = intval($holdtothr1 - ($holdtotday1 * 24));
    $holdmr1 = intval($holdtotmin1 - (($holdhr1 * 60) + ($holdtotday1 * 1440)));
}

if ($tl_b1 < $date2) {
    print "<font color='#B3B3B3' size='1'><span id='ost9'></span><b><span id='time9'></span></b><span id='hour9'></span></font>";
} else {

    echo "<font color='#B3B3B3' size='1'> ".pluss28." : <b> " . $holdtotday1 . "</b> ".pluss29." ";
    echo "<b>  <span id='time9'>" . ($holdhr1) . "</span></b> ".pluss30." ";
    echo "<b>  " . ($holdmr1) . "</b> ".pluss31."</font> ";

}
?>
                    &nbsp;	</span>

    </td>
    <td class="dur"><?php if (PLUS_PRODUCTION >= 86400) {
            echo '' . (PLUS_PRODUCTION / 86400) . ' '.PLUS8.'';
        } else if (PLUS_PRODUCTION < 86400) {
            echo '' . (PLUS_PRODUCTION / 3600) .' '.PLUS9.' ';;
        } ?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>5</td>
    <td class="act"><span class="none">

<?php

if ($session->gold > 4 && $tl_b1 < $date2) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(9); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\"><span id='action9'>".pluss25."</span></div></div></button>";
} elseif
($session->gold > 4 && $datetime1 > $date2
) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(9); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss26."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";
}

?>
	</span></a></td>
</tr>

<tr>


    <td class="desc">
        +<b>25</b>% <img class="r2" src="img/x.gif" alt="Tuğla" title="Tuğla"/> <?=pluss35?><br/>
				<span class="run">
<?php

$tl_b2 = $datetime2;
if ($tl_b2 > $date2) {
    $holdtotmin2 = (($tl_b2 - $date2) / 60);
    $holdtothr2 = (($tl_b2 - $date2) / 3600);
    $holdtotday2 = intval(($tl_b2 - $date2) / 86400);
    $holdhr2 = intval($holdtothr2 - ($holdtotday2 * 24));
    $holdmr2 = intval($holdtotmin2 - (($holdhr2 * 60) + ($holdtotday2 * 1440)));
}

if ($tl_b2 < $date2) {
    print "<font color='#B3B3B3' size='1'><span id='ost10'></span><b><span id='time10'></span></b><span id='hour10'></span></font>";
} else {

    echo "<font color='#B3B3B3' size='1'>".pluss28.": <b> " . $holdtotday2 . "</b> ".pluss29." ";
    echo "<b>  <span id='time10'>" . ($holdhr2) . "</span></b> ".pluss30." ";
    echo "<b>  " . ($holdmr2) . "</b> ".pluss31."<font>";

}
?>
                    &nbsp;	</span>
    </td>
    <td class="dur"><?php if (PLUS_PRODUCTION >= 86400) {
            echo '' . (PLUS_PRODUCTION / 86400) . ' '.PLUS8.'';
        } else if (PLUS_PRODUCTION < 86400) {
            echo '' . (PLUS_PRODUCTION / 3600) .' '.PLUS9.' ';
        } ?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>5</td>

    <td class="act"><span class="none">

<?php

if ($session->gold > 4 && $tl_b2 < $date2) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(10); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\"><span id='action10'>".pluss25."</span></div></div></button>";
} elseif
($session->gold > 4 && $tl_b2 > $date2
) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(10); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss26."</div></div></button>";
} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";
}

?>

</tr>

<tr>

    <td class="desc">
        +<b>25</b>% <img class="r3" src="img/x.gif" alt="Demir" title="Demir"/> <?=pluss36?><br/>
				<span class="run">
<?php

$tl_b3 = $datetime3;
if ($tl_b3 > $date2) {
    $holdtotmin3 = (($tl_b3 - $date2) / 60);
    $holdtothr3 = (($tl_b3 - $date2) / 3600);
    $holdtotday3 = intval(($tl_b3 - $date2) / 86400);
    $holdhr3 = intval($holdtothr3 - ($holdtotday3 * 24));
    $holdmr3 = intval($holdtotmin3 - (($holdhr3 * 60) + ($holdtotday3 * 1440)));
}

if ($tl_b3 < $date2) {
    print "<font color='#B3B3B3' size='1'><span id='ost11'></span><b><span id='time11'></span></b><span id='hour11'></span></font>";
} else {

    echo "<font color='#B3B3B3' size='1'>".pluss28.": <b> " . $holdtotday3 . "</b> ".pluss29." ";
    echo "<b><span id='time11'>" . ($holdhr3) . "</span></b> ".pluss30." ";
    echo "<b>  " . ($holdmr3) . "</b> ".pluss31."</font>";

}
?>
                    &nbsp;	</span>
    </td>
    <td class="dur"><?php if (PLUS_PRODUCTION >= 86400) {
            echo '' . (PLUS_PRODUCTION / 86400) . ' '.PLUS8.'';
        } else if (PLUS_PRODUCTION < 86400) {
            echo '' . (PLUS_PRODUCTION / 3600) .' '.PLUS9.' ';;
        } ?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>5</td>
    <td class="act"><span class="none">

<?php

if ($session->gold > 4 && $tl_b3 < $date2) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(11); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\"><span id='action11'>".pluss25."</span></div></div></button>";
} elseif
($session->gold > 4 && $tl_b3 > $date2
) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(11); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss26."</div></div></button>";
} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";
}

?>
            &nbsp;	</span></a></td>
</tr>

<tr>


    <td class="desc">
        +<b>25</b>% <img class="r4" src="img/x.gif" alt="Tahıl" title="Tahıl"/> <?=pluss37?><br/>
				<span class="run">
<?php

$tl_b4 = $datetime4;
if ($tl_b4 > $date2) {
    $holdtotmin4 = (($tl_b4 - $date2) / 60);
    $holdtothr4 = (($tl_b4 - $date2) / 3600);
    $holdtotday4 = intval(($tl_b4 - $date2) / 86400);
    $holdhr4 = intval($holdtothr4 - ($holdtotday4 * 24));
    $holdmr4 = intval($holdtotmin4 - (($holdhr4 * 60) + ($holdtotday4 * 1440)));
}

if ($tl_b4 < $date2) {
    print "<font color='#B3B3B3' size='1'><span id='ost12'></span><b><span id='time12'></span></b><span id='hour12'></span></font>";
} else {

    echo "<font color='#B3B3B3' size='1'>".pluss28.": <b> " . $holdtotday4 . "</b> ".pluss29." ";
    echo "<b>  <span id='time12'>" . ($holdhr4) . "</span></b> ".pluss30." ";
    echo "<b>  " . ($holdmr4) . "</b> ".pluss31."</font>";
}
?>
                    &nbsp;	</span></td>
    <td class="dur"><?php if (PLUS_PRODUCTION >= 86400) {
            echo '' . (PLUS_PRODUCTION / 86400) . ' '.PLUS8.'';
        } else if (PLUS_PRODUCTION < 86400) {
            echo '' . (PLUS_PRODUCTION / 3600) .' '.PLUS9.' ';
        } ?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>5</td>
    <td <span class="none">
<?php

if ($session->gold > 4 && $tl_b4 < $date2) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(12); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\"><span id='action12'>".pluss25."</span></div></div></button>";
} elseif
($session->gold > 4 && $tl_b4 > $date2
) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(12); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss26."</div></div></button>";
} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";
}

?>

</tr>


<tr>
    <td colspan="5" class="empty"></td>
</tr>

<tr>

    <td class="desc"><?=PLUS19?></td>
    <td class="dur"><?=PLUS20?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>3</td>

    <td class="act"><span class="none">


<?php
if ($session->gold > 2) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'build.php?gid=17&t=3'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS21."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";
}
?>
</span></a>
    </td>
</tr>

<tr>
    <td colspan="5" class="empty"></td>
</tr>
<tr>


    <td class="desc"><?=PLUS24?></td>
    <td class="dur"><?=PLUS20?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>2</td>
    <td class="act"><span class="none">

<?php

if ($session->gold > 1) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'plus.php?id=7'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS25."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";

}

?>

<?php if(SELL_RES){?>

<?php





?>
<?php if(SELL_RES){?>

<?php






}
?>






<?php if(SELL_RES){?>

<?php




}
?>



<?php }if(false){?>

<?php

}

?>
</span></a>
    </td>
</tr>



<?php

if(SELL_CP){ ?>
<tr>

    <td class="desc"><?=PLUS26?> <?= HOWCP ?> <?=PLUS27?></td>
    <td class="dur"><?=PLUS20?></td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/><span id='costcp'><?= COSTCP ?></span></td>
    <td class="act"><span class="none">
<?php
if ($session->gold >= COSTCP) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"return Travian.Game.buyplus(6); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS20."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".pluss27."</div></div></button>";

}

?>
</span></a>
    </td>
</tr>
<tr>

    <td class="desc">Finish All Troop Training in the Current Village</td>
    <td class="dur">Instant</td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>100</td>

    <td class="act"><span class="none">

<?php

if ($session->gold > 100) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'ajax.php?cmd=FinishTraining'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS26."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">Low Gold</div></div></button>";
}
?>
</span></a>
    </td>
</tr>

<tr>

    <td class="desc">Upgrade All res Lvl To 20 </td>
    <td class="dur">Instant</td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>400</td>

    <td class="act"><span class="none">


<?php
if ($session->gold > 399) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'ajax.php?cmd=upallres'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS26."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">Low Gold</div></div></button>";
}
?>
</span></a>
    </td>
</tr>

<tr>
    <td colspan="5" class="empty"></td>
</tr>

<tr>

    <td class="desc">  Buy 10 <img src="img/x.gif" class="itemCategory itemCategory_cage" alt="itemCategory itemCategory_cage">* Server Hızı Kadar Yakalar</td>
    <td class="dur">Instant</td>
    <td class="cost"><img src="img/x.gif" class="gold" alt="Altın" title="Altın"/>90</td>

    <td class="act"><span class="none">


<?php
if ($session->gold > 90) {
    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'ajax.php?cmd=cages'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS26."</div></div></button>";

} else {
    echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">Low Gold</div></div></button>";
}
?>
</span></a>
    </td>
</tr>

<?php } ?>
</tbody>
</table>
<h4 class="spacer"><?=PLUS31?></h4>
<table class="plusFunctions" cellpadding="1" cellspacing="1">
    <thead>
    <tr>
        <td><?=PLUS1?></td>
        <td><?=PLUS2?></td>
        <td><?=PLUS3?></td>
        <td><?=PLUS4?></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="desc">
            <a name="goldclub"></a>
            <b><?=PLUS31?></b>
            <br/>
            <small><b><?=PLUS32?></b><br/>
                <?=PLUS33?><br/>
                <?=PLUS34?><br/>
                <?=PLUS35?><br/>
                <?=PLUS36?><br/>
                <?=PLUS37?><br/>
                <?=PLUS38?><br/>
                <center><b><?=PLUS39?></b></center>
            </small>

            <?php //  <div class="run">Activate Gold Club for extra. </div> ?>
        </td>
        <td class="dur">
           <?=PLUS40?>

        </td>
        <td class="cost"><img src="img/x.gif" class="gold" alt="gold">250</td>
        <td class="act">
            <?php
            if ($session->gold >= 250) {
                if (!$session->goldclub) {
                    echo "<center><button class=\"green ".$disabl."\" type=\"button\"  onclick=\"window.location.href = 'plus.php?id=15'; return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS12."</div></div></button>";

                } else {
                    echo "<center><button class=\"gold \" type=\"button\" class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS41."</div></div></button>";
                }
            } else {
                echo "<center><button class=\"gold \" type=\"button\"  class=\" disabled\" onclick=\"(new Event(event)).stop(); return false;\" onfocus=\"$$('button', 'input[type!=hidden]', 'select')[0].focus(); (new Event(event)).stop(); return false;\"><div class=\"button-container addHoverClick \">     <div class=\"button-background\">         <div class=\"buttonStart\">             <div class=\"buttonEnd\">                 <div class=\"buttonMiddle\"></div>             </div>         </div>     </div>     <div class=\"button-content\">".PLUS12."</div></div></button>";
            }
            ?></td>
    </tr>


    </tbody>
</table>
<div class="clear">&nbsp;</div>