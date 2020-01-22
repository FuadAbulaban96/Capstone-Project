<?php

include('../includes/connection.php');

$query2 = " SELECT * FROM model WHERE model_id = {$_GET['model_id']} ";
$result =mysqli_query($conn,$query2);
$row    =mysqli_fetch_assoc($result);

unlink("upload/{$row['model_image']}");


$query = " DELETE FROM model WHERE model_id = {$_GET['model_id']} ";

mysqli_query($conn,$query);

header("location:manage_model.php");