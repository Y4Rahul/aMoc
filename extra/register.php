<!doctype html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registeration Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>


  <body>
  	<div class="container">
  		<header class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
  			<h1>Registeration Form</h1>
  			<jr/>
  		</header>


      <div class=" col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">

      <!--form starts here -->
      <form class="form-horizontal" action="register.php" method="post">
  			<div class="form-group ">
  				<label>Name</label>
  				<input type="text" class="form-control" placeholder="Type your name.." required id = "name">
  			</div>

  			<div class="form-group ">
  				<label>Class</label>
  				<input type="email" class="form-control form-control1" placeholder="Enter your class.." id = "class">
  			</div>

  			<div class="form-group ">
  				<label>Email-id</label>
  				<input type="email" class="form-control form-control1" placeholder="Your college mail-id" required id = "email">
  			</div>

  			<div class="form-group ">
  				<label>Contact No.</label>
  				<input type="number" class="form-control form-control1" placeholder="Enter your contact no.." required id = "contact">
  			</div>

  			<input class="btn btn-default " type="submit" value="Submit">

  		</form>
      <!-- form ends here -->

      </div>
  	</div>
  </body>
