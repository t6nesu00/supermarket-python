<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];
		//user type selection
		//$usertype = $_POST['usertype'];

		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';
		// for user type
		//if($usertype == '')
		//	$errMsg = 'Which group are you? Select at one.';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, name, username, password, email, address, usertype FROM users WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "User $username not found.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['name'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['usertype'] = $data['usertype'];

						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'Something went wrong.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head><title>Login</title></head>
	
	<!-- css link for boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="" placeholder="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/>
					</div>
				
					<div class="form-group">
						<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" />
					</div>
					<!--
					<div class="form-group">
						<label>We are: </label>
						<input type="radio" name="usertype" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'] ?>" autocomplete="off" class="box" />&nbsp; Supermarket | 
						<input type="radio" name="usertype" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'] ?>" autocomplete="off" class="box" />&nbsp; Organization |
						<input type="radio" name="usertype" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'] ?>" autocomplete="off" class="box" />&nbsp; Farmers 
					</div>
					-->
					<div class="form-group">
					<input type="submit" name='login' value="Login" class="btn btn-danger"/>
					</div>
					<br />
				</form>
			</div>
		</div>
	</div>
	<!-- Javascript plugins for bootstrap 4 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
