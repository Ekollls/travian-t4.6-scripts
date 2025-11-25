<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
			
				<div class="custom-menu">
				
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
					
	          <i class="fa fa-bars"></i>
			  
	          <span class="sr-only">Toggle Menu</span>
			  
	        </button>
        </div><br>
        <div class="logo">
            <a class="text-center logo-normal">
                <center><a href="index.php"><img src="../img/Admin/travianLogoQualification.png" style="height:67px;width:215px;"></a></center>
            </a>
        </div>
				<div class="p-4 pt-5"> 
         <ul class="list-unstyled components mb-5">
          <li><a href="index.php"><?php echo $lang['Admin']['sidebar01']; ?></a></li>
	          <li><a href="?p=acikartirma">Açık Artırma</a></li>
			  <li><a href="?p=acikartirmav1">Açık Artırmav1</a></li>
        <li><a href="?p=acikartirmatopluV1">Toplu Açık Artırma V1</a></li>
		<li><a href="?p=acikartirmatopluV2">Toplu Açık Artırma V2</a></li>
		<li><a href="?p=kafes">Açık Artırma Kafes Ekle </a></li>
          
        <li><a href="?p=depodoldur">Depoları Doldur</a></li>
		<li><a href="?p=vahadoldur">Vahaları Doldur</a></li>
	          <li><a href="?p=odemeler">Ödeme Log</a></li>
	          <li><a href="?p=cark">Hediye Çarkı</a></li>
			  <li><a href="?p=carkhakki">Çark Hakkı Ekle</a></li>
	          <li><a href="?p=paketler">Satış Paketleri</a></li>
	          <li><a href="?p=vahalaV1">Vaha Ekle V1</a></li>
			  <li><a href="?p=vahalaV2">Vaha Ekle V2</a></li>
	          <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $lang['Admin']['sidebar02']; ?></a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="?p=players"><?php echo $lang['Admin']['sidebar03']; ?></a></li>
                <li><a href="?p=online"><?php echo $lang['Admin']['sidebar04']; ?></a></li>
                <li><a href="?p=notregistered"><?php echo $lang['Admin']['sidebar05']; ?></a></li>
                <li><a href="?p=multi"><?php echo $lang['Admin']['sidebar06']; ?></a></li>
                <li><a href="../massmessage.php"><?php echo $lang['Admin']['sidebar07']; ?></a></li>
                <li><a href="?p=pmails"><?php echo $lang['Admin']['sidebar09']; ?></a></li>
                <li><a href="?p=ban"><?php echo $lang['Admin']['sidebar11']; ?></a></li>
                
	            </ul>
            </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $lang['Admin']['sidebar12']; ?></a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="?p=search"><?php echo $lang['Admin']['sidebar13']; ?></a></li>
                <li><a href="?p=message"><?php echo $lang['Admin']['sidebar14']; ?></a></li>
              </ul>
            </li>
            <li>
              <a href="#goldSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $lang['Admin']['sidebar15']; ?></a>
              <ul class="collapse list-unstyled" id="goldSubmenu">
                <li><a href="?p=gold"><?php echo $lang['Admin']['sidebar16']; ?></a></li>
                <li><a href="?p=usergold"><?php echo $lang['Admin']['sidebar17']; ?></a></li>
                <li><a href="?p=mgold"><?php echo $lang['Admin']['sidebar10']; ?></a></li>
                <li><a href="?p=recharge">recharge gold</a></li>
                <li><a href="?p=codes">gold code</a></li>
              </ul>
            </li> 
            <li>
              <a href="#impoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-setting"></i> <?php echo $lang['Admin']['sidebar18']; ?></a>
              <ul class="collapse list-unstyled" id="impoSubmenu">
                <li><a href="?p=register"><?php echo $lang['Admin']['sidebar19']; ?></a></li>
                <li><a href="?p=empoasis"><?php echo $lang['Admin']['sidebar20']; ?></a></li>
                <li><a href="?p=farms"><?php echo $lang['Admin']['sidebar21']; ?></a></li>
              </ul>
            </li> 

	          <li><a href="?p=allmsgs"><?php echo $lang['Admin']['sidebar22']; ?></a></li>
            <li>
              <a href="#settingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $lang['Admin']['sidebar23']; ?></a>
              <ul class="collapse list-unstyled" id="settingSubmenu">
                <li><a href="?p=setting"><?php echo $lang['Admin']['sidebar24']; ?></a></li>
                <li><a href="?p=natars"><?php echo $lang['Admin']['sidebar25']; ?></a></li>
                <li><a href="?p=plus"><?php echo $lang['Admin']['sidebar26']; ?></a></li>
                <li><a href="?p=payments">Operations</a></li>
                <li><a href="?p=news">List the news</a></li>
                <li><a href="?p=global"><?php echo $lang['Admin']['sidebar08']; ?></a></li>

              </ul>
            </li> 
			<li><a href="?p=install"><?php echo $lang['Admin']['sidebar35']; ?> [ Buraya Elleme ]</a></li>
	          <li><a href="?p=support">Support messages</a></li>
	          <li><a href="../dorf1.php"><?php echo $lang['Admin']['sidebar27']; ?></a></li>
	          <li><a href="../logout.php"><?php echo $lang['Admin']['sidebar28']; ?></a></li>
	        </ul>


	        <div class="footer">
            <?php $isOkay = TRUE; ?>
	        	<p><?php echo $lang['Admin']['sidebar29']; ?> <a style="color:white;" href="#">05313767818</a>.</p>
	        </div>

	      </div>
    	</nav>
