<?php
if(isset($_POST['vid']) && (!is_numeric($_POST['vid']) || !in_array($_POST['vid'],array(1,2,3,6,7)))){
    
}
if(isset($_POST['sector']) &&  !in_array($_POST['sector'],array('no','nw','sw','so'))){
	//echo $_POST['sector']; die();
	
    die('lol wat');
}
//error_reporting(0);
include("application/Account.php");

if(!count($database->query("SELECT id FROM activate where `username`='".$_SESSION['username']."'")) || !isset($_SESSION['username'])){
  if(!isset($_SESSION['username'])){
      die("Hesabınızı yeniden etkinleştirme işlemini tamamlayın veya etkinleştirmeyi kaldırın ve yeniden kaydolun.");
  }else{
      die("Hesap zaten etkinleştirildi veya kayıt yaptırılmadı.");
  }
}

if (isset($_POST['vid']) && in_array($_POST['vid'],array(1,2,3,6,7))) {
	$t=$_POST['vid'];
    $p=array('t'=>$t);
	$database->query("UPDATE activate set tribe=:t where `username`='".$_SESSION['username']."'",$p);
}
if (isset($_POST['sector'])) {
	switch($_POST['sector']) {
		default: $sector = "1"; break;
		case "no": $sector = "3"; break;
		case "nw": $sector = "4"; break;
		case "sw": $sector = "1"; break;
		case "so": $sector = "2"; break;
	}
$p=array('s'=>$sector);
    $database->query("UPDATE activate set location=:s where `username`='".$_SESSION['username']."'",$p);
	$account->Activate();

	header("Location: dorf1.php");

}

$ta = array(array(first_page_tribe2_lead,first_page_tribe2),array(first_page_tribe1_lead,first_page_tribe1),array(first_page_tribe3_lead,first_page_tribe3));
$tr_loc=$database->query("SELECT tribe,location FROM activate where `username`='".$_SESSION['username']."'");
$tribe = $tr_loc[0]['tribe'];
$location = $tr_loc[0]['location'];


if($tribe>0 && !isset($_GET['ct'])) {
	if (!$location>0) {
		$page = 2; 
		$title = first_page_second_step_desc1;
	}else{
		//$page = 3;
		//$title = "شما آماده بازی هستید!";
		if (!isset($_GET['ct'])) {
		//	header("Location: dorf1.php");
		}
	}
}else{
	$page = 1;
	$title = first_desc1;
}



?>
<!DOCTYPE html>
<html>
<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE activate  perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV1">
<div id="background">

<div id="bodyWrapper">
<div id="header">
    <div id="mtop">
        <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
        <div class="clear"></div>
    </div>
</div>
<div id="center">
<?php include('application/views/menu.php');?>
<div id="contentOuterContainer" class="size1">
                    <div class="contentTitle">&nbsp;</div>
                    <div class="contentContainer">
                        <div id="content" class="activate">
                        
<h1 class="titleInHeader" style="margin-left: 171px;
    width: 600px;"><?php echo $title;?></h1>
<!--- CONTENT ---->
<?php
switch($page) {
	case 1: {
		// tribe selection
		?>

<h1 class="titleInHeader">إختيار القبيلة</h1>

<div class="activationScreen">
<?=first_desc2?>
	<form method="post" action="first.php">
        <div id="presentation">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 250">
                <filter id="inset" x="0" y="0">
                    <feGaussianBlur stdDeviation="20" result="blur"></feGaussianBlur>
                    <feComposite in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowDiff"></feComposite>
                    <feFlood flood-color="#bb8050"></feFlood>
                    <feComposite in2="shadowDiff" operator="in"></feComposite>
                    <feComposite in2="SourceGraphic" operator="over" result="firstfilter"></feComposite>
                    <feFlood flood-color="#bb8050"></feFlood>
                    <feComposite in2="shadowDiff" operator="in"></feComposite>
                    <feComposite in2="firstfilter" operator="over" result="secondfilter"></feComposite>
                    <feFlood flood-color="#bb8050"></feFlood>
                    <feComposite in2="shadowDiff" operator="in"></feComposite>
                    <feComposite in2="secondfilter" operator="over"></feComposite>
                </filter>
                <g class="descriptionBoxWithArrow">
                    <path class="outer" d="M10 10 V230 H345.20028200282 l20 20 l20 -20 H530 V10 Z" data-original="M10 10 V230 H20 l20 20 l20 -20 H530 V10 Z"></path>
                    <path class="inner" filter="url(#inset)" d="M10 10 V230 H345.20028200282 l20 20 l20 -20 H530 V10 Z" data-original="M10 10 V230 H20 l20 20 l20 -20 H530 V10 Z"></path>
                </g>
            </svg>

            <div id="tribeSelectors">
                <input type="radio" name="vid" value="3" id="tribe3" checked="checked">
                <label class="selector" for="tribe3"></label>
                <div class="tribeDescription" data-text="أوصيت لاعبين جدد">
                    <h2>الإغريق</h2>
                    <ul>
                                                    <li>متطلبات الوقت منخفض</li>
                                                    <li>حماية الموارد وقوة الدفاع</li>
                                                    <li>اسرع الفرسان بين القبائل</li>
                                                    <li>ينصح بها للاعبين الجدد </li>
                                            </ul>
                </div>
                <input type="radio" name="vid" value="1" id="tribe1">
                <label class="selector" for="tribe1"></label>
                <div class="tribeDescription">
                    <h2>الرومان</h2>
                    <ul>
                                                <li>متطلبات الوقت معتدل</li>
                                                <li>يمكن تطوير القرى بسرعة</li>
                                                <li>قوات قوية جداً ولاكن مكلفة</li>
                                                <li>لا ينصح بها للاعبين الجدد</li>
                                            </ul>
                </div>
                <input type="radio" name="vid" value="2" id="tribe2">
                <label class="selector" for="tribe2"></label>
                <div class="tribeDescription">
                    <h2>الجرمان</h2>
                    <ul>
                                                    <li>متطلبات الوقت عالي</li>
                                                    <li>ممتازة في النهب بالبداية</li>
                                                    <li>قوية , مشاة رخيصة الثمن</li>
                                                    <li>للاعبين المحاربين</li>
                                            </ul>
                </div>
                
                <input type="radio" name="vid" value="6" id="tribe6">
                    <label class="selector" for="tribe6" data-text="جديد"></label>
                    <div class="tribeDescription">
                        <h2>المصريين</h2>
                        <ul>
                                                            <li>وقت تدريب أقل</li>
                                                            <li>حمولة موارد أكبر</li>
                                                            <li>وحدات دفاع هائلة</li>
                                                            <li>جيدة للاعبين الجدد</li>
                                                    </ul>
                    </div>
                                                    <input type="radio" name="vid" value="7" id="tribe7">
                    <label class="selector" for="tribe7" data-text="جديد"></label>
                    <div class="tribeDescription">
                        <h2>المغول</h2>
                        <ul>
                                                            <li>متطلبات الوقت عالي</li>
                                                            <li>فرسان قوية جدا مقارنة بالقبائل الأخري</li>
                                                            <li>دفاع أقل من المعتاد</li>
                                                            <li>لا ينصح بها للاعبين الجدد!</li>
                                                    </ul>
                    </div>

                                            </div>
        </div>
        <div class="buttonContainer">
            <button type="submit" value="تأكيد" id="buttonE1" class="orange ">
                <div class="button-container addHoverClick">
                    <div class="button-background">
                        <div class="buttonStart">
                            <div class="buttonEnd">
                                <div class="buttonMiddle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="button-content">تأكيد</div>
                </div>
            </button>
            <script type="text/javascript" id="buttonE1_script">
                jQuery(function() {
                        jQuery('#buttonE1').click(function (event) {
                            jQuery(window).trigger('buttonClicked', [this, {"type":"submit","value":"تأكيد","name":"","id":"buttonE1","class":"orange ","title":"","confirm":"","onclick":""}]);
                        });
                });
            </script>
        </div>
    </form>
</div>
<script type="text/javascript">
    jQuery(function() {
        new Travian.Game.Activation();
        //Travian.Game.WelcomeScreen.show();
    });
</script>
<?php
		
		
		break;
	}
	case 2: {
		// location selection
		?>
        
        
		<div class="activationScreen">
    اين تريد البدء في بناء إمبراطوريتك ? إستخدم "الموصى بها" للمواقع المثالية . او حدد المنطقة حيث يقع إصدقائك واعضاء فريقك !    
	<form method="post" action="first.php">
        <div id="presentation" class="sectors">
            <div id="activationMapContainer">
                <div id="map" class="">
                    
                    <input type="radio" name="sector" value="nw" id="sector_nw">
                    <label for="sector_nw">الشمال الغربي</label>

                    <input type="radio" name="sector" value="no" id="sector_no" checked="checked">
                    <label for="sector_no" data-text="موصى بها">الشمال الشرقي</label>

                    <input type="radio" name="sector" value="sw" id="sector_sw">
                    <label for="sector_sw">الجنوب الغربي</label>

                    <input type="radio" name="sector" value="so" id="sector_so">
                    <label for="sector_so">الجنوب الشرقي</label>
                </div>
            </div>
        </div>

        <div class="buttonContainer">
            <button type="submit" value="تأكيد" id="buttone1" class="orange ">
                <div class="button-container addHoverClick">
                    <div class="button-background">
                        <div class="buttonStart">
                            <div class="buttonEnd">
                                <div class="buttonMiddle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="button-content">تأكيد</div>
                </div>
            </button>
            <script type="text/javascript" id="buttone1_script">
                jQuery(function() {
                        jQuery('#buttone1').click(function (event) {
                            jQuery(window).trigger('buttonClicked', [this, {"type":"submit","value":"تأكيد","name":"","id":"buttone1","class":"orange ","title":"","confirm":"","onclick":""}]);
                        });
                });
            </script>

        </div>

    </form>
</div>
        
        <?php
		
		
		
		
		break;
	}

}
?>


                            <div class="clear">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="contentFooter">&nbsp;</div>
                </div>

</div>
<?php include("application/views/footer.php"); ?>

</div>
</div>
			<div id="ce"></div>
														</div>


			</body>
</html>