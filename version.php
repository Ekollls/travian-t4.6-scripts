<?php
include("baglanti.php");
include("application/Account.php");  
if ($session->kim == 0) {
							$database->query("UPDATE users SET kim = '1' WHERE id > '0'");
						} elseif ($session->kim == 1) {
							$database->query("UPDATE users SET kim = '0' WHERE id > '0'");
						}


header("location:dorf1.php");
?>
