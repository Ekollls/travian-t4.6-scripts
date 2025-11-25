Hello <? echo $session->username; ?>,

<h4 class="round spacer"><?php echo $lang['main']['options'][2]; ?></h4>
<table class="transparent set" cellpadding="1" cellspacing="1" id="languageSettings">
		<tbody>
		<tr>
			<th>
			<?php echo $lang['main']['options'][3]; ?>:</th>
			<td>
				<select name="languageNew">
					<option value="en" <?php if($session->lang == 'en'){ echo 'selected="selected"'; } ?>><?php echo $lang['main']['options'][4]; ?></option>
                    <option value="ar" <?php if($session->lang == 'ar'){ echo 'selected="selected"'; } ?>><?php echo $lang['main']['options'][5]; ?></option>
                </select>
			</td>
		</tr>
		</tbody>
	</table>
    <div class="submitButtonContainer">
		<button type="submit" value="save" name="s1" id="btn_ok" class="green disabled" disabled="">
			<div class="button-container addHoverClick">
				<div class="button-background">
					<div class="buttonStart">
						<div class="buttonEnd">
							<div class="buttonMiddle"></div>
						</div>
					</div>
				</div>
				<div class="button-content"><?php echo $lang['main']['options'][6]; ?></div>
			</div>
		</button>
		<script type="text/javascript">
			window.addEvent('domready', function () {
				if ($('btn_ok')) {
					$('btn_ok').addEvent('click', function () {
						window.fireEvent('buttonClicked', [this, {
							"type": "submit",
							"value": "save",
							"name": "s1",
							"id": "btn_ok",
							"class": "green ",
							"title": "",
							"confirm": "",
							"onclick": ""
						}]);
					});
				}
			});
		</script>
	</div>
</form>
    <script type="text/javascript">
	window.addEvent('domready', function () {
		Travian.Form.UnloadHelper.watchHtmlForm($('settings'));

	});
</script>
