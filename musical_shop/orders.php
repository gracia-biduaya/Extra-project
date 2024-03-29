<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>Orders</title>
	<!-- Bootstrap core CSS -->
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- Custom styles for this template -->
  	<link href="css/shop-homepage.css" rel="stylesheet">
</head>

<body>
 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#index.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminlogin.php">Admin login</a>
          </li>
          <li>
            <a class="fa fa-shopping-cart" href="cart.php" style="font-size:36px;color:red"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	<div class="container">
    <h2>Placing Order</h2>
		
	 	<form action="">
	 		<div class="form-row">

	 			<div class="form-group col-6">
		    	<label for="custname">Name:</label>
		      	<input type="text" class="form-control" id="custname" placeholder="Enter Name" name="custName">

		      	<label for="custemail">Email:</label>
		        <input type="email" class="form-control" id="custemail" placeholder="Enter email" name="custEmail">

		        <label for="custPhone">Phone Number:</label>
		        <input type="tel" class="form-control" id="custphone" placeholder="Enter Phone number" name="custPhone">
		      
		        <label for="date">Pick up Date:</label>
		        <input type="date" class="form-control" id="pickdate" name="PickDate">
	    		</div>
	 		</div>

	    	<button name="confirmation" type="submit" class="btn btn-primary">Comfirm order</button>
	  	</form>
	</div>

</body>
</html>


