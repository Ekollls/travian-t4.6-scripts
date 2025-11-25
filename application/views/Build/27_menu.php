<?php
if (isset($_GET['show'])) {
    $artefact = $database->getArtefactDetails($database->FilterIntValue($_GET['show']));
    if ($artefact['size'] == 1) {
        $isSM = TRUE;
    }

    if ($artefact['size'] == 3 || $artefact['size'] == 2) {
        $isBG = TRUE;
    }
}
?>
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
                <?= PROFM1 ?>
            </a>
        </div>

        <div class="content favor favorKey5 ">
            <a href="build.php?t=5&id=<?php echo $id; ?>" class="tabItem <?php if($t==5){echo 'active';}else{echo 'normal';}?>" >
                Nearby Artefacts
            </a>
        </div>

        <div class="content favor favorKey2 ">
            <a href="build.php?t=2&id=<?php echo $id; ?>" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                <?= sokr18 ?>
            </a>
        </div>

        <div class="content favor favorKey3 ">
            <a href="build.php?t=3&id=<?php echo $id; ?>" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>" >
                <?= sokr20 ?>
            </a>
        </div>

    </div>
    <button type="button" class="scrollTo" disabled="disabled"></button>
</div>