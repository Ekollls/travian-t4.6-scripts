<?php
$start_time = time();
$timelimit = 2;

$troopStarvesEvery = 1;
$ncrop = 0;

$wood = round(($village->awood * 100) / $village->maxstore);
$clay = round(($village->aclay * 100) / $village->maxstore);
$iron = round(($village->airon * 100) / $village->maxstore);
$crop = round(($village->acrop * 100) / $village->maxcrop);

?>

<div id="stockBar">
    <div class="warehouse">
        <div class="capacity" title="Warehouse">
            <i class="warehouse_medium"></i>
            <div class="value" style="font-size: 9px;"><?= $village->maxstore ?></div>
        </div>
        <a class="stockBarButton" href="/production.php?t=1" title="<?= WOOD ?>||<?= PROD_HEADER ?> : <?php echo $village->getProd("wood"); ?>&lt;br&gt;Click for more information">
            <i class="lumber_small"></i>
            <svg class="productionBoost" viewBox="0 0 15 15">
                <path d="M5 0L5 5L0 5L0 10L5 10L5 15L10 15L10 10L15 10L15 5L10 5L10 0Z"></path>
            </svg>
            <div id="l1" style="font-size: 9px;" class="value"><?php echo round($village->awood); ?></div>
            <div class="barBox">
                <div id="lbar1" class="bar stock" style="width: <?php echo round($village->awood) / $village->maxstore * 100; ?>%;"></div>
            </div>
        </a>
        <a class="stockBarButton" href="/production.php?t=2" title="<?= CLAY ?>||<?= PROD_HEADER ?> : <?php echo $village->getProd("clay"); ?>&lt;br&gt;Click for more information">
            <i class="clay_small"></i>
            <svg class="productionBoost" viewBox="0 0 15 15">
                <path d="M5 0L5 5L0 5L0 10L5 10L5 15L10 15L10 10L15 10L15 5L10 5L10 0Z"></path>
            </svg>
            <div id="l2" style="font-size: 9px;" class="value"><?php echo round($village->aclay); ?></div>
            <div class="barBox">
                <div id="lbar2" class="bar stock" style="width:<?php echo round($village->aclay) / $village->maxstore * 100; ?>%;"></div>
            </div>
        </a>
        <a class="stockBarButton" href="/production.php?t=3" title="<?= IRON ?>||<?= PROD_HEADER ?> : <?php echo $village->getProd("iron"); ?>&lt;br&gt;Click for more information">
            <i class="iron_small"></i>
            <svg class="productionBoost" viewBox="0 0 15 15">
                <path d="M5 0L5 5L0 5L0 10L5 10L5 15L10 15L10 10L15 10L15 5L10 5L10 0Z"></path>
            </svg>
            <div id="l3" style="font-size: 9px;" class="value"><?php echo round($village->airon); ?></div>
            <div class="barBox">
                <div id="lbar3" class="bar stock" style="width: <?php echo round($village->airon) / $village->maxstore * 100; ?>%;"></div>
            </div>
        </a>
    </div>
    <div class="granary">
        <div class="capacity">
            <i class="granary_medium"></i>
            <div class="value" style="font-size: 9px;"><?= $village->maxcrop ?></div>
        </div>
        <a class="stockBarButton" href="/production.php?t=4" title="<?= CROP ?>||<?= PROD_HEADER ?> : <?php echo $village->getProd("crop"); ?>&lt;br&gt;Click for more information">
            <i class="crop_medium"></i>
            <svg class="productionBoost" viewBox="0 0 15 15">
                <path d="M5 0L5 5L0 5L0 10L5 10L5 15L10 15L10 10L15 10L15 5L10 5L10 0Z"></path>
            </svg>
            <div id="l4" style="font-size: 9px;" class="value "><?php echo round($village->acrop); ?></div>
            <div class="barBox">
                <div id="lbar4" class="bar stock" style="width: <?php echo round($village->acrop) / $village->maxcrop * 100; ?>%;"></div>
            </div>
        </a>
        <?php
        $totalproduction = $village->allcrop; // all crops + bakery + grain mill
        $crop = floor($village->acrop);
        ?>
        <a class="stockBarButton" href="/production.php?t=5" title="Free crop for further buildings.||Crop balance: <?php echo $totalproduction; ?><br>Click here for more information">
            <i class="freeCrop_medium"></i>
            <div id="stockBarFreeCrop" style="font-size: 8px;" class="value"><?php echo $totalproduction; ?></div>
        </a>
    </div>
</div>





<script type="text/javascript">
    var resources = {};

    resources.production = {
        "l1": <?php echo $village->getProd("wood"); ?>,
        "l2": <?php echo $village->getProd("clay"); ?>,
        "l3": <?php echo $village->getProd("iron"); ?>,
        "l4": <?php echo $village->getProd("crop"); ?>,
        "l5": <?php echo($village->allcrop); ?>    };
    resources.storage = {
        "l1": <?php echo $village->awood; ?>,
        "l2": <?php echo $village->aclay; ?>,
        "l3": <?php echo $village->airon; ?>,
        "l4": <?php echo $village->acrop; ?>    };
    resources.maxStorage = {
        "l1": <?php echo $village->maxstore; ?>,
        "l2": <?php echo $village->maxstore; ?>,
        "l3": <?php echo $village->maxstore; ?>,
        "l4": <?php echo $village->maxcrop; ?>    };

    // $$('li.stockBarButton').each(function (element) {
    //     Travian.addMouseEvents(element, element);
    // });

    // var stockBarWarehouse = $('stockBarWarehouse');
    // var stockBarGranary = $('stockBarGranary');
    // var stockBarFreeCrop = $('stockBarFreeCrop');
    // var numberFormatter = new Travian.Formatter({forceDecimal: false});
    //
    // stockBarWarehouse.set('html', numberFormatter.getFormattedNumber(parseInt(stockBarWarehouse.get('html'))));
    // stockBarGranary.set('html', numberFormatter.getFormattedNumber(parseInt(stockBarGranary.get('html'))));

</script>