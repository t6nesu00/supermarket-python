<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>supermarket python</title>
	<!-- css links -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>supermarket python</title>
	<!-- css links -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
    <!-- display error message -->
	<div style="align: center;">
    <?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
	?>			
    </div>

	<!-- container of the page -->
	
<!--content-->
<header id="contact" class="text-black">
    <div class="container text-center">
            <h1>Contact us!</h1>
            <p class="lead"> We are constantly trying to help our customers as best as we can. <br>
                Yet if you have something to ask, we're more than happy to help you!
            </p>
      
    </div>
  </header>


  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <form action="/post" method="post">
            <input class="form-control" name="name" placeholder="Name..." /><br />
            <input class="form-control" name="phone" placeholder="Phone..." /><br />
            <input class="form-control" name="email" placeholder="E-mail..." /><br />
            <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
            <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
          </form>
      </div>
      <div class="col-md-4">
        <b>Customer service:</b> <br />
        Phone: +358 12345678<br />
        E-mail: <a href="mailto:supermarketpython@gmail.com">supermarketpython@gmail.com</a><br />
        <br /><br />
        <b>Headquarter:</b><br />
        Supermarket Python, <br />
        Kotkantie 1<br />
        Oulu, Finland<br />
        Phone: +1 145 000 101<br />
        <a href="mailto:supermarketpyhton@gmail.com">supermarketpython@gmail.com</a><br />
    
    
      </div>
    </div>
    
    </div>
    

	<!-- container of the page -->
<div class="footer-section">
	<?php include 'footer.php'; ?>
</div>
	
</body>
</html>