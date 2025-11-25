<?php
include("baglanti.php");
include("application/Account.php");  
 
?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV1">
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


<h1 class="titleInHeader">Inventory</h1>
                
                
                   
                <?
                
if(isset($_GET['id'])){
  $id = preg_replace("/[^a-zA-Z0-9_-]/", "", $_GET['id']);
} 
else $id = "";
                
                  $MyGold2 = mysqli_query($connection,"SELECT * FROM kasalar WHERE `envanter`='1'");
                  $mykasa = mysqli_fetch_array($MyGold2);		
                  
                  
                  $MyGold2 = mysqli_query($connection,"SELECT * FROM users WHERE `id`='".$session->uid."'");
                  $mykasa2 = mysqli_fetch_array($MyGold2);
                  
                  $listele_sql = mysqli_query($connection,"SELECT * FROM users WHERE envantersay >= '0' ORDER BY envantersay DESC LIMIT 3");
                $img = '<img src="" style="height:1px;"'; 
?>
  
  <style>
  button.trav_buttons {
  width: 130px;
  margin-top: 5px;
  text-align: center;
  color: #fff;
  font-size: 14px;
  border: 1px solid #283308;
  background-image: linear-gradient(to bottom,#7cb029,#587c1e);
  box-shadow: inset 2px 0 1px -1px #4b6f19, inset -2px 0 1px -1px #4b6f19, inset 0 3px 1px -1px #b5e251, inset 0 -3px 1px -1px rgb(44 75 12 / 60%);
}
div.player table td, div.player table th {
  padding: 2px7px;
}

table thead th, table tfoot th {
  font-weight: bold;
}
table thead th, table tfoot th {
  padding: 4px10px;
  background-color: #e0ebdf;
  border-radius: 4px;
  margin-bottom: 12px;
  text-align: center;
}
  </style>
<style>
table td, table th {
  font-size: 17px;
  font-weight: normal;
  color: #000;
}
table td, table th {
  padding: 5px;
  vertical-align: middle;
}
td {
  display: table-cell;
  vertical-align: inherit;
}</style>

<?
if($id >= 0){
  include ("application/views/Envanter/altinbildir.tpl");
}
?>
<center><font size="2px"><strong>Hello, <? echo $session->username; ?> Number of Cases You Have Opened: (<? echo $mykasa2['envantersay']; ?>)</strong></font>
<div style="text-align: center">
</div>
<th colspan="3"><img src="./gpack/yilmaz/mainPage/img_ltr/oyun/piy.png" style="width:500px;height:25px;"><br><font size="3px"><b>When you vote, you win a case.</b></font></th>
<table id="plus_features" class="features" cellpadding="1" cellspacing="1" style="background-color: #6c9924;
  text-align: left;border-collapse: separate;
  empty-cells: show;
  /* line-height: 20px; */
  width: 70%;
  height: 65px;color: #fff;">
<thead><tr>

</tr></thead>
  <?
                          while($yaz = mysqli_fetch_array($listele_sql))
                              {
                                  
                                  
          foreach($listele_sql as $uye){
          $sira++;				
  ?><tbody><tr>
  </tr>
  <tr>
  
  </tr>
  <tr>
  <td class="preview"><? if($sira == 1){ echo '<img src="./gpack/yilmaz/mainPage/img_ltr/oyun/siralama/1.png">'; }  if($sira == 2){ echo '<img src="./gpack/yilmaz/mainPage/img_ltr/oyun/siralama/2.png">'; } if($sira == 3){ echo '<img src="./gpack/yilmaz/mainPage/img_ltr/oyun/siralama/3.png">'; } ?></td>
      <td class="preview"><a href="spieler.php?uid=<? echo $uye['id']; ?>"><? echo $uye['username']; ?></a></td>
      
      <td class="text"><strong><? echo'Number of Cases Opened: '.$uye['envantersay'].'</strong></td>';
      
      
      
                              }}
?>
  </tr>

  </tr></tbody></table>



<br />


<tr>

<?
$MyGold = mysqli_query($connection, "SELECT * FROM users WHERE `id`='".$session->uid."'");
                  $my = mysqli_fetch_array($MyGold);
                  
$listele_sql = mysqli_query($connection,"SELECT * FROM kasalar WHERE id > '0' ORDER BY id ASC LIMIT 100");
                          
  $sorgu3 = mysqli_query($connection,"SELECT * FROM kasalar WHERE id > '0'"); 
      
      $kasa = mysqli_fetch_array($sorgu3); 						
                                       
                          while($yaz = mysqli_fetch_array($listele_sql))
                              {

    $envanterkac = $yaz['envanter'];
    $envanterkacc = $my['envanter'.$yaz['envanter'].''];
?>
<button class="trav_buttons" onclick="window.location.href = '<? echo "kasaac.php?id=".$yaz["11"].""; ?>';"><? echo''.$img.' title="<b><center>'.$yaz['kasadi'].'</b><br><br>To your city '.number_format($yaz['odun']*SPEED).' Wood, '.number_format($yaz['tugla']*SPEED).' Clay, '.number_format($yaz['demir']*SPEED).' Iron '.number_format($yaz['tahil']*SPEED).' Crop ';

if($yaz['altinver'] > 0){
          echo '<center><b>+ 1 to 5 gold and +'.$yaz['hayvan'].' of each oasis soldier type</b>';
      }

echo '<center>Wins.';

if($yaz['goldclub'] > 0){
    echo '<br><br><center><b>Gold Club Gift!</b>';
}

echo '<br><br>Click to open."><br>there are '; echo $envanterkacc; ?></button>
<?
}
?>
</tr>
</table>

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
