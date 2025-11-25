



<?php
include("application/Account.php");  
?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
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
                <div class="contentTitle"><a id="closeContentButton" class="contentTitleButton" href="dorf<?=$session->link?>.php" title="Close window">&nbsp;</a>
                    <a id="answersButton" class="contentTitleButton" href="http://t4.answers.travian.com/index.php?aid=106#go2answer" target="_blank" title="Travian Answers">&nbsp;</a></div>

                <div class="contentContainer">
                    <div id="content" class="hero hero_adventure">
                       
				<div class="clear"></div>
		<script type="text/javascript">
					window.addEvent('domready', function()
					{
						$$('.subNavi').each(function(element)
						{
							new Travian.Game.Menu(element);
						});
					});
				</script>


<h1 class="titleInHeader">Muted</h1>
                
                
                   
               <?php
function GetIP(){  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){  
        $ip=$_SERVER['HTTP_CLIENT_IP'];  
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];  
    }else{  
        $ip=$_SERVER['REMOTE_ADDR'];  
    } 

    return $ip;  
} 

$ip 		= GetIP(); // fonksiyon ile gerçek ip adresini buluyoruz.
$access_key = "f8defbc20ae6bcb3756928c612b872db";

$ch 		= curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // curl isteği sonucu gelen verileri değişkene atıyacağımız için ekrana yazdırmayı kapatıyoruz.
$data 		= curl_exec($ch); 
$curl_put 	= curl_getinfo($ch); // istek ile karşı tarafta açılan oturumun bilgisini alıyoruz.

curl_close($ch); // bağlantıyı kapatıyoruz

if(!curl_errno($ch) and $curl_put["http_code"] == 200){ // curl üzerinde hata yoksa ve sayfaya başarılı(200) şekilde ulaşılmışsa api çalışmık demektir.
	$api_result = json_decode($data, false);
	print_r($api_result);
	echo $api_result['location']['country_flag'];
}else{
	echo "Api çalışamadı.";
}
?>
  <?php
// set IP address and API access key 
$ip = GetIP(); // fonksiyon ile gerçek ip adresini buluyoruz. normal ip yazz test et
$access_key = 'f8defbc20ae6bcb3756928c612b872db';

// Initialize CURL:
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

// Output the "capital" object inside "location"

echo $api_result['location']['country_flag'];



//{"ip": "178.170.182.63", "type": "ipv4", "continent_code": "AS", "continent_name": "Asia", "country_code": "TR", "country_name": "Turkey", "region_code": "41", "region_name": "Kocaeli", "city": "\u0130zmit", "zip": "41060", "latitude": 40.770198822021484, "longitude": 29.95949935913086, "location": {"geoname_id": 745028, "capital": "Ankara", "languages": [{"code": "tr", "name": "Turkish", "native": "T\u00fcrk\u00e7e"}], "country_flag": "https://assets.ipstack.com/flags/tr.svg", "country_flag_emoji": "\ud83c\uddf9\ud83c\uddf7", "country_flag_emoji_unicode": "U+1F1F9 U+1F1F7", "calling_code": "90", "is_eu": false}}1 https://assets.ipstack.com/flags/tr.svg

  ?>
  </tr>

  </tr></tbody></table>


                        <div class="clear">&nbsp;</div></div>							<div class="clear"></div>
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
