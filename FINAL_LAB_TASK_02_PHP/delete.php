<?php
include_once("connection.php");
error_reporting(0);

$product_id=$_GET['pi'];
$query = "DELETE FROM products WHERE product_id = 'product_id'";

$result=mysqli_query($con,$query); 

if($result)
{
	echo "Record Successfully Deleted";
}
else
{
	echo "Action Failed";
}
?>