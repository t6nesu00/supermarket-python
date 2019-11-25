<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>supermarket python</title>
</head>
<body>
    <div style="align: center;">
    <?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>PDO MySQL</b></div>
			<div style="margin: 15px">
				Welcome guest !
				<br>
				<a href="login.php">Login</a> <br>
				<a href="register.php">Register</a> <br>
				<a href="forgot.php">Forgot Password</a>
			</div>  
    </div>
    
</body>
</html>