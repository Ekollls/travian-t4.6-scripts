<?
$DBNAME = "travian";
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";
try {
  $baglanDB = new PDO("mysql:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS, 
  [ 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ]);
} catch(PDOException $e) {
  echo "Veritabanı Bağlantısı Başarısız : " . $e->getMessage();
  die();
}
$host = 'localhost';
$db_name = 'travian';
$db_user = 'root';
$db_password = '';
$connection = mysqli_connect($host, $db_user, $db_password);
mysqli_select_db($connection, $db_name);
mysqli_query("SET NAMES UTF8");

$host2 = 'localhost';
$db_name2 = 'travian';
$db_user2 = 'root';
$db_password2 = '';
$connection2 = mysqli_connect($host2, $db_user2, $db_password2);
mysqli_select_db($connection2, $db_name2);
mysqli_query("SET NAMES UTF8");


$host3 = 'localhost';
$db_name3 = 'travian';
$db_user3 = 'root';
$db_password3 = '';
$connection3 = mysqli_connect($host3, $db_user3, $db_password3);
mysqli_select_db($connection3, $db_name3);
mysqli_query("SET NAMES UTF8");
?>