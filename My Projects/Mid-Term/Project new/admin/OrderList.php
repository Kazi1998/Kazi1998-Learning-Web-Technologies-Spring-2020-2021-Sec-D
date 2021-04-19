<!DOCTYPE html>
<html>
<head>
	<title>Order List</title>
</head>
<body>
	<?php
	
	$title = "Home Page";
	include('header.php');
?>



	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="../O.jpg" height="100px" width="150px">
<table  align="right"  ><br> This is an Order List</center>
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
		
		<center><form method="POST" action="../controller/ocheck.php" >
		<fieldset >
			<legend >Raw Materials Info</legend>
			 
			 <table>
				
						<tr>
						<td>Vegitable</td>
						<td><input type="radio" name="veg" value="Potato">
					    <label class="Potato">Potato</label>

					    <input type="radio" name="veg" value="Carrot">
					    <label class="Carrot">Carrot</label>

					    <input type="radio" name="veg" value="Papaya">
					    <label class="Papaya">Papaya</label>

					    <input type="radio" name="veg" value="Capsicum">
					    <label class="Capsicum">Capsicum</label>

					    <input type="radio" name="veg" value="Cucumber">
					    <label class="Cucumber">Cucumber</label>

					    <input type="radio" name="veg" value="Lime">
					    <label class="Lime">Lime</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Veg. Quantity</td>
                         	<td><input type="text" name="q1"></td>
                         </tr>
                         <tr>
						<td>Protine</td>
						<td><input type="radio" name="pro" value="Chicken">
					    <label class="Chicken">Chicken</label>

					    <input type="radio" name="pro" value="Beef">
					    <label class="Beef">Beef</label>

					    <input type="radio" name="pro" value="Mutton">
					    <label class="Mutton">Mutton</label>

					    <input type="radio" name="pro" value="Duck">
					    <label class="Duck">Duck</label>

					    <input type="radio" name="pro" value="Rui-fish">
					    <label class="Rui-fish">Rui-fish</label>

					    <input type="radio" name="pro" value="Prawn">
					    <label class="Prawn">Prawn</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Pro. Quantity</td>
                         	<td><input type="text" name="q2"></td>
                         </tr>
                         <tr>
						<td>Spices</td>
						<td><input type="radio" name="spi" value="Chili-powder">
					    <label class="Chili-powder">Chili-powder</label>

					    <input type="radio" name="spi" value="Turmeric-powder">
					    <label class="Turmeric-powder">Turmeric-powder</label>

					    <input type="radio" name="spi" value="Garlic">
					    <label class="Garlic">Garlic</label>

					    <input type="radio" name="spi" value="Ginger">
					    <label class="Ginger">Ginger</label>

					    <input type="radio" name="spi" value="Garam-masala">
					    <label class="Garam-masala">Garam-masala</label>

					    <input type="radio" name="spi" value="Green cardamom">
					    <label class="Green cardamom">Green cardamom</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Spi. Quantity</td>
                         	<td><input type="text" name="q3"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowOList.php">Show</a>
							
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