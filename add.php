<?php

require_once 'db.php'; 

$title = mysqli_real_escape_string($db, $_POST['title']);
$price = mysqli_real_escape_string($db, $_POST['price']);
$engine = mysqli_real_escape_string($db, $_POST['engine']);
$fuel = mysqli_real_escape_string($db, $_POST['fuel']);
$descr = mysqli_real_escape_string($db, $_POST['descr']);
$old_owner_1 = mysqli_real_escape_string($db, $_POST['old_owner_1']);
$old_owner_2 = mysqli_real_escape_string($db, $_POST['old_owner_2']);
$old_owner_3 = mysqli_real_escape_string($db, $_POST['old_owner_3']);

$insert = "INSERT INTO `cars` (`title`, `price`, `engine`, `fuel`, `descr`) VALUES ('$title', '$price', '$engine', '$fuel', '$descr')";
$insert2 = "INSERT INTO `old_owners` (`old_owner_1`, `old_owner_2`, `old_owner_3`) VALUES ('$old_owner_1', '$old_owner_2', '$old_owner_3')";

$query = mysqli_query($db, $insert);
$query2 = mysqli_query($db, $insert2);

if($query && $query2) header('Location: index.php');
