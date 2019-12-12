<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');

	if(isset($_POST['update'])) {
		$errMsg = '';

		// Getting data from FROM
		$fullname = $_POST['name'];
		$secretpin = $_POST['usertype'];
		$password = $_POST['password'];
		$passwordVarify = $_POST['passwordVarify'];

		if($password != $passwordVarify)
			$errMsg = 'Password not matched.';

		if($errMsg == '') {
			try {
		      $sql = "UPDATE users SET name = :name, password = :password, email = :email, address = :address, usertype = :usertype WHERE username = :username";
		      $stmt = $connect->prepare($sql);                                  
		      $stmt->execute(array(
		        ':name' => $name,
		        ':usertype' => $usertype,
		        ':password' => $password,
		        ':username' => $_SESSION['username']
		      ));
				header('Location: update.php?action=updated');
				exit;

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'updated')
		$errMsg = 'Successfully updated. <a href="logout.php">Logout</a> and login to see update.';
?>

<html>
<head><title>Update</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div>
		<div style=" border: solid 1px #006D9C;">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['name'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Name of Organization <br>
					<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" autocomplete="off" class="box"/><br /><br />
					Username <br>
					<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled autocomplete="off" class="box"/><br /><br />
					Email <br>
					<input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" autocomplete="off" class="box"/><br /><br />
					<br>
                    Address <br>
					<input type="text" name="address" value="<?php echo $_SESSION['address']; ?>" autocomplete="off" class="box"/><br /><br />
					<br>
					Password <br>
					<input type="password" name="password" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					Vafify Password <br>
					<input type="password" name="passwordVarify" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					<input type="submit" name='update' value="Update" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
