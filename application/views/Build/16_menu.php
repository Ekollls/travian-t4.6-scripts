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


        <div class="content favor favorKey1">
            <a href="build.php?t=1&id=<?php echo $id; ?>" class="tabItem <?php if($t==1){echo 'active';}else{echo 'normal';}?>" >
                <?= PY2 ?>
            </a>
        </div>

        <div class="content favor favorKey2">
            <a href="build.php?t=2&id=<?php echo $id; ?>" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>" >
                <?= PY3 ?>
            </a>
        </div>

        <div class="content favor favorKey3">
            <a href="build.php?t=3&id=<?php echo $id; ?>" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>">
                Battle Simulator
            </a>
        </div>

        <div class="content favor favorKey99 <?php if ($session->goldclub != 1) { echo 'gold '; }?>">
            <a <?php if (!$session->goldclub) {
                echo 'id="buttonr9NmGApXEAEZH"';
            } else {
                echo 'href="build.php?id=39&amp;t=99"';
            } ?> class="tabItem <?php if($t==99){echo 'active';}else{echo 'normal';}?>"><?= PY17 ?></a>
        </div>

        <?php if ($session->goldclub != 1) { ?>
            <script type="text/javascript">
                if ($('buttonr9NmGApXEAEZH')) {
                    $('buttonr9NmGApXEAEZH').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "gold normal",
                            "title": "Farm List || For this feature you need Gold Club.",
                            "target": false,
                            "id": "buttonr9NmGApXEAEZH",
                            "href": "#",
                            "onclick": false,
                            "enabled": true,
                            "text": "List of farms",
                            "dialog": false,
                            "plusDialog": false,
                            "goldclubDialog": {
                                "featureKey": "raidList",
                                "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
                            },
                            "containerId": "",
                            "buttonIdentifier": "buttonr9NmGApXEAEZH"
                        }]);

                    });
                }
            </script>
        <?php } ?>
        <?php $disable = true;
        if ($session->goldclub == 1 && !$disable) { ?>
            <div class="container favor favorKey100 <?php if (isset($_GET['t']) && $_GET['t'] == 100) {
                echo "active";
            } else {
                echo "normal";
            } ?>">
                <a href="build.php?id=39&amp;t=100" class="tabItem <?php if($t==100){echo 'active';}else{echo 'normal';}?>"><?= GOLDC ?></a>
            </div>
        <?php } ?>
    </div>
    <button type="button" class="scrollTo" disabled="disabled"></button>
</div>