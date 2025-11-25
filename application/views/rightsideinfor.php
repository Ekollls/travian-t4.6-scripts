<?php
$baracks = "disabled";
$workshop = "disabled";
$stable = "disabled";
$market_ = "disabled";
$builds = $village->resarray;
for ($i = 19; $i <= 40; $i++) {
	if ($builds['f' . $i . 't'] == 19) {
		$baracks = "";
		$bid = $i;
	}
	if ($builds['f' . $i . 't'] == 21) {
		$workshop = "";
		$wid = $i;
	}
	if ($builds['f' . $i . 't'] == 20) {
		$stable = "";
		$sid = $i;
	}
	if ($builds['f' . $i . 't'] == 17) {
		$market_ = "";
		$mid = $i;
		$lvlm = $builds['f' . $i];
	}
}
?>
<div id="sidebarAfterContent" class="sidebar afterContent">
	<div class="sidebarBoxWrapper">
		<div id="sidebarBoxActiveVillage" class="sidebarBox   ">
			<div class="header">
				<div class="buttonsWrapper">
					<a class="layoutButton buttonFramed withIcon round market green withIcon <?php echo $market_ ?>" id="buttonZ13" href="<?php if ($market_ == "" && $session->plus) {
																																				echo "build.php?id=" . $mid;
																																			} else {
																																				echo "#";
																																			} ?>">
						<svg viewBox="0 0 20.21 18" class="market">
							<g class="outline">
								<path d="M17.12 7L17 3.43h1V2h-6V1h-1V0H9v1H8v1H2v1.43h1L2.92 6.9C1.89 7.47 0 8.71 0 10.14a3.58 3.58 0 1 0 7.15 0c0-1.47-2-2.74-3-3.29L4 3.43h5V15H8v1H6v1H5v1h10v-1h-1v-1h-2v-1h-1V3.43h5L15.9 7c-1 .54-3 1.81-3 3.29a3.67 3.67 0 0 0 3.75 3.5 3.75 3.75 0 0 0 3.57-3.57c-.01-1.49-2.07-2.66-3.1-3.22zm-3.58 3.2c0-1 1.59-1.85 2.46-2.24.32-.15.55-.23.55-.23s.26.1.63.27c.87.4 2.36 1.24 2.36 2.2 0 1.37-6 1.37-6 0zm-13 0C.53 9.21 2.11 8.35 3 8c.33-.15.55-.23.55-.23s.26.1.63.27c.88.4 2.37 1.24 2.37 2.2-.02 1.33-6.02 1.33-6.02-.04z"></path>
							</g>
							<g class="icon">
								<path d="M17.12 7L17 3.43h1V2h-6V1h-1V0H9v1H8v1H2v1.43h1L2.92 6.9C1.89 7.47 0 8.71 0 10.14a3.58 3.58 0 1 0 7.15 0c0-1.47-2-2.74-3-3.29L4 3.43h5V15H8v1H6v1H5v1h10v-1h-1v-1h-2v-1h-1V3.43h5L15.9 7c-1 .54-3 1.81-3 3.29a3.67 3.67 0 0 0 3.75 3.5 3.75 3.75 0 0 0 3.57-3.57c-.01-1.49-2.07-2.66-3.1-3.22zm-3.58 3.2c0-1 1.59-1.85 2.46-2.24.32-.15.55-.23.55-.23s.26.1.63.27c.87.4 2.36 1.24 2.36 2.2 0 1.37-6 1.37-6 0zm-13 0C.53 9.21 2.11 8.35 3 8c.33-.15.55-.23.55-.23s.26.1.63.27c.88.4 2.37 1.24 2.37 2.2-.02 1.33-6.02 1.33-6.02-.04z"></path>
							</g>
						</svg>
					</a>
					<!--                    <script type="text/javascript" id="buttonZ13_script">-->
					<!--                        jQuery('#buttonZ13').click(function (event) {-->
					<!--                            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {-->
					<!--                                "class": "layoutButton buttonFramed withIcon round market gold disabled withIcon disabled",-->
					<!--                                "svg": "sideBar\/market.svg",-->
					<!--                                "id": "buttonZ13",-->
					<!--                                "type": "gold",-->
					<!--                                "disabled": true,-->
					<!--                                "plusDialog": {-->
					<!--                                    "featureKey": "directLinks",-->
					<!--                                    "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer",-->
					<!--                                    "cssClass": "premiumFeaturePackage premiumFeaturePlus paymentShopV4",-->
					<!--                                    "premiumFeatureDialogVersion": 2,-->
					<!--                                    "version": 2,-->
					<!--                                    "paymentShopVersion": 4-->
					<!--                                },-->
					<!--                                "title": "Direct Links||For this feature you need Travian Plus activated.&lt;br \/&gt;&lt;span class=&quot;warning&quot;&gt;There is no marketplace in this village.&lt;\/span&gt;",-->
					<!--                                "onclick": "event.preventDefault();"-->
					<!--                            }]);-->
					<!--                        });-->
					<!--                    </script>-->
					<a class="layoutButton buttonFramed withIcon round barracks green withIcon <?= $baracks; ?>" id="buttonT12" href="<?php if ($baracks == "" && $session->plus) {
																																			echo "build.php?id=" . $bid;
																																		} else {
																																			echo "#";
																																		} ?>">
						<svg viewBox="0 0 18.46 20" class="barracks">
							<g class="outline">
								<path d="M4.32 13.44l.88.56 3-2.51-1.88-1.42a7.16 7.16 0 0 0-2.81 1.25c-.21.48-1 2.74-1 2.74l-1.34.64 1.13-4.07.16-.63a5.27 5.27 0 0 1 10 3.29c-.17 1.14-.15 3 1.39 3.91l.39.32a3.79 3.79 0 0 1-2.05.71c-.82-.14-1.62-2.3-1.62-2.33a1.49 1.49 0 1 0-2.66 1 1.45 1.45 0 0 0 1.13.58A13.32 13.32 0 0 1 1.49 20zM0 1.14l3.93 4.51c1-.14 3.5-1 4.56-.76 4.63 1.2 6.51 5.46 5.41 10.51 1.37 1.17 0 0 3.12 3.15a24.7 24.7 0 0 0 1-3.15 13.83 13.83 0 0 0 .44-3.28L15.66 11l2.73-.34a12.59 12.59 0 0 0-1.8-5.36l-3.67 1.44 2.82-2.69A10.8 10.8 0 0 0 11.5.83l-2 3.43.75-3.86-.2-.06A10.61 10.61 0 0 0 6.14.07l.41 3.09L5.09.25A18.06 18.06 0 0 0 0 1.14z"></path>
							</g>
							<g class="icon">
								<path d="M4.32 13.44l.88.56 3-2.51-1.88-1.42a7.16 7.16 0 0 0-2.81 1.25c-.21.48-1 2.74-1 2.74l-1.34.64 1.13-4.07.16-.63a5.27 5.27 0 0 1 10 3.29c-.17 1.14-.15 3 1.39 3.91l.39.32a3.79 3.79 0 0 1-2.05.71c-.82-.14-1.62-2.3-1.62-2.33a1.49 1.49 0 1 0-2.66 1 1.45 1.45 0 0 0 1.13.58A13.32 13.32 0 0 1 1.49 20zM0 1.14l3.93 4.51c1-.14 3.5-1 4.56-.76 4.63 1.2 6.51 5.46 5.41 10.51 1.37 1.17 0 0 3.12 3.15a24.7 24.7 0 0 0 1-3.15 13.83 13.83 0 0 0 .44-3.28L15.66 11l2.73-.34a12.59 12.59 0 0 0-1.8-5.36l-3.67 1.44 2.82-2.69A10.8 10.8 0 0 0 11.5.83l-2 3.43.75-3.86-.2-.06A10.61 10.61 0 0 0 6.14.07l.41 3.09L5.09.25A18.06 18.06 0 0 0 0 1.14z"></path>
							</g>
						</svg>
					</a>
					<!--                    <script type="text/javascript" id="buttonT12_script">-->
					<!--                        jQuery('#buttonT12').click(function (event) {-->
					<!--                            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {-->
					<!--                                "class": "layoutButton buttonFramed withIcon round barracks gold disabled withIcon disabled",-->
					<!--                                "svg": "sideBar\/barracks.svg",-->
					<!--                                "id": "buttonT12",-->
					<!--                                "type": "gold",-->
					<!--                                "disabled": true,-->
					<!--                                "plusDialog": {-->
					<!--                                    "featureKey": "directLinks",-->
					<!--                                    "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer",-->
					<!--                                    "cssClass": "premiumFeaturePackage premiumFeaturePlus paymentShopV4",-->
					<!--                                    "premiumFeatureDialogVersion": 2,-->
					<!--                                    "version": 2,-->
					<!--                                    "paymentShopVersion": 4-->
					<!--                                },-->
					<!--                                "title": "Direct Links||For this feature you need Travian Plus activated.&lt;br \/&gt;&lt;span class=&quot;warning&quot;&gt;There is no barracks in this village.&lt;\/span&gt;",-->
					<!--                                "onclick": "event.preventDefault();"-->
					<!--                            }]);-->
					<!--                        });-->
					<!--                    </script>-->
					<a class="layoutButton buttonFramed withIcon round stable green withIcon <?= $stable ?>" id="buttonq11" href="<?php if ($stable == "" && $session->plus) {
																																		echo "build.php?id=" . $sid;
																																	} else {
																																		echo "#";
																																	} ?>">
						<svg viewBox="0 0 19.07 20" class="stable">
							<g class="outline">
								<path d="M0 13.31a.79.79 0 0 0 .38.69 2.06 2.06 0 0 0 2 1.66h.33a2 2 0 0 0 1.67-1.68A8.12 8.12 0 0 0 6.76 13c.88-.51 1.87-1.23 2-2 .48-1.78-1.69-2.77-1.59-2.89 2.19.76 2.29 2 2.09 4.17 0 .35-2.42 6.68-2.57 7.11 1.37.81 2.36.71 5.15.31 1.55-.58 3.58-2.36 4.82-3a24.9 24.9 0 0 0 1.15-2.92 10.38 10.38 0 0 0-.24-3.46v-.05a7.48 7.48 0 0 1 1.52.77c0-.05-1.72-2.45-2.08-3a11.18 11.18 0 0 0-.79-.95 8.33 8.33 0 0 0-2.33-1.51 16 16 0 0 1 1.64-.05c-.92-.51-1.08-.88-5.64-2.45a12.52 12.52 0 0 1-1.61-.53A5 5 0 0 0 6.63.29 1.82 1.82 0 0 0 5.6 0a17.54 17.54 0 0 1 .17 1.75c.05.8.08 1.53.08 1.53l-.15.16-.49-.28-1.63-.94a5.07 5.07 0 0 0 .78 2.55c-.34.28-.62.7-.87.65s-.93.72-.93.72c-.25.51.14 1.23.06 1.9A7.47 7.47 0 0 0 2 9.27a5.85 5.85 0 0 0-.39 1.44l-1 1.82a.8.8 0 0 0-.61.78zm7.47-9.49c.49.05 5.82 1.87 7.72 5.31a9 9 0 0 1 .81 6.92s-.66-4.38-1.8-6.22c-1.29-2.07-1.22-2-4.42-4.19-1.18-.82-2.21-1.8-2.31-1.82zM3.55 8c0-.48.23-1.37.71-1.37h.48c.33 0 .61.1.61.42a1.16 1.16 0 0 1-.54.85.93.93 0 0 1-.55.2c-.48-.04-.71.35-.71-.1z"></path>
							</g>
							<g class="icon">
								<path d="M0 13.31a.79.79 0 0 0 .38.69 2.06 2.06 0 0 0 2 1.66h.33a2 2 0 0 0 1.67-1.68A8.12 8.12 0 0 0 6.76 13c.88-.51 1.87-1.23 2-2 .48-1.78-1.69-2.77-1.59-2.89 2.19.76 2.29 2 2.09 4.17 0 .35-2.42 6.68-2.57 7.11 1.37.81 2.36.71 5.15.31 1.55-.58 3.58-2.36 4.82-3a24.9 24.9 0 0 0 1.15-2.92 10.38 10.38 0 0 0-.24-3.46v-.05a7.48 7.48 0 0 1 1.52.77c0-.05-1.72-2.45-2.08-3a11.18 11.18 0 0 0-.79-.95 8.33 8.33 0 0 0-2.33-1.51 16 16 0 0 1 1.64-.05c-.92-.51-1.08-.88-5.64-2.45a12.52 12.52 0 0 1-1.61-.53A5 5 0 0 0 6.63.29 1.82 1.82 0 0 0 5.6 0a17.54 17.54 0 0 1 .17 1.75c.05.8.08 1.53.08 1.53l-.15.16-.49-.28-1.63-.94a5.07 5.07 0 0 0 .78 2.55c-.34.28-.62.7-.87.65s-.93.72-.93.72c-.25.51.14 1.23.06 1.9A7.47 7.47 0 0 0 2 9.27a5.85 5.85 0 0 0-.39 1.44l-1 1.82a.8.8 0 0 0-.61.78zm7.47-9.49c.49.05 5.82 1.87 7.72 5.31a9 9 0 0 1 .81 6.92s-.66-4.38-1.8-6.22c-1.29-2.07-1.22-2-4.42-4.19-1.18-.82-2.21-1.8-2.31-1.82zM3.55 8c0-.48.23-1.37.71-1.37h.48c.33 0 .61.1.61.42a1.16 1.16 0 0 1-.54.85.93.93 0 0 1-.55.2c-.48-.04-.71.35-.71-.1z"></path>
							</g>
						</svg>
					</a>
					<!--                    <script type="text/javascript" id="buttonq11_script">-->
					<!--                        jQuery('#buttonq11').click(function (event) {-->
					<!--                            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {-->
					<!--                                "class": "layoutButton buttonFramed withIcon round stable gold withIcon disabled",-->
					<!--                                "svg": "sideBar\/stable.svg",-->
					<!--                                "id": "buttonq11",-->
					<!--                                "type": "gold",-->
					<!--                                "disabled": true,-->
					<!--                                "plusDialog": {-->
					<!--                                    "featureKey": "directLinks",-->
					<!--                                    "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer",-->
					<!--                                    "cssClass": "premiumFeaturePackage premiumFeaturePlus paymentShopV4",-->
					<!--                                    "premiumFeatureDialogVersion": 2,-->
					<!--                                    "version": 2,-->
					<!--                                    "paymentShopVersion": 4-->
					<!--                                },-->
					<!--                                "title": "Direct Links||For this feature you need Travian Plus activated.&lt;br \/&gt;&lt;span class=&quot;warning&quot;&gt;There is no stable in this village.&lt;\/span&gt;",-->
					<!--                                "onclick": "event.preventDefault();"-->
					<!--                            }]);-->
					<!--                        });-->
					<!--                    </script>-->
					<a class="layoutButton buttonFramed withIcon round workshop green withIcon <?= $workshop ?>" id="buttonL10" href="<?php if ($workshop == "" && $session->plus) {
																																			echo "build.php?id=" . $wid;
																																		} else {
																																			echo "#";
																																		} ?>">
						<svg viewBox="0 0 20 18.8" class="workshop">
							<g class="outline">
								<path d="M19.73 6l-.45-.22-2.77-.8.49-.43a1.45 1.45 0 0 0 0-2 1.3 1.3 0 0 0-1.9.06l-.48.6-.48-3-3.93.15.12 4.05L13 5l-1.75 2a14.68 14.68 0 0 0-4.32-1.53 3.58 3.58 0 0 0 .17-4.06C6.26.19 4.87-.42 2.71.33A12.12 12.12 0 0 1 4 1a3.11 3.11 0 0 1 1.12 1.29 3.82 3.82 0 0 1-.39 3A16.83 16.83 0 0 1 3 4.64 3.15 3.15 0 0 1 1.56 3.3a5.86 5.86 0 0 1-.69-2 4.42 4.42 0 0 0-.38 4.62 3.56 3.56 0 0 0 3.84 1.32 12 12 0 0 0 .46 6.93l-1.31 1.49a1.29 1.29 0 0 0 .12 1.81l.12.11a1.28 1.28 0 0 0 1.81-.12l.84-.95A12.12 12.12 0 0 0 9 18.8l1.66-1.13A16.33 16.33 0 0 1 8 14.62l1.3-1.45 2.32-2.6a9.7 9.7 0 0 1 .83 1 16.44 16.44 0 0 1 1.87 3.57L16 14.05a12.44 12.44 0 0 0-2-4.72 7.09 7.09 0 0 0-.59-.74l1.75-2 .8 2.87.24.46c.56.55 1.82.11 2.8-1s1.29-2.4.73-2.92zM7.82 10.72l-.6.67-.45.51a13.24 13.24 0 0 1-.53-4.66 13.15 13.15 0 0 1 3.29 1.58z"></path>
							</g>
							<g class="icon">
								<path d="M19.73 6l-.45-.22-2.77-.8.49-.43a1.45 1.45 0 0 0 0-2 1.3 1.3 0 0 0-1.9.06l-.48.6-.48-3-3.93.15.12 4.05L13 5l-1.75 2a14.68 14.68 0 0 0-4.32-1.53 3.58 3.58 0 0 0 .17-4.06C6.26.19 4.87-.42 2.71.33A12.12 12.12 0 0 1 4 1a3.11 3.11 0 0 1 1.12 1.29 3.82 3.82 0 0 1-.39 3A16.83 16.83 0 0 1 3 4.64 3.15 3.15 0 0 1 1.56 3.3a5.86 5.86 0 0 1-.69-2 4.42 4.42 0 0 0-.38 4.62 3.56 3.56 0 0 0 3.84 1.32 12 12 0 0 0 .46 6.93l-1.31 1.49a1.29 1.29 0 0 0 .12 1.81l.12.11a1.28 1.28 0 0 0 1.81-.12l.84-.95A12.12 12.12 0 0 0 9 18.8l1.66-1.13A16.33 16.33 0 0 1 8 14.62l1.3-1.45 2.32-2.6a9.7 9.7 0 0 1 .83 1 16.44 16.44 0 0 1 1.87 3.57L16 14.05a12.44 12.44 0 0 0-2-4.72 7.09 7.09 0 0 0-.59-.74l1.75-2 .8 2.87.24.46c.56.55 1.82.11 2.8-1s1.29-2.4.73-2.92zM7.82 10.72l-.6.67-.45.51a13.24 13.24 0 0 1-.53-4.66 13.15 13.15 0 0 1 3.29 1.58z"></path>
							</g>
						</svg>
					</a>
					<!--                    <script type="text/javascript" id="buttonL10_script">-->
					<!--                        jQuery('#buttonL10').click(function (event) {-->
					<!--                            jQuery(window).trigger('buttonClicked', [event.delegateTarget, {-->
					<!--                                "class": "layoutButton buttonFramed withIcon round workshop gold withIcon disabled",-->
					<!--                                "disabled": true,-->
					<!--                                "svg": "sideBar\/workshop.svg",-->
					<!--                                "id": "buttonL10",-->
					<!--                                "type": "button",-->
					<!--                                "title": "Direct Links||For this feature you need Travian Plus activated.&lt;br \/&gt;&lt;span class=&quot;warning&quot;&gt;There is no workshop in this village.&lt;\/span&gt;",-->
					<!--                                "plusDialog": {-->
					<!--                                    "featureKey": "directLinks",-->
					<!--                                    "infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer",-->
					<!--                                    "cssClass": "premiumFeaturePackage premiumFeaturePlus paymentShopV4",-->
					<!--                                    "premiumFeatureDialogVersion": 2,-->
					<!--                                    "version": 2,-->
					<!--                                    "paymentShopVersion": 4-->
					<!--                                },-->
					<!--                                "onclick": "event.preventDefault();"-->
					<!--                            }]);-->
					<!--                        });-->
					<!--                    </script>-->
				</div>
			</div>
			<div class="content">
				<div class="playerName"><?php echo $session->username; ?></div>
				<div id="villageNameField" class="boxTitle"><?php echo $village->vname; ?></div>
				<?php
				if ($village->loyalty < 30) {
					echo "<div class=\"loyalty low\">" . LOYALTY . ": <span> $village->loyalty%</span></div>";
				} elseif ($village->loyalty < 90) {
					echo "<div class=\"loyalty medium\">" . LOYALTY . ": <span> $village->loyalty%</span></div>";
				} else {
					echo "<div class=\"loyalty high\">" . LOYALTY . ": <span> $village->loyalty%</span></div>";
				}
				?>
				<div class="innerBox footer">
					<button type="button" id="button5229e5255021d" class="layoutButton buttonFramed withIcon round edit green  " onclick="return false;" title="<?php echo dorf1_villageNameBox_16; ?>" style="margin-left:1px;">
						<div class="button-container addHoverClick">
							<svg viewBox="0 0 15.59 20" class="edit">
								<g class="outline">
									<path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
								</g>
								<g class="icon">
									<path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
								</g>
							</svg>
						</div>
					</button>
					<script type="text/javascript">
						if ($('button5229e5255021d')) {
							$('button5229e5255021d').addEvent('click', function() {
								window.fireEvent('buttonClicked', [this, {
									"type": "green",
									"onclick": "return false;",
									"loadTitle": false,
									"boxId": "",
									"disabled": false,
									"speechBubble": "",
									"class": "",
									"id": "button5229e5255021d",
									"redirectUrl": "",
									"redirectUrlExternal": "",
									"title": "\u0627\u0646\u0642\u0631 \u0647\u0646\u0627 \u0645\u0631\u062a\u064a\u0646 \u0644\u062a\u063a\u064a\u0651\u0631 \u0627\u0633\u0645 \u0642\u0631\u064a\u062a\u0643",
									"villageDialog": {
										"title": "<?= CHANGING_YOUR_VILLAGE_NAME ?>:",
										"description": "<?= NEW_NAME ?>:",
										"saveText": "<?= SAVE ?>",
										"villageId": "<?php echo $village->wid; ?>"
									}
								}]);
							});
						}
					</script>
				</div>
			</div>
		</div>
		<div id="sidebarBoxVillagelist" class="sidebarBox toggleable collapsed ">
			<div class="header">
				<div class="buttonsWrapper">
					<?php if ($session->goldclub != 0) { ?>
						<style type="text/css">
							button.layoutButton.buildOff div.button-container i {
								background-position: right -758px;
							}

							button.layoutButton.buildOn div.button-container i {
								background-position: right -800px;
							}
						</style>

						<button type="button" id="buttonBuild" class="layoutButton build<?= $_COOKIE['builder'] ?>  green" title="<?php echo $_COOKIE['builder'] == "On" ? 'speed on' : 'speed off'; ?>" onclick="return false;">
							<div class="button-container addHoverClick ">
								<i></i>
							</div>
						</button>
						<script type="text/javascript">
							if ($('buttonBuild')) {
								$('buttonBuild').addEvent('click', function() {
									window.fireEvent('buttonClicked', [this, {
										"type": "green",
										"onclick": "return false;",
										"loadTitle": false,
										"boxId": "",
										"disabled": false,
										"speechBubble": "",
										"class": "",
										"id": "buttonBuild",
										"redirectUrl": "<?php echo (($dorf1 == '') ? 'dorf2.php' : 'dorf1.php') . "?builder=" . $another; ?>",
										"redirectUrlExternal": ""
									}]);
								});
							}
						</script>
					<?php } ?>

					<a id="buttond17" class="layoutButton buttonFramed withIcon round overview green   " href="dorf3.php">
						<svg viewBox="0 0 20 14.92" class="overview">
							<g class="outline">
								<path d="M10 1.41c4.61 0 8.34 6.05 8.34 6.05s-3.73 6.05-8.34 6.05-8.34-6-8.34-6 3.73-6 8.34-6M10 0C7.7 0 5.38 1.16 3.1 3.44A20.17 20.17 0 0 0 .46 6.72L0 7.46l.46.74a20.17 20.17 0 0 0 2.64 3.28c2.28 2.28 4.6 3.44 6.9 3.44s4.62-1.16 6.9-3.44a20.17 20.17 0 0 0 2.64-3.28l.46-.74-.46-.74a20.17 20.17 0 0 0-2.64-3.28C14.62 1.16 12.3 0 10 0zm.08 11.64a4.5 4.5 0 1 1 4.49-4.49 4.5 4.5 0 0 1-4.49 4.49zm0-7.88a3.39 3.39 0 1 0 3.38 3.39 3.39 3.39 0 0 0-3.38-3.39zm0 5.92a2.53 2.53 0 1 1 2.52-2.53 2.53 2.53 0 0 1-2.52 2.53z"></path>
							</g>
							<g class="icon">
								<path d="M10 1.41c4.61 0 8.34 6.05 8.34 6.05s-3.73 6.05-8.34 6.05-8.34-6-8.34-6 3.73-6 8.34-6M10 0C7.7 0 5.38 1.16 3.1 3.44A20.17 20.17 0 0 0 .46 6.72L0 7.46l.46.74a20.17 20.17 0 0 0 2.64 3.28c2.28 2.28 4.6 3.44 6.9 3.44s4.62-1.16 6.9-3.44a20.17 20.17 0 0 0 2.64-3.28l.46-.74-.46-.74a20.17 20.17 0 0 0-2.64-3.28C14.62 1.16 12.3 0 10 0zm.08 11.64a4.5 4.5 0 1 1 4.49-4.49 4.5 4.5 0 0 1-4.49 4.49zm0-7.88a3.39 3.39 0 1 0 3.38 3.39 3.39 3.39 0 0 0-3.38-3.39zm0 5.92a2.53 2.53 0 1 1 2.52-2.53 2.53 2.53 0 0 1-2.52 2.53z"></path>
							</g>
						</svg>
					</a>

					<script type="text/javascript">
						jQuery('#buttonL18').click(function(event) {
							jQuery(window).trigger('buttonClicked', [event.delegateTarget, {
								"type": "green",
								"loadTitle": false,
								"boxId": "",
								"disabled": false,
								"attention": false,
								"class": "",
								"id": "button5ecc3afabd7b1",
								"redirectUrl": "/village/statistics",
								"redirectUrlExternal": "",
								"svg": "sideBar\/overview.svg",
								"content": ""
							}]);
						});
					</script>
				</div>
			</div>
			<div class="content">
				<?php
				$count = count($session->vvillages);
				$mode = CP;
				$c = 1;
				while (${'cp' . $mode}[$c] < $session->cp) {
					$c++;
				}
				$c--;
				?>
				<div class="expansionSlotInfo" title="<?php echo dorf1_villageNameBox2_3; ?> :  <?= $count ?>/<?php echo $c; ?> </br><?php echo dorf1_villageNameBox2_5; ?>  <?php echo $session->cp; ?> / <?php echo ${'cp' . $mode}[$c + 1]; ?>">
					<div class="boxTitle">
						<?php echo dorf1_villageNameBox2_3; ?> <?= $count . "/" . $c ?>
					</div>
					<div class="barWrapper">
						<div class="bar" style="width:<?php echo (($session->cp / ${'cp' . $mode}[$c + 1]) * 100); ?>%">&nbsp;</div>
					</div>
				</div>
				<ul>
					<?php
					$attt = array();
					if ($session->plus) {
						$att = $database->getMovement(88, $villmas, 1);
						foreach ($att as $lol) {
							$attt[$lol['to']] += 1;
						}
					}
					foreach ($session->vvillages as $vil) {
						$village_attack = "";
						$village_title = $vil['name'];
						if ($session->plus) {
							if ($attt[$vil['wref']]) {
								$village_attack = "attack ";
								$village_title = "attacks on this village: " . $attt[$vil['wref']];
							}
						}
						$newquery = explode("&", $_SERVER['QUERY_STRING']);
						if (isset($_GET['newdid']) || isset($_GET['id'])) {
							unset($newquery[0]);
						}
						if (isset($_GET['newdid']) && isset($_GET['id'])) {
							unset($newquery[1]);
						}
						$newquery = implode("&", $newquery);
						if ($_SERVER['PHP_SELF'] == "/build.php") {
							$build = true;
						} else {
							$build = false;
						}
						if ($build && $id > 18) {
							$buildvil = $fff[$vil['wref']];
							$newidbuild = $_GET['id'];
							$exist = 0;
							for ($b = 19; $b <= 40; $b++) {
								if ($buildvil['f' . $b . 't'] == $village->resarray['f' . $_GET['id'] . 't'] && $buildvil['f' . $b] > 0) {
									$newidbuild = $b;
									$exist = 1;
								}
							}
						}
						if (isset($_GET['id'])) {
							$link = "?newdid=" . $vil['wref'] . "&id=" . $_GET['id'] . "" . ($newquery ? '&' . $newquery : '');
						} else {
							$link = "?newdid=" . $vil['wref'] . "" . ($newquery ? '&' . $newquery : '');
						}
						if ($build && $id > 18) {
							if ($newidbuild != $_GET['id']) {
								$link = "?newdid=" . $vil['wref'] . "&id=" . $newidbuild . "" . ($newquery ? '&' . $newquery : '');
							} elseif (!$exist) {
								$link = "?newdid=" . $vil['wref'] . "&id=" . $newidbuild;
							}
						}
					?>
						<li class=" <?php if ($vil['wref'] == $village->wid) {
										echo "active";
									} ?> <?= $village_attack ?>" title="<?php echo $vil['name']; ?> (<?php echo $vil['vx']; ?>|<?php echo $vil['vy']; ?>)">
							<a href="<?= $_SERVER['PHP_SELF'] . $link; ?>" accesskey="b" class="active">
								<span class="iconAndNameWrapper">
									<svg viewBox="0 0 20 19.06" class="attack">
										<path d="M16.22 13.08l2.14-2.14-1.37-1.36-1.63 1.63-2.15-2.15 4.74-4.73L19.06 0l-4.32 1.11L10 5.85 5.26 1.11.94 0l1.11 4.33 4.74 4.73-2.15 2.15-1.63-1.63-1.37 1.36 2.14 2.14L0 16.86l2.21 2.2 3.78-3.77 2.13 2.13 1.37-1.37-1.63-1.63L10 12.28l2.14 2.14-1.63 1.63 1.37 1.37 2.14-2.13 3.77 3.77 2.21-2.2-3.78-3.78z"></path>
									</svg>
									<span class="name"><?php echo $vil['name']; ?></span>
								</span>
								<span class="coordinatesGrid">
									<span class="coordinates coordinatesWrapper coordinatesAligned coordinatesltr">
										<span class="coordinateX">(<?php echo $vil['vx']; ?></span>
										<span class="coordinatePipe">|</span>
										<span class="coordinateY"><?php echo $vil['vy']; ?>)</span>
									</span>
								</span>
							</a>
						</li>
					<?php }
					?>
				</ul>
			</div>
			<div class="innerBox footer">
			</div>
		</div>









		<div class="innerBox content">
			<form>
				<div class="questAchievementContainer">

					<div class="innerBox footer">
					</div>
				</div>

				<br />

				<script type="text/javascript">
					window.addEvent('domready', function() {
						if ($('button545dec96b3573')) {
							$('button545dec96b3573').addEvent('click', function() {
								window.fireEvent('buttonClicked', [this, {
									"type": "submit",
									"value": "\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u043e\u0441\u0442\u0438",
									"name": "",
									"id": "button545dec96b3573",
									"class": "green questButtonOverviewAchievements",
									"title": "",
									"confirm": "",
									"onclick": "",
									"questButtonOverviewAchievements": true,
									"onClick": "return false;"
								}]);
							});
						}
					});
				</script>
		</div>
		</form>
		<script type="text/javascript">
			window.addEvent('domready', function() {
				Travian.Game.Quest.addListData({
					"achievementquests": {
						"questsTotal": 10,
						"questsCompleted": 0,
						"name": "Achievement Quests",
						"quests": {
							"AchievementQuest_01": {
								"id": "AchievementQuest_01",
								"name": "achievementQuests.achQuest_01_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 1,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_01_answer (en)%%#go2answer"
							},
							"AchievementQuest_02": {
								"id": "AchievementQuest_02",
								"name": "achievementQuests.achQuest_02_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_02_answer (en)%%#go2answer"
							},
							"AchievementQuest_03": {
								"id": "AchievementQuest_03",
								"name": "achievementQuests.achQuest_03_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_03_answer (en)%%#go2answer"
							},
							"AchievementQuest_04": {
								"id": "AchievementQuest_04",
								"name": "achievementQuests.achQuest_04_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 1,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_04_answer (en)%%#go2answer"
							},
							"AchievementQuest_05": {
								"id": "AchievementQuest_05",
								"name": "achievementQuests.achQuest_05_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_05_answer (en)%%#go2answer"
							},
							"AchievementQuest_06": {
								"id": "AchievementQuest_06",
								"name": "achievementQuests.achQuest_06_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_06_answer (en)%%#go2answer"
							},
							"AchievementQuest_07": {
								"id": "AchievementQuest_07",
								"name": "achievementQuests.achQuest_07_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_07_answer (en)%%#go2answer"
							},
							"AchievementQuest_08": {
								"id": "AchievementQuest_08",
								"name": "achievementQuests.achQuest_08_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_08_answer (en)%%#go2answer"
							},
							"AchievementQuest_09": {
								"id": "AchievementQuest_09",
								"name": "achievementQuests.achQuest_09_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_09_answer (en)%%#go2answer"
							},
							"AchievementQuest_10": {
								"id": "AchievementQuest_10",
								"name": "achievementQuests.achQuest_10_name",
								"category": "achievementquests",
								"stepType": "achievementtask",
								"currentStep": "0",
								"stepCount": 3,
								"steps": [{
									"stepId": 0,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 1,
									"type": "achievementtask",
									"stepDescription": null
								}, {
									"stepId": 2,
									"type": "achievementtask",
									"stepDescription": null
								}],
								"answersLink": "http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_10_answer (en)%%#go2answer"
							}
						}
					}

					,
					"achievementrewards": {
						"questsTotal": 4,
						"questsCompleted": 0,
						"name": "Achievement Rewards",
						"quests": {
							"AchievementQuestReward_01": {
								"id": "AchievementQuestReward_01",
								"name": "achievementQuests.achQuestReward_01_name",
								"category": "achievementrewards",
								"stepType": "reward",
								"currentStep": 0,
								"stepCount": 1,
								"steps": {
									"stepId": 0,
									"type": "reward"
								},
								"answersLink": "http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_01_answer (en)%%#go2answer"
							},
							"AchievementQuestReward_02": {
								"id": "AchievementQuestReward_02",
								"name": "achievementQuests.achQuestReward_02_name",
								"category": "achievementrewards",
								"stepType": "reward",
								"currentStep": 0,
								"stepCount": 1,
								"steps": {
									"stepId": 0,
									"type": "reward"
								},
								"answersLink": "http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_02_answer (en)%%#go2answer"
							},
							"AchievementQuestReward_03": {
								"id": "AchievementQuestReward_03",
								"name": "achievementQuests.achQuestReward_03_name",
								"category": "achievementrewards",
								"stepType": "reward",
								"currentStep": 0,
								"stepCount": 1,
								"steps": {
									"stepId": 0,
									"type": "reward"
								},
								"answersLink": "http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_03_answer (en)%%#go2answer"
							},
							"AchievementQuestReward_04": {
								"id": "AchievementQuestReward_04",
								"name": "achievementQuests.achQuestReward_04_name",
								"category": "achievementrewards",
								"stepType": "reward",
								"currentStep": 0,
								"stepCount": 1,
								"steps": {
									"stepId": 0,
									"type": "reward"
								},
								"answersLink": "http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_04_answer (en)%%#go2answer"
							}
						}
					}
				});
			});
		</script>
	</div>


	<?php if ($session->access == 9) { ?>
		<div id="sidebarBoxDailyquests" class="sidebarBox   ">
			<div class="sidebarBoxBaseBox">
				<div class="baseBox baseBoxTop">
					<div class="baseBox baseBoxBottom">
						<div class="baseBox baseBoxCenter"></div>
					</div>
				</div>
			</div>

			<div class="sidebarBoxInnerBox">

				<div class="innerBox content"><?php echo $lang['Admin']['Panel01']; ?><br><br>
					<div class="questAchievementContainer">
						<a href="panel">
							<button class="green" id="button545dec96b3573">
								<div class="button-container addHoverClick">
									<div class="button-background">
										<div class="buttonStart">
											<div class="buttonEnd">
												<div class="buttonMiddle"></div>
											</div>
										</div>
									</div>
									<div class="button-content"><?php echo $lang['Admin']['Panel02']; ?></div>
								</div>
							</button>



							<br><br></a>


						</a>
					</div>
				</div>
				<div class="innerBox footer">
				</div>
			</div>
		</div>
	<?php } ?>

	<?php
	$vote = $database->query("SELECT dgold FROM `users` WHERE `id`='" . $session->uid . "'"); //проinерка голосоinал ли уже игрок

	?>


	<?php
	$disable = false;

	if (
		$session->access != 9 && ($session->uid && !$disable && $session->qData['quest'] != 16)  ||
		($session->qData['quest'] == 16
			&& ($session->qArrayB1[0] != 0 || $session->qArrayB2[0] != 0
				|| $session->qArrayE1[0] != 0 || $session->qArrayE2[0] != 0
				|| $session->qArrayW1[0] != 0 || $session->qArrayW2[0] != 0))
	) {
	?>
		<div id="sidebarBoxQuestmaster" class="sidebarBox   ">
			<div class="sidebarBoxBaseBox">
				<div class="baseBox baseBoxTop">
					<div class="baseBox baseBoxBottom">
						<div class="baseBox baseBoxCenter"></div>
					</div>
				</div>
			</div>


			<div class="sidebarBoxInnerBox">
				<div class="innerBox header ">
					<button id="questmasterButton" title="" class="forceDisplayElement vid_<?php echo $session->tribe; ?> highlighted on" type="button">
						<img class="border" alt="" src="img/x.gif">
						<img class="animation" alt="" src="img/x.gif">
						<img class="mentor" alt="" src="img/x.gif">
						<?php if ($session->qData['isFinished'] || ($session->qData['skipped']
							&& !$session->qData['battle1']
							&& !$session->qData['battle2']
							&& !$session->qData['economy1']
							&& !$session->qData['economy2']
							&& !$session->qData['world1']
							&& !$session->qData['world2'])) { ?>
							<div class="bigSpeechBubble newQuestSpeechBubble" title="">
								<img src="img/x.gif" alt="">
							</div>
						<?php } ?>
					</button>
					<div class="buttonsWrapper">
						<button type="button" id="buttong6PCZTDC7HwhS" class="layoutButton bulbWhite green  " onclick="return false;">
							<div class="button-container addHoverClick">
								<i></i>
							</div>
						</button>
					</div>

					<script type="text/javascript">
						if ($('buttong6PCZTDC7HwhS')) {
							$('buttong6PCZTDC7HwhS').addEvent('click', function() {
								window.fireEvent('buttonClicked', [this, {
									"type": "green",
									"onclick": "return false;",
									"loadTitle": false,
									"boxId": "",
									"disabled": false,
									"speechBubble": "",
									"class": "",
									"id": "buttong6PCZTDC7HwhS",
									"redirectUrl": "",
									"redirectUrlExternal": "",
									"overlay": []
								}]);
							});
						}
					</script>
					<?php if (DIRECTION != "ltr") { ?>
						<div class="clear"></div>
					<?php } ?>


					<script type="text/javascript">
						window.addEvent('domready', function() {
							Travian.Game.Quest.setOptions({
								isTutorial: <?php echo $quest->userProgress() == 16 ? 'false' : 'true'; ?>
							});
							// Dialog an den Questmaster binden
							$('questmasterButton').addEvent('click', function() {
								<?php if ($quest->userProgress() == 16) { ?>
									Travian.Game.Quest.mentorClick('');
								<?php } else { ?>
									Travian.Game.Quest.mentorClick('Tutorial_<?php echo $quest->userProgress(); ?>');
								<?php } ?>
							});
						});
					</script>
					<div>
						<script type="text/javascript">
							Travian.Game.Quest.createHighlights();
							Travian.Game.Quest.toggleHighlights(true);
							$$('.questInformation .iconButton.small.cancel').addEvent('click', function() {
								setTimeout(function() {
									Travian.Game.Quest.createHighlights();
									Travian.Game.Quest.toggleHighlights(true);
								}, 500);
							});
						</script>
					</div>
				</div>
				<div class="innerBox content">
					<ul id="mentorTaskList" class="notClickable">
						<?php echo $quest->getQuestMonitor($quest->userProgress()); ?>
						<script type="text/javascript">
							Travian.Translation.add('answers.tutorial_<?php echo $quest->userProgress(); ?>_title', "Travian Answers");
						</script>
					</ul>
					<script type="text/javascript">
						window.addEvent('domready', function() {
							Travian.Game.Quest.setOptions(<?php echo $quest->getQuestJS($quest->userProgress()); ?>);
							Travian.Game.Quest.addListData([]);

							Travian.Game.Quest.bindListDelegationDeg(jQuery('ul#mentorTaskList li'));
							Travian.Game.Quest.createHighlights();
							Travian.Game.Quest.initializeQuests();

						});
					</script>

				</div>
				<div class="innerBox footer">
				</div>
			</div>
		</div> <?php } ?>

</div>