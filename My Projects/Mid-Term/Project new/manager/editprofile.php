<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Profile</title>
</head>

<body>
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
                    <legend><b>EDIT PROFILE</b></legend>
                    <form action="editinfo.php" method="post">
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td>
                                    <input type="text" name="changeName">
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                    <input type="text" name="changeEmail">
                                </td>

                            </tr>
                            <tr>
                                <td> Gender : </td>
                                <td>
                                    <input type="radio" name="radio" value="male">Male
                                    <input type="radio" name="radio" value="female">Female
                                    <input type="radio" name="radio" value="other">Other
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                    <input type="text" name="changeDOB">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    
                                </td>
                            </tr>

                        </table>
                    </form>
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
