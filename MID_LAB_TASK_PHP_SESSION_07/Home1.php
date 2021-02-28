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
        <h1 style="font-size:50px;text-align: center;">
        </h1>
        <hr class="line">
        <div class="about">
            <p style="font-size: 20px; translate: 7%;">Welcome Bob</p>
        <tr>
            <td colspan="2">
<table  align="left"  >
    <tr>
        
            <td width="100%">
                <label><b>Account</b></label>
<hr>
                <table> 
                <tr>
                    <td>
                <ul>
                    <ol>
    <li><a href="#">Dashboard</a></li>
    <li><a href="viweprof.php">View Profile</a></li>
    <li><a href="#">Edit Profile</a></li>
    <li><a href="#">Change Profile picture</a></li>
    <li><a href="Change password.php">Change Password</a></li>
    <li><a href="LogIn.php">Logout</a></li>
</ol>
</ul>
</td>
</table>
        </div>
        
    <?php include('Footer.php');?>
    </body>
</html>