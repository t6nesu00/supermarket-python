<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$name = $_POST['name'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
		$usertype = $_POST['usertype'];

		if($name == '')
			$errMsg = 'Give your organization name';
		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
            $errMsg = 'Enter password';
        if($email == '')
            $errMsg = 'Please provide your official email address';
        if($address == '')
            $errMsg = 'Please provide address of your organization';
        if($usertype == '')
			$errMsg = 'Mention one type';
        

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO users (name, username, password, email, address, usertype) VALUES (:name, :username, :password, :email, :address, :usertype)');
				$stmt->execute(array(
					':name' => $name,
					':username' => $username,
                    ':password' => $password,
                    ':email' => $email,
                    ':address' => $address,
					':usertype' => $usertype
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registration successfull. Now you can <a href="login.php">login</a>';
	}
?>

<html>
<head><title>Register</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Register</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="name" placeholder="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />
                    <input type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" class="box" /><br/><br />
                    <input type="text" name="address" placeholder="Address of Organization" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>" class="box" /><br/><br />
					<input type="text" name="usertype" placeholder="(Mention either Supermarket, Organization or Farmer)" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='register' value="Register" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>