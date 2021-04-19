<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>View Profile</title>
</head>

<body>
<?php

	$title = "Home Page";
	include('../admin/header.php');
?>
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
                <img src="../logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="../managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="../managerdashboard.php">Back </a>
                </div>
            </td>
        </tr>


        <tr>
            <td align="center" rowspan="3" >
			<p><b>MENU</b></p>
			<hr>
			<ul>
            <li> <a href="../manager/managerviewprofile.php">View Profile</a></li>
            <li> <a href="../manager/changepassword.php">Change password</a></li>
            <li> <a href="../manager/manageinformation.php">Managers information</a></li>
            <li> <a href="../manager/managerresponsibility.php">Manager responsibilities</a></li>
			<li> <a href="../manager/admininformation.php">Admin Information</a></li>
			<li> <a href="../manager/supplierpreserve.php">Supplier preserve</a></li>
            <li> <a href="../manager/deliverypreserve.php">Delivery preserve</a></li>
            <li> <a href="../manager/oderlist.php">Orderlist</a></li>
			<li> <a href="../manager/account.php">Account</a></li>
			<li> <a href="../manager/inventory.php">Inventory</a></li>
					
					</ul>
            </td>
            <td width="65%" rowspan="3">
               <fieldset>
               <legend><b>Profile</b></legend>
               <table>
                   <tr>
                   <td>Name : Sheuly Akter </td>
                       <td></td>
                       <td rowspan="5" >
                       <img width="40%" src="../user.png"><br>
                           <a href="changepropic.php">Change Profile Picture</a>
                       </td>
                   </tr>
                   <tr>
                   <td>Email : sa@gmail.com </td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                   <td> Gender : Female </td>
                       <td> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Date of Birth : 01-07-2000 </td>
                       
                       <td></td>
                    </tr>
                   <tr>
                   <td>
                   <a href="../manager/editprofile.php">Edit Profile</a>
                   </td>

                       <td></td>
                       <td></td>
                   </tr>

               </table>
           </fieldset>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
        <tr>
            <td align="center" colspan="2" >
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
	
</body>

</html>
