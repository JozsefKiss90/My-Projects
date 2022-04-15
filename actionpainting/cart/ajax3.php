<?php

// require MySQL Connection
require ('../functions.php');

// require Product Class


require('../database/session.php');

$user->addUser($sid);
$user_arr = $user->getUser($sid);
$userid = $user_arr[0]["user_id"];		
echo $userid;
 
// DBController object


// Product object


if (isset($_POST['fin'])){ 
    $result = $_POST['fin'];
    $items->addItems($result,$userid);
}