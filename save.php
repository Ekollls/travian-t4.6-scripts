<?php
include("baglanti.php");
include("GameEngine/Village.php");

if (isset($_POST['text'])) {

$ddd=$_POST['text'];
	$query = "INSERT INTO message (message) VALUES ('$ddd')";
	
}

?>