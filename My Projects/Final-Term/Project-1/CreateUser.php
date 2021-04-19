<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if(!empty($name) && !empty($password) && !empty($type) && !is_numeric($name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into multilog (name,user_name,password,repass,email,type) values ('$name','$user_name','$password','$repass','$email','$type')";

			mysqli_query($con, $query);

			header("Location: CreateUser.php");
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
	<title>Create New User</title>
</head>
<body>

	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="I.png" height="100px" width="150px">
<table  align="right"  ><br> Create New User</center>
	<tr>
			</td>
			</tr>
	</table>
</td>
</tr>
			</td>
		</tr>

		<tr>
			<td width="35%">
				<label><b><center>Menubar</center></b></label>
<hr>
				<table>	
				<tr>
					<td>
				<ul>
					<ol>
		<li><a href="index.php">Dashboard</a></li>				
		<li><a href="adminProfile.php">View Profile</a></li>
		<li><a href="adcpass.php">Change Password</a></li>
		<li><a href="CreateUser.php">Create New User</a></li>
		<li><a href="userlist.php">View User List</a></li>
		<li><a href="OrderList.php">Order List</a></li>
		<li><a href="ManageMenu.php">Manage Menu</a></li>
		<li><a href="ManageService.php">Manage Service</a></li>
		<li><a href="logout.php">Logout</a></li>
</ol>
</ul>
</td>
</table>
			<td colspan="2"  height="190px">
	
		
		<form method="post">
			<center>
					<fieldset>
						<legend>CREATE NEW USER</legend>

			<label> NAME: </label>
			<input id="text" type="text" name="name"><br><br>
			<label> USERNAME: </label>
			<input id="text" type="text" name="user_name"><br><br>
			<label> PASSWORD: </label>
			<input id="text" type="password" name="password"><br><br>
			<label> RE-PASSWORD: </label>
			<input id="text" type="password" name="repass"><br><br>
			<label> E-MAIL: </label>
			<input id="text" type="email" name="email"><br><br>
			 <label> USER TYPE: </label>
			<select name="type">
			<option value="-1"> select user type</option> 
			<option value="Admin">Admin</option>
			<option value="Manager">Manager</option>
			<option value="Supplier">Supplier</option>
			<option value="Delivery">Delivery</option>
		</select><br><br>

			<input id="button" type="submit" value="Create">

			</fieldset>
		</center>
		</form>
		</td>
         <tr>
			<td colspan="3" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>


</body>
</html>