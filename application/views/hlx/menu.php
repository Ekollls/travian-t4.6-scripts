<div class="contentNavi subNavi">
    <div title="" class="<?php if(!isset($_GET['t'])) { echo "container active"; }else{ echo "container normal"; } ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="satinal.php" class="tabItem">Altın Kullan</a></div>
    </div>
    <div title="" class="<?php if(isset($_GET['t']) && $_GET['t'] == 1) { echo "container active"; }else{ echo "container normal"; } ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="satinal.php?t=1" class="tabItem">Çark Çevir</a></div>
    </div>
    <div title="" class="<?php if(isset($_GET['t']) && $_GET['t'] == 2) { echo "container active"; }else{ echo "container normal"; } ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="satinal.php?t=2" class="tabItem">Satın Al</a></div>
    </div>
    <div class="clear"></div>
</div>
