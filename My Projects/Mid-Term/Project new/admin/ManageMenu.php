<!DOCTYPE html>
<html>
<head>
	<title>Manage Menu</title>
</head>
<body>
	<?php
	
	$title = "Home Page";
	include('header.php');
?>



	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="../M.jpg" height="100px" width="150px">
<table  align="right"  ><br> This is a Restaurant Menu</center>
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
		
		<center><form method="POST" action="../controller/mcheck.php" >
		<fieldset >
			<legend >Food Item Info</legend>
			 
			 <table>
				
						<tr>
						<td>Food Code</td>
						<td><input type="text" name="code">
						</td>
                         </tr>
                         <tr>
                         	<td>Food Item</td>
                         	<td><input type="radio" name="item" value="Fried-rice">
					    <label class="Fried-rice">Fried-rice</label>

					    <input type="radio" name="item" value="Vegitables">
					    <label class="Vegitables">Vegitables</label>

					    <input type="radio" name="item" value="Fried-chicken">
					    <label class="Fried-chicken">Fried-chicken</label>

					    <input type="radio" name="item" value="Chicken-curry">
					    <label class="Chicken-curry">Chicken-curry</label>

					    <input type="radio" name="item" value="Beef-curry">
					    <label class="Beef-curry">Beef-curry</label>

					    <input type="radio" name="item" value="Soup">
					    <label class="Soup">Soup</label>
						</td>
                         </tr>
                         <tr>
                         	<td>F. Price</td>
                         	<td><input type="text" name="p1"></td>
                         </tr>
                         <tr>
                         	<td>Drinks</td>
                         	<td><input type="radio" name="drink" value="Coca-cola">
					    <label class="Coca-cola">Coca-cola</label>

					    <input type="radio" name="drink" value="Pepsi">
					    <label class="Pepsi">Pepsi</label>

					    <input type="radio" name="drink" value="Diet-coke">
					    <label class="Diet-coke">Diet-coke</label>

					    <input type="radio" name="drink" value="Mountain-dew">
					    <label class="Chicken-curry">Chicken-curry</label>

					    <input type="radio" name="drink" value="Diet-pepsi">
					    <label class="Diet-pepsi">Diet-pepsi</label>

					    <input type="radio" name="drink" value="Sprite">
					    <label class="Sprite">Sprite</label>
						</td>
                         </tr>
                         <tr>
                         	<td>D. Price</td>
                         	<td><input type="text" name="p2"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowMList.php">Show</a>
							
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