<?php

session_start();

$a = session_id();
$shuffled = str_shuffle($a);

$sessionid = substr($shuffled,0, 6);

$sid = "'".$a."'";

 ?>
