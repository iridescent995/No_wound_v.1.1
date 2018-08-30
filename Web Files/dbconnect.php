<?php

$dbconnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'no wound'
);

$db= new mysqli(
$dbconnect['server'],
$dbconnect['user'],
$dbconnect['pass'],
$dbconnect['name']
);

if($db -> connect_errno >0){
    echo "<br><br><h2>No wound cant be reached right now! :( </h2><br> Error details:" .$db ->connect_error;
    exit;
}


?>