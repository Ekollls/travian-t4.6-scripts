<div class="contentNavi subNavi tabFavorWrapper">
    <?php
    $t = 0;
    if (isset($_GET['t'])){
        $t = $_GET['t'];
    }
    ?>

    <button type="button" class="scrollFrom" disabled="disabled"></button>
    <div class="scrollingContainer">
        <div class="content favor favorKey0">
            <a href="nachrichten.php" class="tabItem <?php if($t==0){echo 'active';}else{echo 'normal';}?>" >
                <?= MSG6 ?>
            </a>
        </div>
        <div class="content favor favorKey1">
            <a href="nachrichten.php?t=1" class="tabItem <?php if($t==1){echo 'active';}else{echo 'normal';}?>" >
                <?= MSG7 ?>
            </a>
        </div>
        <div class="content favor favorKey2">
            <a href="nachrichten.php?t=2" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                <?= MSG8 ?>
            </a>
        </div>
        <div class="content favor favorKey5">
            <a href="nachrichten.php?t=5" class="tabItem <?php if($t==5){echo 'active';}else{echo 'normal';}?>" >
                <?= Ignored ?>
            </a>
        </div>
    </div>
    <button type="button" class="scrollTo" disabled="disabled"></button>
</div>
