<?php
include('application/config.php');
include_once "application/Account.php";
if (isset($_GET['clubAl'])) {
    if ($_GET['clubAl'] == "hlxClub") {
        if ($session->gold >= $config['goldClub']) {
            if ($session->goldclub == 0) {
                $database->modifyGold($session->uid, $config['goldClub'], 0);
                $database->query("UPDATE users SET goldclub = 1 WHERE id = " . $session->uid . "");
            }
        }
    }
    exit('<meta http-equiv="refresh" content="0;url=satinal.php">');
}
if (isset($_GET['t'])) {
    if ($_GET['t'] == 1) {
        $carkOdulleri = $baglanDB->query("SELECT * FROM oduller ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
        if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
            /** 
             * 
             * sayısal değerlere tur eklemek için +360 yapılmalı örnek $carkGoster 
             *2. sıradaki ödül için 70,100,140,240,310 eklidir bu alan sadece animasyonun dogru noktada durması içindir.
             *bu sayısal değerleri 70+360=430 yani 70 yerine 430 eklerseniz sonuc yine 2. ödül olur animasyon olarak 
             *
             * */
            header('Content-Type: application/json; charset=utf-8', true, 200);
            if ($session->cark < 1)
                exit(json_encode(['status' => false, 'message' => "Üzgünüz! Çark Hakkınız Bulunmamaktadır."]));
            $session->cark = $session->cark - 1;
            $carkGoster = [];
            $yukle = [];
            $oduller = [];
            foreach ($carkOdulleri as $odul) {
                if (!isset($carkGoster[$odul['odul']]))
                    $carkGoster[$odul['odul']] = [];
                array_push($carkGoster[$odul['odul']], $odul['pozisyon']);
                if (!isset($oduller[$odul['odul']]))
                    $oduller[$odul['odul']] = 0;
                if (!isset($yukle[$odul['odul']]))
                    $yukle[$odul['odul']] = [
                        "tip" => $odul['tip'],
                        "adet" => $odul['miktar'],
                        "bonus" => $odul['bonus'],
                    ];
                $oduller[$odul['odul']] += $odul['oran'];
            }
            function rasgele_sec($oduller)
            {
                $rand = rand(0, array_sum($oduller));
                do {
                    $sum = array_sum($oduller);
                    if ($rand <= $sum && $rand >= $sum - end($oduller)) {
                        return key($oduller);
                    }
                } while (array_pop($oduller));
            }
            $secilen = rasgele_sec($oduller);
            $database->query('UPDATE `users` SET `cark` = ' . $session->cark . ' WHERE `username` = "' . $session->username . '"');
            $yuklenecek = isset($yukle[$secilen]['adet']) ? $yukle[$secilen]['adet'] : 0;
            $session->cark += (isset($yukle[$secilen]['bonus']) ? $yukle[$secilen]['bonus'] : 0);
            include("application/Message.php");
            switch ($yukle[$secilen]['tip']) {
                case 'pass':
                    //ödüllere pass eklenirse altaki kod yorum işareti kaldırılırsa çark çevirme hakkı iade edilir.
                    /*
                        $session->cark=$session->cark+1;
                        $database->query('UPDATE `users` SET `cark` = '.$session->cark.' WHERE `username` = "'.$session->username.'"');
                    */
                    break;
                case 'gold':
                    $session->gold = $session->gold + $yuklenecek;
                    $database->query('UPDATE `users` SET `gold` = ' . $session->gold . ', `cark`= ' . $session->cark . ' WHERE `username` = "' . $session->username . '"');
                    $topic = 'Tebrikler ! ' . $yuklenecek . ' Altın Kazandınız.';
                    $database->sendMessage($session->uid, 4, 'Çark Ödülü Yüklendi', htmlspecialchars(addslashes($topic)), 0, 0, 0, 0, 0);
                    break;
                case 'silver':
                    $session->silver = $session->silver + $yuklenecek;
                    $database->query('UPDATE `users` SET `silver` = ' . $session->silver . ', `cark`= ' . $session->cark . ' WHERE `username` = "' . $session->username . '"');
                    $topic = 'Tebrikler ! ' . $yuklenecek . ' Gümüş Kazandınız.';
                    $database->sendMessage($session->uid, 4, 'Çark Ödülü Yüklendi', htmlspecialchars(addslashes($topic)), 0, 0, 0, 0, 0);
                    break;
                case 'cark':
                    $session->cark = $session->cark + $yuklenecek;
                    $database->query('UPDATE `users` SET `cark` = ' . $session->cark . ', `cark`= ' . $session->cark . ' WHERE `username` = "' . $session->username . '"');
                    $topic = 'Tebrikler ! ' . $yuklenecek . ' Çark Çevirme Kazandınız.';
                    $database->sendMessage($session->uid, 4, 'Çark Ödülü Yüklendi', htmlspecialchars(addslashes($topic)), 0, 0, 0, 0, 0);
                    break;
                default:
                    // beklenmedik hatalar için çark iade ve iptal
                    $session->cark = $session->cark + 1;
                    $database->query('UPDATE `users` SET `cark` = ' . $session->cark . ' WHERE `username` = "' . $session->username . '"');
                    exit(json_encode(['status' => false, 'message' => "Beklenmedik Bir Hata Meydana Geldi ! "]));
                    break;
            }
            echo json_encode(['status' => true, 'odul' => "Tebrikler ! " . $secilen . " Kazandınız", 'cark' => $carkGoster[$secilen][array_rand($carkGoster[$secilen])], 'kalan' => $session->cark]);
            die();
        }
    }
}
include("application/views/html.php");
?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE messages  perspectiveBuildings <?php echo DIRECTION; ?> buildingsV3 ">
    <script type="text/javascript">
        window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
    </script>
    <div id="background">
        <div id="headerBar"></div>

        <div id="topBar">
            <?php
            include("application/views/topheader.php");
            include("application/views/toolbar.php");
            ?>
        </div>

        <div id="topBarHeroWrapper">
            <?php
            include("application/views/hero.php");
            ?>
        </div>

        <div id="bodyWrapper">
            <img style="filter:chroma();" src="/img/x.gif" id="msfilter" alt="">

            <div id="center">


                <?php include("application/views/sideinfo.php"); ?>
                <div id="contentOuterContainer" class="size1">
                    <?php include("application/views/res.php"); ?>
                    <div class="contentTitle"><a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf1.php" title="Pencereyi kapat">
                            <svg viewBox="0 0 20 20">
                                <g class="outline">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g>
                                <g class="icon">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <div class="contentContainer">
                        <div id="content" class="messages">

                            <script type="text/javascript">
                                window.addEvent('domready', function() {
                                    $$('.subNavi').each(function(element) {
                                        new Travian.Game.Menu(element);
                                    });
                                });
                            </script>

                            <?php
                            if (isset($_GET['t'])) {
                                switch ($_GET['t']) {
                                    case 1:
                                        include("application/views/hlx/cark.php");
                                        break;
                                    case 2:
                                        include("application/views/hlx/odeme.php");
                                        break;
                                    case 3:
                                        include("application/views/hlx/odeme_sonuc.php");
                                        break;
                                    case 4:
                                        echo 'SATIN ALMA İŞLEMİ BAŞARISIZ HATA : ' . $_POST['fail_message'];
                                        break;
                                    default:
                                        include("application/views/hlx/plus.php");
                                        break;
                                }
                            } else {
                                include("application/views/hlx/plus.php");
                            }
                            ?>
                            <div id="map_details">



                                <div class="clear"></div>

                            </div>

                            <div class="clear"></div>

                            <div class="clear">&nbsp;</div>
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

            <div id="ce"></div>
        </div>
</body>

</html>