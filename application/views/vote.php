<?php
#Example PHP Postback Script
#Arena-Top100 does not take responsibility or liability for the use of this php snippet

// Your Database Connection Details
$host = 'localhost';
$db_name = '25x';
$db_user = '25x';
$db_password = 'Vh_0mq63';
$connection = mysqli_connect($host, $db_user, $db_password);
mysqli_select_db($connection, $db_name);

// User
$userid = isset($_POST['userid']) ? $_POST['userid'] : null;

// User IP
$userip = isset($_POST['userip']) ? $_POST['userip'] : null;

// User voted on Arena-Top100? 1 = unique vote, 0 = already voted
$valid = isset($_POST['voted']) ? (int)$_POST['voted'] : 0;

// Make sure the user was not yet rewarded on your system
// For example by checking your reward logs
if (!is_null($userid) && $valid == 1) 
{		
    // Make userid safe to use in query
    $userid = mysqli_real_escape_string($connection, $userid);

    // COUNT rows where reward_date is today
    $result = mysqli_query($connection, "SELECT COUNT(*) FROM `reward_log` WHERE `user` = '$userid' AND `reward_date` >= CURDATE()");
    $rewarded = mysqli_num_rows($result);
		
    // No results means not rewarded yet, so grant reward and set the reward date/time log
    if(!$rewarded) 
    {
         // Grant reward, for example vote points
        mysqli_query($connection, "UPDATE `users` SET `points` = `points` + 1 WHERE `user` = '$userid'");
			
         // Insert log
        mysqli_query($connection, "INSERT INTO `reward_log` (`user`, `reward_date`) VALUES ('$userid', NOW())");
    }
}

// Close connection
mysqli_close($connection);

?>