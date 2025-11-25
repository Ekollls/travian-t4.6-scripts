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
                <?php echo RE4; ?>
            </a>
        </div>

        <div class="content favor favorKey2">
            <a href="build.php?t=2&id=<?php echo $id; ?>" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                <?= RE5 ?>
            </a>
        </div>

        <div class="content favor favorKey3">
            <a href="build.php?t=3&id=<?php echo $id; ?>" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>" >
                <?= RE6 ?>
            </a>
        </div>

        <div class="content favor favorKey4">
            <a href="build.php?t=4&id=<?php echo $id; ?>" class="tabItem <?php if($t==4){echo 'active';}else{echo 'normal';}?>" >
                <?= RE7 ?>
            </a>
        </div>

    </div>
    <button type="button" class="scrollTo" disabled="disabled"></button>

</div>