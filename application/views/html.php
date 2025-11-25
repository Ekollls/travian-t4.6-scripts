<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="mainLayout">

<head>
    <title><?= SERVER_NAME ?></title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="content-language" content="en-US" />
    <meta name="viewport" content="width=device-width" />
    <meta name="content-language" content="<?php echo LANG_UR; ?>" />

    <link href="gpack/mainPage/lang/en-US/compact-2b0e58ae.min.css" rel="stylesheet" type="text/css" />
    <link href="gpack/mainPage/lang/en-US/lang.css" rel="stylesheet" type="text/css" />
    <link href="gpack/mainPage/lang/fixes.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <script type="text/javascript" src="js/default/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/default/jquery.md5.min.js"></script>
    <script type="text/javascript" src="js/default/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="js/default/d3/d3.min.js"></script>
    <script type="text/javascript" src="js/default/d3/d3pie.min.js"></script>
    <script type="text/javascript" src="js/default/gsap/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/default/gsap/minified/plugins/MorphSVGPlugin.min.js"></script>
    <script type="text/javascript" src="js/Game/General/General.js"></script>

    <script type="text/javascript">
		var j$ = $.noConflict();
	</script>
    <script type="text/javascript">
        window.TravianDefaults = {
           Map: { Size: { width: 801, height: 801, left: -400, right: 400, bottom: -400, top: 400 } }
        };
        function getMapSize() {return 400;}
        function getAutoReloadStatus(){return 1;}
    </script>

    <script type="text/javascript" src="crypt.js"></script>
    <!--    <script type="text/javascript" src="crypt-v3-decompressed.js"></script>-->
    <script type="text/javascript">
        jQuery(window).on("paymentWizardOnCloseEvent", function(c) {
            $("body").css("overflow", "");
        });
        jQuery(window).on('startPaymentWizard', function() {
            $("body").css("overflow", "hidden");
        });
    </script>

    <script type="text/javascript">
        Travian.Translation.add({
            'allgemein.anleitung': '<?php echo $lang['Manual']['Instructions']; ?>',
            'allgemein.cancel': 'Cancel',
            'allgemein.ok': 'OK',
            'allgemein.close': '<?php echo $lang['Daily']['Close']; ?>',
            'cropfinder.keine_ergebnisse': 'There are no results'
        });
        Travian.applicationId = 'T4.4 Game';
        Travian.Game.version = '4.4';
        Travian.Game.worldId = '<?= SERVER_NAME ?>';
        Travian.Game.speed = <?= SPEED ?>;
        Travian.Templates = {};
        Travian.Templates.ButtonTemplate = '<button ><div class="button-container addHoverClick"><div class="button-background"><div class="buttonStart"><div class="buttonEnd"><div class="buttonMiddle"></div></div></div></div><div class="button-content"></div></div></button>';
        //Travian.Templates = {"ButtonV1": "<button >\n\t<\/button>\n","ButtonV2": "<button >\n\t<div>\n\t\t\t<\/div>\n<\/button>\n","DialogV1": "<div class=\"dialogOverlay\">\n    <div class=\"dialogWrapper dialogV1\" data-context=\"\">\n        <div class=\"dialog\">\n            <div class=\"dialogContainer\">\n                <div class=\"dialogContents\">\n                    <form action=\"?\" method=\"get\" accept-charset=\"UTF-8\">\n                        <div class=\"dialogDragBar\"><\/div>\n                        <div class=\"iconButton small info\"><\/div>\n                        <div class=\"dialogCancelButton iconButton small cancel\"><\/div>\n                        <div class=\"title\"><\/div>\n                        <div class=\"content\" id=\"dialogContent\"><\/div>\n                        <div class=\"buttons\"><\/div>\n                    <\/form>\n                <\/div>\n            <\/div>\n        <\/div>\n    <\/div>\n<\/div>\n","DialogV2": "<div class=\"dialogOverlay\">\n    <div class=\"dialogWrapper dialogV2\" data-context=\"\">\n        <div class=\"dialog\">\n            <div class=\"dialogContainer\">\n                <div class=\"dialogContents\">\n                    <form action=\"?\" method=\"get\" accept-charset=\"UTF-8\">\n                        <div class=\"dialogDragBar\"><\/div>\n                        <div class=\"iconButton buttonFramed green withIcon rectangle info\"><\/div>\n                        <div class=\"dialogCancelButton iconButton buttonFramed green withIcon rectangle cancel\" title=\"Close\">\n                            <svg viewBox=\"0 0 20 20\"><g class=\"outline\">\n  <path d=\"M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z\"><\/path>\n<\/g><g class=\"icon\">\n  <path d=\"M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z\"><\/path>\n<\/g><\/svg>\n                        <\/div>\n                        <div class=\"title\"><\/div>\n                        <div class=\"content\" id=\"dialogContent\"><\/div>\n                        <div class=\"buttons\"><\/div>\n                    <\/form>\n                <\/div>\n            <\/div>\n        <\/div>\n    <\/div>\n<\/div>\n"};

        Travian.Game.eventJamHtml = '<a href="http://t4.answers.travian.ir/index.php?aid=249#go2answer" target="blank" title="پاسخ‌های تراوین"><span class="c0 t">0:00:0</span>?</a>';
        Travian.Form.UnloadHelper.message = 'You have made changes. Do you really want to leave this page?';
        Travian.Game.Preferences.initialize({
            "highlightsToggle": true,
            "travian_toggle_hero": "expanded",
            "travian_toggle_infobox": "expanded",
            "travian_toggle_villagelist": "collapsed",
            "travian_toggle_alliance": "expanded",
            "merchantsOnTheWayFilter": "",
            "allianceBonusesOverview": "{\"bonusInfo0\":false,\"bonusInfo1\":false,\"bonusInfo2\":false,\"bonusInfo3\":false}",
            "WMBlueprints": "[]",
            "buildingDescriptionCollapsed": false
        });
    </script>
</head>
<script type="text/javascript">
    window.ajaxToken = '765784eba4d5b4156277301c5674432faca910fc';
    window._player_uuid = '';
    Travian.Game.Preferences.initialize({
        "highlightsToggle": "true",
        "travian_toggle_hero": "expanded",
        "travian_toggle_infobox": "expanded",
        "travian_toggle_villagelist": "collapsed",
        "travian_toggle_alliance": "expanded",
        "WMBlueprints": "[]",
        "QuestDialogPosition": "{\"position\":null,\"preferenceKey\":\"QuestDialogPosition\"}"
    });
    Travian.Game.Quest.init();
</script>
<?php
// add get_tribe function for all body content
function get_tribe()
{
    global $session;

    switch ($session->tribe) {
        case 1:
            return "roman";
        case 2:
            return "teuton";
        case 3:
            return "gaul";
        case 6:
            return "egyptian";
        case 7:
            return "hun";
    }
}
?>