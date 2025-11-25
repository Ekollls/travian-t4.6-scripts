<?php if ($session->alliance == $aid) {
    ?>
    <div class="contentNavi subNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

            <div title="" class="content favor favorKey1">
                <a href="allianz.php" class="tabItem <?php if (!isset($_GET['ss']) && !isset($_GET['s']) || $_GET['s'] == 1) {
                        echo "active";
                    } else {
                        echo "normal";
                    } ?>"><?= PROFM1 ?></a>
            </div>
            <div title="" class="content favor favorKey4">
                <a href="allianz.php?s=4" class="tabItem <?php if (isset($_GET['s']) && $_GET['s'] == 4) {
                        echo "active";
                    } else {
                        echo "normal";
                    } ?>"><?= ally8 ?></a>
            </div>
            <div title="" class="content favor favorKey3">
                <a href="allianz.php?s=3" class="tabItem <?php if (isset($_GET['s']) && $_GET['s'] == 3) {
                    echo "active";
                } else {
                    echo "normal";
                } ?>"><?= ally9 ?></a>
            </div>
            <?php if ($session->sit == 0) { ?>
                <div title="" class="content favor favorKey5">
                <a href="allianz.php?s=5" class="tabItem <?php if (isset($_GET['ss']) || isset($_GET['s']) && $_GET['s'] == 5) {
                    echo "active";
                } else {
                    echo "normal";
                } ?>"><?= ally10 ?></a>
                </div><?php } ?>


        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>


    </div>

    <?php
}
?>