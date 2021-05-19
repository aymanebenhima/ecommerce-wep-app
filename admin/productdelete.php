<?php 
include('../includes/db.php');
$newid=$_GET['del_id'];

$sql="Delete from products where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: allproducts.php');
}else{
	echo "Not Deleted";
}










?>