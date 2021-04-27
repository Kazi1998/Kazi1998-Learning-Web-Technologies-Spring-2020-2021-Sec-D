<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Supplier Profile</title>
</head>

<body>
<form method="POST" action="">
<?php

            include '../dbcon.php';

            $id = $_GET['userid'];
            $selectquery = "select * from user where userid='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);

            $updatequery = "update user set userid=$id, name='$name', username='$username', email='$email' where userid=$id";
            $query = mysqli_query($con,$updatequery);
            
            if($query)
            {
                ?>
                    <script>
                        alert('Update Complete!');
                    </script>
                <?php
                header('location:userlist.php');
            }
            else
            {
                ?>
                    <script>
                        alert('Update Incomplete! DO it Again');
                    </script>
                <?php
            }

            }
        ?>
<html>
<head>
    <title>Edit User List</title>
</head>
<body>
    <table border="1" align="center" width="100%">
        <tr>
            <td colspan="3">
             <center><img src="E.png" height="100px" width="150px">
<table  align="right"  ><br>  Update User List</center>
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
        <li><a href="admindashboard.php">Dashboard</a></li>
        <li><a href="adminProfile.php">View Profile</a></li>
        <li><a href="adcpass.php">Change Password</a></li>
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
            <legend >Update User List</legend>
             
             <table>
                
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $result['userid'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Name : </td>
                                <td>
                                <input type="text" name="name" value="<?php echo $result['name'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>User Name : </td>
                                <td>
                                <input type="text" name="username" value="<?php echo $result['username'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                <input type="text" name="email" value="<?php echo $result['email'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td>
                                <input type="text" name="gender" value="<?php echo $result['gender'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                <input type="text" name="dob" value="<?php echo $result['dob'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Update">
                                    
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







