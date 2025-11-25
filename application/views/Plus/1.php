<?php
include("Templates/Plus/pmenu.php");$extragoud="0";
$_SESSION['email']=$session->email;
?>

<style>
    .tdc{text-align:center;}
</style>
<h1>Altın al</h1>
 <div class="questAchievementContainer">
<button class="green" type="submit" name="comprar gold" value="Buy Gold" onclick="javascript: Travian.Game.Payment('AUS');"></button>
<button onclick="javascript: Travian.Game.Payment('AUS');" class="green questButtonOverviewAchievements" id="" value="Buy Gold" type="submit">
                            <div class="button-container addHoverClick ">
                                <div class="button-background">
                                    <div class="buttonStart">
                                        <div class="buttonEnd">
                                            <div class="buttonMiddle"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-content">Satın Al</div>
                            </div>
                        </button>

</div>
       