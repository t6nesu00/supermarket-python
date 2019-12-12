<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FORM
		$name = $_POST['name'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
		$address = $_POST['address'];
		$businessid = $_POST['businessid'];
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
		if($businessid == '')
            $errMsg = 'Please provide your Business ID';
		if($usertype == '')
			$errMsg = 'Mention one type';
		
        

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO users (name, username, password, email, address, businessid, usertype) VALUES (:name, :username, :password, :email, :address, :businessid, :usertype)');
				$stmt->execute(array(
					':name' => $name,
					':username' => $username,
                    ':password' => $password,
                    ':email' => $email,
                    ':address' => $address,
					':businessid' => $businessid,
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
<head><title>Register</title>
<!-- css link for boostrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div>
		<div style=" border: solid 1px #006D9C;">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<header id="contact" class="text-black">
          <div class="container text-center">
                  <h1>Join us!</h1> <br>
                  <h3>Be a Robin Hood</h3> <br>
                  <p class="lead"> 
                    You can join our community via this form below. Please make sure you spell everything correclty!
                  </p>
            
          </div>
        </header>
			<div style="margin: auto; width: 50%;">
				<form action="" method="post">
					Name:
					<input type="text" name="name" placeholder="Name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>" autocomplete="off" class="box"/><br /><br />
					Username:
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					Password:
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />
                    Email:
					<input type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" class="box" /><br/><br />
                    Address:
					<input type="text" name="address" placeholder="Address of Organization" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>" class="box" /><br/><br />
					<div>
					Business Id:
					<input type="int" name="businessid" placeholder="Business Identity Code" value="<?php if(isset($_POST['businessid'])) echo $_POST['businessid'] ?>" class="box" /><br/><br />
					</div>
					<!--
					<input type="radio" name="usertype" placeholder="(Supermarket, Organization or Farmer)" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'] ?>" autocomplete="off" class="box"/><br /><br />
					-->
					Type of your Organization:
					<input type="radio" name="usertype"
					<?php if (isset($usertype) && $usertype=="supermarket") echo "checked";?>
					value="supermarket">&nbsp; Supermarket |
					<input type="radio" name="usertype"
					<?php if (isset($usertype) && $usertype=="organization") echo "checked";?>
					value="organization">&nbsp; Organization |
					<input type="radio" name="usertype"
					<?php if (isset($usertype) && $usertype=="farmer") echo "checked";?>
					value="farmer">Farmer
					<div class="form-group">	
					<input type="submit" name='register' value="Register" class='btn btn-danger'/>
					</div>
				</form>
				<div class="back">
					<a href="index.php">Back to home page</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Supermarket Python 2019</p>
      <!-- Social media links here-->
	  <a href="#" class="fa fa-facebook"></a>
    </div>
    <!-- /.container -->
  </footer>
	<!-- Javascript plugins for bootstrap 4 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>