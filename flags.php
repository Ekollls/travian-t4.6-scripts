<?php
include("baglanti.php");
include("application/Account.php");

?>


<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if ($dorf1 == '') {
                                                                                                        echo 'perspectiveBuildings';
                                                                                                    } else {
                                                                                                        echo 'perspectiveResources';
                                                                                                    } ?> <?php echo DIRECTION; ?> buildingsV3">

    <div id="background" class="showWall <?= get_tribe() ?>">
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


                            <h1 class="titleInHeader">Select Country</h1>




                            <?php  /////////////////ErenZazu Farkıyla Etkinlik Başlangıcı////////////////
                            ?><br><br>
                            <div id="content" class="player">
                                <center>
                                    <form action="" method="post">
                                        <select name="country">
                                            <option value="tr">Turkey</option>
                                            <option value="de">Germany</option>
                                            <option value="ad">Andorra</option>
                                            <option value="ae">Arab Emirates</option>
                                            <option value="af">Afghanistan</option>
                                            <option value="ag">Antigua</option>
                                            <option value="ai">Anguilla</option>
                                            <option value="al">Albania</option>
                                            <option value="am">Armenia</option>
                                            <option value="an">Netherlands</option>
                                            <option value="ao">Angola</option>
                                            <option value="ar">Argentina</option>
                                            <option value="as">American Samoa</option>
                                            <option value="at">Austria</option>
                                            <option value="au">Australia</option>
                                            <option value="aw">Aruba</option>
                                            <option value="ax">Åland</option>
                                            <option value="az">Azerbaijan</option>
                                            <option value="ba">Bosnia</option>
                                            <option value="bb">Barbados</option>
                                            <option value="bd">Bangladesh</option>
                                            <option value="be">Belgium</option>
                                            <option value="bf">Burkina Faso</option>
                                            <option value="bg">Bulgaria</option>
                                            <option value="bh">Bahrain</option>
                                            <option value="bi">Burundi</option>
                                            <option value="bj">Benin</option>
                                            <option value="bl">Barthélemy</option>
                                            <option value="bm">Bermuda</option>
                                            <option value="bn">Brunei</option>
                                            <option value="bo">Bolivia</option>
                                            <option value="br">Brazil</option>
                                            <option value="bs">Bahamas</option>
                                            <option value="bt">Bhutan</option>
                                            <option value="bv">Bouvet</option>
                                            <option value="bw">Botswana</option>
                                            <option value="by">Belarus</option>
                                            <option value="bz">Belize</option>
                                            <option value="ca">Canada</option>
                                            <option value="cc">Cocos Islands</option>
                                            <option value="cd">Congo</option>
                                            <option value="cf">African</option>
                                            <option value="cg">Congo African</option>
                                            <option value="ch">Switzerland</option>
                                            <option value="ci">Côte d'Ivoire</option>
                                            <option value="ck">Cook Islands</option>
                                            <option value="cl">Chile</option>
                                            <option value="cm">Cameroon</option>
                                            <option value="cn">China</option>
                                            <option value="co">Colombia</option>
                                            <option value="cr">Costa Rica</option>
                                            <option value="cs">Serbia</option>
                                            <option value="cu">Cuba</option>
                                            <option value="cv">Cabo Verde</option>
                                            <option value="cx">Christmas</option>
                                            <option value="cy">Cyprus</option>
                                            <option value="cz">Czechia</option>
                                            <option value="dj">Djibouti</option>
                                            <option value="dk">Denmark</option>
                                            <option value="dm">Dominica</option>
                                            <option value="do">Dominican</option>
                                            <option value="dz">Algeria</option>
                                            <option value="ec">Ecuador</option>
                                            <option value="ee">Estonia</option>
                                            <option value="eg">Egypt</option>
                                            <option value="eh">Western Sahara</option>
                                            <option value="er">Eritrea</option>
                                            <option value="es">Spain</option>
                                            <option value="et">Ethiopia</option>
                                            <option value="fi">Finland</option>
                                            <option value="fj">Fiji</option>
                                            <option value="fk">Falkland</option>
                                            <option value="fm">Micronesia</option>
                                            <option value="fo">Faroe</option>
                                            <option value="fr">France</option>
                                            <option value="ga">Gabon</option>
                                            <option value="gb">United Kingdom</option>
                                            <option value="gd">Grenada</option>
                                            <option value="ge">Georgia</option>
                                            <option value="gf">French Guiana</option>
                                            <option value="gg">Guernsey</option>
                                            <option value="gh">Ghana</option>
                                            <option value="gi">Gibraltar</option>
                                            <option value="gl">Greenland</option>
                                            <option value="gm">Gambia</option>
                                            <option value="gn">Guinea</option>
                                            <option value="gp">Guadeloupe</option>
                                            <option value="gq">Equatorial Guinea</option>
                                            <option value="gr">Greece</option>
                                            <option value="gs">Georgia</option>
                                            <option value="gt">Guatemala</option>
                                            <option value="gu">Guam</option>
                                            <option value="gw">Guinea-Bissau</option>
                                            <option value="gy">Guyana</option>
                                            <option value="hk">Hong Kong</option>
                                            <option value="hm">McDonald Islands</option>
                                            <option value="hn">Honduras</option>
                                            <option value="hr">Croatia</option>
                                            <option value="ht">Haiti</option>
                                            <option value="hu">Hungary</option>
                                            <option value="id">Indonesia</option>
                                            <option value="ie">Ireland</option>
                                            <option value="il">Israel</option>
                                            <option value="im">Isle of Man</option>
                                            <option value="in">India</option>
                                            <option value="io">British Indian</option>
                                            <option value="iq">Iraq</option>
                                            <option value="ir">Iran</option>
                                            <option value="is">Iceland</option>
                                            <option value="it">Italy</option>
                                            <option value="je">Jersey</option>
                                            <option value="jm">Jamaica</option>
                                            <option value="jo">Jordan</option>
                                            <option value="jp">Japan</option>
                                            <option value="ke">Kenya</option>
                                            <option value="kg">Kyrgyzstan</option>
                                            <option value="kh">Cambodia</option>
                                            <option value="ki">Kiribati</option>
                                            <option value="km">Comoros</option>
                                            <option value="kn">Kitts and Nevis</option>
                                            <option value="kp">North Korea</option>
                                            <option value="kr">South Korea</option>
                                            <option value="kw">Kuwait</option>
                                            <option value="ky">Cayman</option>
                                            <option value="kz">Kazakhstan</option>
                                            <option value="la">Lao</option>
                                            <option value="lb">Lebanon</option>
                                            <option value="lc">Saint Lucia</option>
                                            <option value="li">Liechtenstein</option>
                                            <option value="lk">Sri Lanka</option>
                                            <option value="lr">Liberia</option>
                                            <option value="ls">Lesotho</option>
                                            <option value="lt">Lithuania</option>
                                            <option value="lu">Luxembourg</option>
                                            <option value="lv">Latvia</option>
                                            <option value="ly">Libya</option>
                                            <option value="ma">Morocco</option>
                                            <option value="mc">Monaco</option>
                                            <option value="md">Moldova</option>
                                            <option value="me">Montenegro</option>
                                            <option value="mg">Madagascar</option>
                                            <option value="mh">Marshall</option>
                                            <option value="mk">North Macedonia</option>
                                            <option value="ml">Mali</option>
                                            <option value="mm">Myanmar</option>
                                            <option value="mn">Mongolia</option>
                                            <option value="mo">Macao</option>
                                            <option value="mp">Mariana Islands</option>
                                            <option value="mq">Martinique</option>
                                            <option value="mr">Mauritania</option>
                                            <option value="ms">Montserrat</option>
                                            <option value="mt">Malta</option>
                                            <option value="mu">Mauritius</option>
                                            <option value="mv">Maldives</option>
                                            <option value="mw">Malawi</option>
                                            <option value="mx">Mexico</option>
                                            <option value="my">Malaysia</option>
                                            <option value="mz">Mozambique</option>
                                            <option value="na">Namibia</option>
                                            <option value="nc">New Caledonia</option>
                                            <option value="ne">Niger</option>
                                            <option value="nf">Norfolk Island</option>
                                            <option value="ng">Nigeria</option>
                                            <option value="ni">Nicaragua</option>
                                            <option value="nl">Netherlands</option>
                                            <option value="no">Norway</option>
                                            <option value="np">Nepal</option>
                                            <option value="nr">Nauru</option>
                                            <option value="nu">Niue</option>
                                            <option value="nz">New Zealand</option>
                                            <option value="om">Oman</option>
                                            <option value="pa">Panama</option>
                                            <option value="pe">Peru</option>
                                            <option value="pf">Polynesia</option>
                                            <option value="pg">Guinea</option>
                                            <option value="ph">Philippines</option>
                                            <option value="pk">Pakistan</option>
                                            <option value="pl">Poland</option>
                                            <option value="pm">Saint Pierre</option>
                                            <option value="pn">Pitcairn</option>
                                            <option value="pr">Puerto Rico</option>
                                            <option value="ps">Palestine</option>
                                            <option value="pt">Portugal</option>
                                            <option value="pw">Palau</option>
                                            <option value="py">Paraguay</option>
                                            <option value="qa">Qatar</option>
                                            <option value="re">Réunion</option>
                                            <option value="ro">Romania</option>
                                            <option value="rs">Serbia</option>
                                            <option value="ru">Russia</option>
                                            <option value="rw">Rwanda</option>
                                            <option value="sa">Saudi Arabia</option>
                                            <option value="sb">Solomon Islands</option>
                                            <option value="sc">Seychelles</option>
                                            <option value="sd">Sudan</option>
                                            <option value="se">Sweden</option>
                                            <option value="sg">Singapore</option>
                                            <option value="sh">Saint Helena</option>
                                            <option value="si">Slovenia</option>
                                            <option value="sj">Svalbard</option>
                                            <option value="sk">Slovakia</option>
                                            <option value="sl">Sierra Leone</option>
                                            <option value="sm">San Marino</option>
                                            <option value="sn">Senegal</option>
                                            <option value="so">Somalia</option>
                                            <option value="sr">Suriname</option>
                                            <option value="st">Sao Tome</option>
                                            <option value="sv">El Salvador</option>
                                            <option value="sy">Syria</option>
                                            <option value="sz">Eswatini</option>
                                            <option value="tc">Turkmenistan</option>
                                            <option value="td">Chad</option>
                                            <option value="tf">French Southern</option>
                                            <option value="tg">Togo</option>
                                            <option value="th">Thailand</option>
                                            <option value="tj">Tajikistan</option>
                                            <option value="tk">Tokelau</option>
                                            <option value="tl">Timor-Leste</option>
                                            <option value="tm">Turkmenistan</option>
                                            <option value="tn">Tunisia</option>
                                            <option value="to">Tonga</option>
                                            <option value="tt">Trinidad and Tobago</option>
                                            <option value="tv">Tuvalu</option>
                                            <option value="tw">Taiwan</option>
                                            <option value="tz">Tanzania</option>
                                            <option value="ua">Ukraine</option>
                                            <option value="ug">Uganda</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="um">USA Islands</option>
                                            <option value="us">United States</option>
                                            <option value="uy">Uruguay</option>
                                            <option value="uz">Uzbekistan</option>
                                            <option value="va">Vatican City</option>
                                            <option value="vc">Saint Vincent</option>
                                            <option value="ve">Venezuela</option>
                                            <option value="vg">Virgin Islands</option>
                                            <option value="vi">Virgin Islands(U.S.)</option>
                                            <option value="vn">Viet Nam</option>
                                            <option value="vu">Vanuatu</option>
                                            <option value="wf">Wallis</option>
                                            <option value="ws">Samoa</option>
                                            <option value="ye">Yemen</option>
                                            <option value="yt">Mayotte</option>
                                            <option value="za">South Africa</option>
                                            <option value="zm">Zambia</option>
                                            <option value="zw">Zimbabwe</option>
                                        </select>
                                        <input type="submit" value="Select" name="yolla">
                                    </form>
                                    <?php
                                    if (isset($_POST['yolla'])) {
                                        $database->query("UPDATE users SET location = '" . $_POST['country'] . "' WHERE id = '" . $session->uid . "'");
                                        echo 'Your flag has been selected.';
                                        header("refresh:1;dorf1.php");
                                    }
                                    ?>
                                </center>
                                <br><br>
                                <center><b>Türkiye'den farklı bir ülke seçerseniz oyunu ingilizce oynamak zorunda kalırsınız!</b></center>
                                <br><br>
                                <center><b>If you choose Turkey, you will have to play the game in Turkish!</b></center>






                                <div class="clear">&nbsp;</div>
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