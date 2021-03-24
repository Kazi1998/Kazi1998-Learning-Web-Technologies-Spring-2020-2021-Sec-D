<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$b_price = $_POST['b_price'];
		$s_price = $_POST['s_price'];

		if(!empty($name) && !empty($b_price) && !is_numeric($name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into products (name,b_price,s_price) values ('$name','$b_price','$s_price')";

			mysqli_query($con, $query);

			header("Location: add.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>ADD PRODUCT</legend>

			Name <br><input id="text" type="text" name="name"><br><br>
			Buying Price <br><input id="text" type="price" name="b_price"><br><br>
			Selling Price <br><input id="text" type="price" name="s_price"><br><br>
			<input type="checkbox" ><span>Display</span><br><br>

			<input id="button" type="submit" value="Save">
			<a href="plist.php">Show List</a><br><br>

		</fieldset>
		</form>
		

</body>
</html>