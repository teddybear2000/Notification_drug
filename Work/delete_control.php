<?php
include('connection.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $delete_stmt = $db->prepare("DELETE FROM drugs WHERE drug_id = :id");
    $delete_stmt->bindParam(':id', $id);

    $delete_stmt->execute();
    
    header('location: data_drug.php');
}