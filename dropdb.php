<?php
$mysqli = new mysqli("host", "my_user", "my_password", "database");
$mysqli->query('SET foreign_key_checks = 0');
if ($result = $mysqli->query("SHOW TABLES")) {
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        $mysqli->query('DROP TABLE IF EXISTS ' . $row[0]);
    }
}

$mysqli->query('SET foreign_key_checks = 1');
$mysqli->close();
);