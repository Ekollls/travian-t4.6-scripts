<?php
if ($_GET['id'] > 0) {
    $database->query("UPDATE users set god = '" . $_GET['id'] . "' where `id`='" . $session->uid . "'");
    $database->query("UPDATE users set god = '" . $_GET['id'] . "', favor = '0' where `id`='" . $session->uid . "'");
   // mysqli_query($database->dblink,"INSERT INTO ".TB_PREFIX."duyuru (duyuru) VALUES ('[".$session->username."], Activated god')");
    header("Location: gods.php");
    exit;
}
