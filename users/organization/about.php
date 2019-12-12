<?php
session_start();
error_reporting(0);
	require '../../config.php';
//	if(empty($_SESSION['name']))
	//	header('Location: ../organization.php');
?>

<html>
<head><title>Organization Dashboard</title></head>
	<!-- css links -->
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
	html, body {
		margin: 1px;
		border: 0;
	},

	<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
	</style>
<body>
	<div>
		<div>
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<?php include 'header.php'; ?><br><br>
            	<!-- container of the page -->
			<div style="margin: 15px">
            <header class="text-white">
                <div class="container text-center">
                <img src="../../Img/Supermarket Python New_transparent.png" href="logo">
                </div>
            </header>
            <card id="about">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <h1>Welcome to Supermarket Python</h1>
                    <p class="lead">Food waste is currently an enormous environmental polluter. 
                        More accurately; our world produces enough food waste to feed Europe and Africa combined while not everyone has the resources to satisfy their need in food. <br>
                        <strong>Crazy right?</strong>
                        That was our motivation to find a solution which shares food that otherwise would have been thrown away straight into the bin.</p>
                    
                    </div>
                </div>
                </div>
                <br>
            </card>
            </div>    
	<!-- container of the page -->
	<div class="footer-section">
		<?php include '../../footer.php'; ?>
	</div>
	<!-- JS script for bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>