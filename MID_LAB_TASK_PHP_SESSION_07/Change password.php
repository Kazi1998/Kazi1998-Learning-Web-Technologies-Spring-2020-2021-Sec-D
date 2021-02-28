<!DOCTYPE html>
<html>
<head>
    <title>LOGGED IN DASHBOARD</title>
</head>
    <style>
        body
        {
            background: white;
            width: 100%;
            text-align: justify;
        }
        div.about
        {
            width: 710px;
            display: inline-block;
            text-align: right;
            margin: 20px;
            
        }
        div.information
        {
            font-family: Calibri;
            width: 1250px;
            text-align: right;
        }
    </style>
    <body>
    <?php include('Header1.php');?>
        
            <td colspan="2">
<table  align="left"  >
    <tr>
        
            <td width="69%">
                <label><b>Account</b></label>
<hr>
                <table> 
                <tr>
                    <td>
                <ul>
                    <ol>
    <li><a href="Home1.php">Dashboard</a></li>
    <li><a href="View profile.php">View Profile</a></li>
    <li><a href="Edit Profile.php">Edit Profile</a></li>
    <li><a href="change.php">Change Profile picture</a></li>
    <li><a href="Change password.php">Change Password</a></li>
    <li><a href="LogIn.php">Logout</a></li>
</ol>
</ul>
</td>
</table>
<td>
                <table align="center">
                    <tr>
                        <td>
                            <form  >
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">CHANGE PASSWORD</legend>

    <div class="pp">

    <label>Current Password : </label>
    <input type="text" id="currpword" name="currpword" ><br><br>

    <label style="color: green;">New Password : </label>
    <input type="text" id="npword" name="npword" ><br><br>

    <label style="color: red;">Retype New Password : </label>
    <input type="text" id="Rnpword" name="Rnpword" ><br>

    </div>

    <style>
        .pp label
        {
            width: 170px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>


    <hr><br>

    <input type="submit" name="submit" id="submit" value="Submit">

</fieldset>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if(isset($_POST['submit']))
        {
            $currpword = $_POST['currpword'];
            $npword = $_POST['npword'];
            $Rnpword  = $_POST['Rnpword'];
            if($currpword == $npword)
            {
                echo "Please use a New Password!";
            }
            if($Rnpword != $npword)
            {
                echo "Your New Password doesn't match!";
            }
            else
            {
                echo "Your Password has been changed!";
            }
        }
    }   
?>

</table>
</td>
</tr>
</td>
</tr>   
</table>
</td>
</tr>
        </div>
        
    <?php include('Footer.php');?>
    </body>
</html>