<?php if (!$session->sit) { ?>
    <div class="contentNavi subNavi tabFavorWrapper">
        <?php
        $t = 0;
        if (isset($_GET['s'])){
            $t = $_GET['s'];
        }
        ?>
        <button type="button" class="scrollFrom" disabled="disabled"></button>

        <div class="scrollingContainer">
            <div class="content favor favorKey0">
                <a href="spieler.php?uid=<?php if (isset($_GET['uid'])) { echo $_GET['uid']; } else { echo $session->uid; } ?>" class="tabItem <?php if (isset($_GET['uid'])) { echo "active"; } else { echo "normal"; } ?>" >
                    <?= PROFM1 ?>
                </a>
            </div>

            <div class="content favor favorKey1">
                <a href="spieler.php?s=1" class="tabItem <?php if ($t == 1) { echo "active"; } else { echo "normal"; } ?>" >
                    <?= OVERVIEW14 ?>
                </a>
            </div>
        </div>

        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
<?php } ?>