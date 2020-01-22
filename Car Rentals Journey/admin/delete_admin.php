<?php

include('../includes/connection.php');
$query2 = " SELECT * FROM admin WHERE admin_id = {$_GET['admin_id']} ";
$result =mysqli_query($conn,$query2);
$row    =mysqli_fetch_assoc($result);

unlink("upload/{$row['admin_image']}");


$query = " DELETE FROM admin WHERE admin_id = {$_GET['admin_id']} ";

mysqli_query($conn,$query);

header("location:manage_admin.php");