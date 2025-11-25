<div id="footer" class="size1">
<div id="pageLinks">
        <a href="https://newtravian.com" target="_blank"><?= $lang['Footer']['Homepage']; ?></a>
        <a href="#" target="_blank"><?= $lang['Footer']['Forum']; ?></a>
        <a href="https://newtravian.com" target="_blank"><?= $lang['Footer']['Links']; ?></a>
        <a href="#" target="_blank"><?= $lang['Footer']['FAQ']; ?></a>
        <a href="#" target="_blank"><?= $lang['Footer']['Terms']; ?></a>
        <a href="#" target="_blank"><?= $lang['Footer']['Imprint']; ?></a>
        <div class="clear"></div>
    </div>
    <br>
    <p class="copyright" style="direction:ltr;">© 2007 - 2023 NewTravian Games GmbH</p>
    <br>
</div>
<div id="servertime" class="stime">
    <?php echo SERVER_TIME; ?>&nbsp;
    <span class="timer" counting="up" value="<?php echo time(); ?>"><?php echo date('H:i:s'); ?></span>
</div>

