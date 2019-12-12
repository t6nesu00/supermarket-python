<?php
	require '../../config.php';
	if(empty($_SESSION['name']))
		header('Location: ../../login.php');
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
		<div class="container">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<?php include 'header.php'; ?><br><br>
			<div style="margin: 15px">
				Welcome, How are you <b><?php echo $_SESSION['name']; ?></b> ? <br>
				<div class="container">
				<div class="row">
					<div class="col">
					<h3>This is organization's dashboard.</h3>
					<p>It needs to be developed. It will have all the features that all the organizations are allowed to performe.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
					Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
					printer took a galley of type and scrambled it to make a type specimen book. It has survived 
					not only five centuries, but also the leap into electronic typesetting, remaining essentially 
					unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
					Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
					versions of Lorem Ipsum.

					Why do we use it?
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at 
					its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to 
					using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>
					</div>

					<div class="col">
					<img src="../../Img/restaurant.jpg" href="logo" style="width: 80%;">
					<h3>XYZ restaurant</h3>
					</div>
				</div>
				</div>
				<p>It needs to be developed. It will have all the features that all the organizations are allowed to performe.</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
				Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
				printer took a galley of type and scrambled it to make a type specimen book. It has survived 
				not only five centuries, but also the leap into electronic typesetting, remaining essentially 
				unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
				Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
				versions of Lorem Ipsum.

				Why do we use it?
				It is a long established fact that a reader will be distracted by the readable content of a page when looking at 
				its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem 
				Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
				</p>
			</div>
		</div>
	</div>
	<div class="footer-section">
		<?php include '../../footer.php'; ?>
	</div>
	<!-- JS script for bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
