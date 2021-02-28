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
        <fieldset >
            <legend >PROFILE</legend>
             
             <table border="2">
                
                        <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    
                         </tr>
                         <tr>
                            <td>Email</td>
                            <td><input type="email" name="email"></td>
                         </tr>
                         <tr>
                             <td>Gender:</td>
                     <td>
                            <input type="radio" id="male" name="gender" value="male"><label>Male</label>
                            
                            <input type="radio" id="female" name="gender" value="female"><label>Female</label>
                            
                            <input type="radio" id="other" name="gender" value="other"><label>Other</label>            
            </td>
        </tr>
<tr>
    
        <td>Date of Birth:</td>
  <td><input type="date" name="dob"></td>
                        </tr>
                   
                            <tr>
                                <td>
                                <input type="submit" name="submit">
                            </td>
                            </tr>
                            </td>
</tr>
                        </fieldset>
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