<?php 
include_once('connection.php');  

if(isset($_POST['update']))
{

	$query = "UPDATE products SET name = '$_POST[name]',b_price = '$_POST[b_price]',s_price = '$_POST[s_price]' WHERE name = '$_POST[name]'";
	$result=mysqli_query($con,$query); 

if($result)
{
	echo "Record Successfully Updated";
}
else
{
	echo "Action Failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>EDIT PRODUCT</legend>

			Name <br><input id="text" type="text" name="name"><br><br>
			Buying Price <br><input id="text" type="price" name="b_price"><br><br>
			Selling Price <br><input id="text" type="price" name="s_price"><br><br>

			<input id="button" type="submit" name="update" value="Update"><br><br>

			<a href="plist.php">Back</a><br><br>
		</fieldset>
		</form>

</body>
</html>