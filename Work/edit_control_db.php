<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $channel = $_POST['channel'];
    $drug_name = $_POST['drug_name'];
    $time = $_POST['time'];
    $time_to_eat = $_POST['time_to_eat'];
    $exp = $_POST['exp'];
    $id = $_POST['id'];

    $update_stmt = $db->prepare("update drugs SET channel = :channel, drug_name = :drug_name, time = :time, time_to_eat = :time_to_eat, exp = :exp WHERE drug_id = :id");
    $update_stmt->bindParam(':channel', $channel);
    $update_stmt->bindParam(':drug_name', $drug_name);
    $update_stmt->bindParam(':time', $time);
    $update_stmt->bindParam(':time_to_eat', $time_to_eat);
    $update_stmt->bindParam(':exp', $exp);
    $update_stmt->bindParam(':id', $id);

    $update_stmt->execute();

    if($update_stmt){
        
        
        header('location: data_drug.php');
    }
    else {
        header('location: edit_control.php?id='. $id);
    }
}