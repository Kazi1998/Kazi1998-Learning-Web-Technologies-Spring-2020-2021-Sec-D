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
        
            <td width="70%">
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
 <fieldset>
        <legend style="font-family: calibri;">PROFILE PICTURE</legend>
        <img  align="right" src="user.png" height="90px">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Upload">
            </form>
        
        </fieldset>
        <?php
            if(isset($_POST['submit']))
            {
                $file = $_FILES['file'];
                
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];

                $fileEXT = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileEXT));

                $allowed = array('jpeg','jpeg','png');

                if(in_array($fileActualExt, $allowed))
                {
                    if($fileError === 0)
                    {
                        if($fileSize < 4000)
                        {
                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                            $fileDestination = 'uploads/';
                            move_uploaded_file($fileDestination, $fileNameNew);
                        }
                        else
                        {
                            echo "Your file is too big! Not more than 4MB";
                        }
                    }
                    else
                    {
                        echo "Erro on uploading your file!";    
                    }
                }
                else
                {
                    echo "You cannot upload this type of file!";
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