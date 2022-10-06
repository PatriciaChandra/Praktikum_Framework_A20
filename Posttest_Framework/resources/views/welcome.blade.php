<?php
$conn = mysqli_connect("localhost", "root", "", "cake_bakery");
$select_sql = "SELECT *FROM cakes";
$result = $conn->query($select_sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Cia's Cake Bakery</title>
</head>

<style>
    body{
        background-color : #FCA3B7;
    }
</style>

<body>
	<header>
		<div class="container">
			<div class="sticky">
				<h2>Cia's Bakery Home Page</h2>
				<ul>
					<li><a href=" ">About Us</a></li>
					<li><a href=" ">Cakes Menu</a></li>
					<li><a href=" ">Social Media</a></li>
				</ul>
		</div>
	</header>

	<footer>
		<div class="container">
			<h6>Patricia Chandra - Informatika A - 2009106030</h6>
		</div>
	</footer>
</body>
</html>
