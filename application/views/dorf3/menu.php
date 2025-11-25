<?php

    $t = 1;
    if (isset($_GET['s'])) {
        $t = $_GET['s'];
    }

if (!$session->plus) {
    ?>
    <div class="contentNavi subNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

            <div class="content favor favorKey0">
                <a id="villageOverViewTab1" href="dorf3.php" class="tabItem <?php if($t==0){echo 'active';}else{echo 'normal';}?>" >
                    <?= dorf0 ?>
                </a>
            </div>
            <script type="text/javascript">
                if ($('villageOverViewTab1')) {
                    $('villageOverViewTab1').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "active",
                            "title": false,
                            "target": false,
                            "id": "villageOverViewTab1",
                            "href": "dorf3.php?s=0",
                            "onclick": false,
                            "enabled": true,
                            "text": "<?=dorf0?>",
                            "dialog": false,
                            "plusDialog": false,
                            "goldclubDialog": false,
                            "containerId": "",
                            "buttonIdentifier": "villageOverViewTab1"
                        }]);

                    });
                }
            </script>

            <div class="content gold favor favorKey2">
                <a id="villageOverViewTab2" href="#" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf1 ?>
                </a>
            </div>

            <script type="text/javascript">
                if ($('villageOverViewTab2')) {
                    $('villageOverViewTab2').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "gold normal",
                            "title": "Village Statistics | For this meze, you need a liter in a n Plus",
                            "target": false,
                            "id": "villageOverViewTab2",
                            "href": "#",
                            "onclick": false,
                            "enabled": true,
                            "text": "<?=dorf1?>",
                            "dialog": false,
                            "plusDialog": {
                                "featureKey": "villageStatistics",
                                "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
                            },
                            "goldclubDialog": false,
                            "containerId": "",
                            "buttonIdentifier": "villageOverViewTab2"
                        }]);

                    });
                }
            </script>

            <div class="content gold favor favorKey3">
                <a id="villageOverViewTab3" href="#" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf2 ?>
                </a>
            </div>

            <script type="text/javascript">
                if ($('villageOverViewTab3')) {
                    $('villageOverViewTab3').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "gold normal",
                            "title": "Village Statistics | For this meze, you need a liter in a n Plus",
                            "target": false,
                            "id": "villageOverViewTab3",
                            "href": "#",
                            "onclick": false,
                            "enabled": true,
                            "text": "<?=dorf2?>",
                            "dialog": false,
                            "plusDialog": {
                                "featureKey": "villageStatistics",
                                "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
                            },
                            "goldclubDialog": false,
                            "containerId": "",
                            "buttonIdentifier": "villageOverViewTab3"
                        }]);

                    });
                }
            </script>

            <div class="content gold favor favorKey4">
                <a id="villageOverViewTab4" href="#" class="tabItem <?php if($t==4){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf3 ?>
                </a>
            </div>

            <script type="text/javascript">
                if ($('villageOverViewTab4')) {
                    $('villageOverViewTab4').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "gold normal",
                            "title": "Village Statistics | For this meze, you need a liter in a n Plus",
                            "target": false,
                            "id": "villageOverViewTab4",
                            "href": "#",
                            "onclick": false,
                            "enabled": true,
                            "text": "<?=dorf3?>",
                            "dialog": false,
                            "plusDialog": {
                                "featureKey": "villageStatistics",
                                "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
                            },
                            "goldclubDialog": false,
                            "containerId": "",
                            "buttonIdentifier": "villageOverViewTab4"
                        }]);

                    });
                }
            </script>

            <div class="content gold favor favorKey5">
                <a id="villageOverViewTab5" href="#" class="tabItem <?php if($t==5){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf3 ?>
                </a>
            </div>

            <script type="text/javascript">
                if ($('villageOverViewTab5')) {
                    $('villageOverViewTab5').addEvent('click', function () {
                        window.fireEvent('tabClicked', [this, {
                            "class": "gold normal",
                            "title": "Village statistics | For this feature you need liters in a N Plus",
                            "target": false,
                            "id": "villageOverViewTab5",
                            "href": "#",
                            "onclick": false,
                            "enabled": true,
                            "text": "<?=dorf4?>",
                            "dialog": false,
                            "plusDialog": {
                                "featureKey": "villageStatistics",
                                "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
                            },
                            "goldclubDialog": false,
                            "containerId": "",
                            "buttonIdentifier": "villageOverViewTab5"
                        }]);

                    });
                }
            </script>
        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>

    <?php
} else {
    ?>
    <div class="contentNavi subNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

            <div class="content favor favorKey0">
                <a id="villageOverViewTab1" href="<?php if ($session->plus) {echo 'dorf3.php';} ?>" class="tabItem <?php if($t==1){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf0 ?>
                </a>
            </div>

            <div class="content favor favorKey2">
                <a id="villageOverViewTab2" href="<?php if ($session->plus) {echo 'dorf3.php?s=2';} ?>" class="tabItem <?php if($t==2){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf1 ?>
                </a>
            </div>

            <div class="content favor favorKey3">
                <a id="villageOverViewTab3" href="<?php if ($session->plus) {echo 'dorf3.php?s=3';} ?>" class="tabItem <?php if($t==3){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf2 ?>
                </a>
            </div>

            <div class="content favor favorKey4">
                <a id="villageOverViewTab4" href="<?php if ($session->plus) {echo 'dorf3.php?s=4';} ?>" class="tabItem <?php if($t==4){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf3 ?>
                </a>
            </div>

            <div class="content favor favorKey5">
                <a id="villageOverViewTab5" href="<?php if ($session->plus) {echo 'dorf3.php?s=5';} ?>" class="tabItem <?php if($t==5){echo 'active';}else{echo 'normal';}?>">
                    <?= dorf4 ?>
                </a>
            </div>
        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
<?php } ?>