<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KomikNesan</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KomikNesan	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/komik_online">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Daftar Komik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="false">login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Content-->
	
	<?php 
		$page = @$_GET['page'];
		if($page == ""){
			include "views/home.php";
		}
	?>

<!--Footer-->
	<div class="container" style="padding-top: 400px;">
		<p style="text-align: center;">&copy; 2020 KomikNesan</p>
	</div>
<!--Javascript-->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>