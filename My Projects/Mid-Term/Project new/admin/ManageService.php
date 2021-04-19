<!DOCTYPE html>
<html>
<head>
	<title>Manage Service</title>
</head>
<body>
	<?php
	
	$title = "Home Page";
	include('header.php');
?>



	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="../D.jpg" height="100px" width="150px">
<table  align="right"  ><br> Managing Service Area</center>
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
					<li><a href="AdminDashboard.php">Dashboard</a></li>
	<li><a href="UserList.php">User List</a></li>
	<li><a href="OrderList.php">Order List</a></li>
	<li><a href="ManageMenu.php">Manage Menu</a></li>
	<li><a href="SupplierList.php">Supplier List</a></li>
	<li><a href="DeliveryTeam.php">Delivery Team</a></li>
	<li><a href="ManageService.php">Manage Service</a></li>
	<li><a href="logout.php">LogOut</a></li>
</ol>
</ul>
</td>
</table>
			<td>
		
		<center><form method="POST" action="../controller/sacheck.php" >
		<fieldset >
			<legend >Service Area</legend>
			 
			 <table>
				
                         <tr>
                         	<td>Service Area</td>
                         	<td><input type="radio" name="area" value="Inside-Dhaka">
					    <label class="Inside-Dhaka">Inside-Dhaka</label>

					    <input type="radio" name="area" value="Outside-Dhaka">
					    <label class="Outside-Dhaka">Outside-Dhaka</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Service Vehicle</td>
                         	<td><input type="radio" name="vehicle" value="Bicycle">
					    <label class="Bicycle">Bicycle</label>

					    <input type="radio" name="vehicle" value="Motorcycle">
					    <label class="Motorcycle">Motorcycle</label>

					    <input type="radio" name="vehicle" value="Mini-van">
					    <label class="Mini-van">Mini-van</label>

							<tr>
                         	<td>Service Charge</td>
                         	<td><input type="text" name="price"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowSAList.php">Show</a>
							
						</td>
					</tr>
                     </fieldset>
                 </form>
                 </table>

</center>
</td>
         <tr>
			<td colspan="2" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>