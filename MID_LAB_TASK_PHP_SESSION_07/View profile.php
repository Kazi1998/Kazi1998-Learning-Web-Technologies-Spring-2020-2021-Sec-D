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
    <li><a href="#">Dashboard</a></li>
    <li><a href="View profile.php">View Profile</a></li>
    <li><a href="#">Edit Profile</a></li>
    <li><a href="#">Change Profile picture</a></li>
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
             
             <table  >
                
                        <tr>
                        <td>Name:</td>
                        <td>Bob
                        </td>
                        <td rowspan="2" align="left" >
                <img  align="right" src="user.png" height="90px">
            
    <a href="change.php">Change</a>
</td>
                         </tr>
                         <tr>
                            <td>E-mail</td>
                            <td>bob@aiub.edu</td>
                         </tr>
                         <tr>
                             <td>Gender:</td>
                     <td>
                            <label>Male</label>            
            </td>
        </tr>
<tr>
    
        <td>Date of Birth:</td>
  <td><span>19/09/1998</span></td>
                        </tr>
                   
                            <tr>
                                <td>
                                <a href="Edit Profile.php">Edit Profile</a>
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