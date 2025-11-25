<?php
include("baglanti.php");
include("application/Account.php");

if ($session->uid != 6) {
    header("location:dorf1.php");
}
?>


<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if ($dorf1 == '') {
                                                                                                        echo 'perspectiveBuildings';
                                                                                                    } else {
                                                                                                        echo 'perspectiveResources';
                                                                                                    } ?> <?php echo DIRECTION; ?> buildingsV1">
    <script type="text/javascript">
        window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
    </script>
    <div id="background">
        <div id="headerBar"></div>
        <div id="bodyWrapper">

            <div id="header">

                <?php
                include("application/views/topheader.php");
                include("application/views/toolbar.php");

                ?>

            </div>
            <div id="center">


                <?php include("application/views/sideinfo.php"); ?>

                <div id="contentOuterContainer" class="size1">

                    <?php include("application/views/res.php"); ?>
                    <div class="contentTitle"><a id="closeContentButton" class="contentTitleButton" href="dorf<?= $session->link ?>.php" title="Close window">&nbsp;</a>
                        <a id="answersButton" class="contentTitleButton" href="http://t4.answers.travian.com/index.php?aid=106#go2answer" target="_blank" title="Travian Answers">&nbsp;</a>
                    </div>

                    <div class="contentContainer">
                        <div id="content" class="hero hero_adventure">

                            <div class="clear"></div>
                            <script type="text/javascript">
                                window.addEvent('domready', function() {
                                    $$('.subNavi').each(function(element) {
                                        new Travian.Game.Menu(element);
                                    });
                                });
                            </script>




                            <h1 class="titleInHeader">Admin Envanter Ekle</h1>


                            <div class="village3">

                                <div style="text-align: center">



                                    <?php


                                    $MyGold = mysqli_query($connection, "SELECT * FROM users WHERE `id`='" . $_GET['id'] . "'");
                                    $golds = mysqli_fetch_array($MyGold);
                                    ?>


                                    <p class="auto-style1">
                                    <form method="post">
                                        <td class="auto-style1">Kullanıcı Adı; <br><br>
                                            <font size="13px;"><? echo $golds['username']; ?></font>
                                        </td><br><br>
                                        <td class="auto-style1">Gold; <br><textarea name="int1" maxlength="250"><? echo $golds['gold']; ?></textarea></td><br>
                                        <td class="auto-style1">Starter Case<br><textarea name="int2" maxlength="250"><? echo $golds['envanter0']; ?></textarea></td><br>
                                        <td class="auto-style1">Bronze Case<br><textarea name="int3" maxlength="250"><? echo $golds['envanter1']; ?></textarea></td><br>
                                        <td class="auto-style1">Silver Case<br><textarea name="int4" maxlength="250"><? echo $golds['envanter2']; ?></textarea></td><br>
                                        <td class="auto-style1">Gold Case<br><textarea name="int5" maxlength="250"><? echo $golds['envanter3']; ?></textarea></td><br>
                                        <td class="auto-style1">Diamond Case<br><textarea name="int6" maxlength="250"><? echo $golds['envanter4']; ?></textarea></td><br>
                                        <td class="auto-style1">Emerald Case<br><textarea name="int7" maxlength="250"><? echo $golds['envanter5']; ?></textarea></td><br>
                                        <td class="auto-style1">Ruby Case<br><textarea name="int8" maxlength="250"><? echo $golds['envanter6']; ?></textarea></td><br>
                                        <td class="auto-style1">Super Case<br><textarea name="int9" maxlength="250"><? echo $golds['envanter7']; ?></textarea></td><br>
                                        <td class="auto-style1">Favor<br><textarea name="int10" maxlength="250"><? echo $golds['favor']; ?></textarea></td><br>
                                        <td><input name="Submit1" type="submit" value="Kaydet!"></td>

                                        <?php







                                        if (isset($_POST['Submit1'])) {
                                            $int1 = trim($_POST['int1']);
                                            $int2 = trim($_POST['int2']);
                                            $int3 = trim($_POST['int3']);
                                            $int4 = trim($_POST['int4']);
                                            $int5 = trim($_POST['int5']);
                                            $int6 = trim($_POST['int6']);
                                            $int7 = trim($_POST['int7']);
                                            $int8 = trim($_POST['int8']);
                                            $int9 = trim($_POST['int9']);
                                            $int10 = trim($_POST['int10']);
                                            if ($int1 != "") {

                                                $database->query("UPDATE users set gold = '" . $int1 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int2 != "") {
                                                $database->query("UPDATE users set envanter0 = '" . $int2 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int3 != "") {
                                                $database->query("UPDATE users set envanter1 = '" . $int3 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int4 != "") {
                                                $database->query("UPDATE users set envanter2 = '" . $int4 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int5 != "") {
                                                $database->query("UPDATE users set envanter3 = '" . $int5 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int6 != "") {
                                                $database->query("UPDATE users set envanter4 = '" . $int6 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int7 != "") {
                                                $database->query("UPDATE users set envanter5 = '" . $int7 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int8 != "") {
                                                $database->query("UPDATE users set envanter6 = '" . $int8 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int9 != "") {
                                                $database->query("UPDATE users set envanter7 = '" . $int9 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            if ($int10 != "") {
                                                $database->query("UPDATE users set favor = '" . $int10 . "' where `id`='" . $_GET['id'] . "'");
                                            }
                                            header("refresh:0;");
                                        }

                                        ?>




                                        <div class="clear">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="contentFooter">&nbsp;</div>

                </div>
                <?php
                include("application/views/rightsideinfor.php");
                ?>
                <div class="clear"></div>
            </div>
            <?php

            include("application/views/header.php");
            ?>

        </div>
        <div id="ce"></div>
    </div>
</body>

</html>