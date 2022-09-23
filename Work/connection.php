<?php

$db_host = "localhost";
$db_user ="root";
$db_password ="";
$db_name ="login_db";

try{
    $db = new PDO("mysql:host ={$db_host}; dbname={$db_name}", $db_user , $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    date_default_timezone_set("Asia/Bangkok");
    
}

catch (PDOException $e){
    echo "Failed to connect" . $e->getMessage();
}