<div class="contentNavi subNavi tabFavorWrapper">
    <?php
    $t = 0;
    if (isset($_GET['t'])){
        $t = $_GET['t'];
    }
    ?>
    <button type="button" class="scrollFrom" disabled="disabled"></button>
    <div class="scrollingContainer">
        <div class="content favor favorKey0 favorActive">
            <a href="build.php?id=<?php echo $id; ?>" class="tabItem <?php if($t==0){echo 'active';}else{echo 'normal';}?>" >
                <?php echo $lang['Build']['Overview']; ?>
            </a>
        </div>

        <div class="content favor favorKey5">
            <a href="build.php?t=5&id=<?php echo $id; ?>" class="tabItem <?php if($t==5){echo 'active';}else{echo 'normal';}?>" >
                <?php echo SendResouces; ?>
            </a>
        </div>

        <?php if(1>2){

            ?>
        <div class="content favor favorKey3">
            <a href="build.php?t=3&id=<?php echo $id; ?>" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>" >
                <?php echo ONPCtrading; ?>
            </a>
        </div>
        <?php }?>

        <div class="content favor favorKey1">
            <a href="build.php?t=1&id=<?php echo $id; ?>" class="tabItem <?php if($t==1){echo 'active';}else{echo 'normal';}?>" >
                <?php echo Buyma; ?>
            </a>
        </div>

        <div class="content favor favorKey2">
            <a href="build.php?t=2&id=<?php echo $id; ?>" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                <?php echo Offerma; ?>
            </a>
        </div>

        <?php if(1>2){
            // TODO trading route not done yet.
            ?>
            <div class="content favor favorKey4">
                <a href="build.php?t=4&id=<?php echo $id; ?>" class="tabItem <?php if($t==4){echo 'active';}else{echo 'normal';}?>" >
                    <?= market0 ?>
                </a>
            </div>
        <?php }?>
    </div>
    <button type="button" class="scrollTo" disabled="disabled"></button>
</div>
