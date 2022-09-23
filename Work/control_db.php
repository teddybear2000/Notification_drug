<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $channel = $_POST['channel'];
    $drug_name = $_POST['drug_name'];
    $time = $_POST['time'];
    $time_to_eat = $_POST['time_to_eat'];
    $exp = $_POST['exp'];

    $insert_stmt = $db->prepare("INSERT INTO drugs(channel, drug_name, time, time_to_eat, exp) VALUES(:channel, :drug_name, :time, :time_to_eat, :exp)");
    $insert_stmt->bindParam(':channel', $channel);
    $insert_stmt->bindParam(':drug_name', $drug_name);
    $insert_stmt->bindParam(':time', $time);
    $insert_stmt->bindParam(':time_to_eat', $time_to_eat);
    $insert_stmt->bindParam(':exp', $exp);
    $insert_stmt->execute();

    if($insert_stmt){
        
        
        header('location: data_drug.php');
    }
    else {
        header('location: control.php');
    }
}