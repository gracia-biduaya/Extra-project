<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Admin Sales</title>
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
    <h2>Adding Sales</h2>
		
	 	<form action="">
	 		<div class="form-row">

	 			<div class="form-group col-6">
		    	<label for="article name">Product Name:</label>
		      	<input type="text" class="form-control" id="articlname" placeholder="Enter Name" name="articlName">

		      	<label for="article quantity">Quantity:</label>
		        <!-- <input type="number" class="form-control" id="articlqty" placeholder="Enter Quantity" name="articlQty" > -->
		        <td >
		        	<select class="form-control" id="articlqty" name="articlQty">
						<option>1</option>
						<option>2</option>	
						<option>3</option>	
						<option>4</option>	
					</select>
				</td>

		        <label for="article price">Price:</label>
		        <input type="number" class="form-control" id="articlprice" placeholder="Enter Price" name="articlPrice">

		    	</div>
	 		</div>
	 		<a href="" name="submission" type="submit" class="btn btn-primary">Submit Sale</a>
      <br>
      <br>
      <a href="adminpage.php" type="submit" name="Comfirm" id="comfimit" style="padding: 8px;">Return</a>
          	
	  	</form>
	</div>


</body>
</html>


