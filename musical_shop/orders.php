<!DOCTYPE html>
<html>
<head>
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
		      
		        <label for="date">Pick up Date and time:</label>
		        <input type="date" class="form-control" id="pickdate" name="PickDate">
	    		</div>
	 		</div>

	    	<button name="confirmation" type="submit" class="btn btn-primary">Comfirm order</button>
	  	</form>
	</div>

</body>
</html>


