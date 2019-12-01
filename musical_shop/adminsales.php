<!DOCTYPE html>
<html>
<head>
	<title>Admin interface</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

  	<!-- Bootstrap core CSS -->
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<!-- Custom styles for this template -->
  	<link href="css/shop-homepage.css" rel="stylesheet">

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

/*span{
  border: 1px solid ;
  text-align: left;
  padding: 3px;
  background-color: bleu ;

}*/
</style>
</head>
<body>
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
	<h2>Sales made</h2>

<table>
  <tr>
    <th>Id</th>
    <th>product</th>
	<th>Quantity</th>
	<th>Unit price</th>

  <tr>
    <td>1</td>
  <td> Guitar</td>
  <td> 2</td>
  <td>1560</td>
  </tr>
</table>

<span>
  <br>
  <a href="adminsert.php" type="submit" name="Adds" id="adds" style="padding: 8px;position: absolute;right: 10px">Add Sales</a>
  <a href="adminpage.php" type="submit" name="Rtrn" id="rtrn" style="padding: 8px;">Return</a>
</span>

</body>
</html>