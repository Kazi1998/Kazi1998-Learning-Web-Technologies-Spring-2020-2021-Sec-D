<?php 
include_once('connection.php'); 
$query="select * from products"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Database Search </title> 
	</head> 
	<body> 
		<form action="search.php" method="POST">

	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Search Product</h2></th>

		</tr>
		 <th colspan="5"><input type="text" name="search" placeholder="search">
		 <input type="submit" name="search" value="Search"></th>
		</tr>
			  <th> Name </th> 
			  <th> Buying Price </th> 
			  <th> Selling Price </th> 
			  <th  colspan="2">ACTION</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['b_price']; ?></td> 
		<td><?php echo $rows['s_price']; ?></td>
		<td><a href="edit.php?pi=$result[product_id]"> EDIT</td>
		<td><a href="delete.php?pi=$result['product_id']"> DELETE</td>
		</tr> 

	<?php 
               } 
          ?> 

	</table> 
	<center><a href="plist.php">Back</a><br></center>
 	</form>
	</body> 
	</html>