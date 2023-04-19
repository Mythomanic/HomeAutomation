<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login-producer.php");
        exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Automation System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Home Automation System</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>

	
	<main>


	<section>
			<h2 style="text-align:center">Devices</h2>
			<div class="product-container">
				<a href="devicesProfile.php"><div class="product-box">
					<h3>Light bulb</h3>
				</div></a>
				<a href="devicesProfile.php"><div class="product-box">
					<h3>Thermostat</h3>
				</div></a>
				<a href="devicesProfile.php"><div class="product-box">
					<h3>Smart Lock</h3>
				</div></a>
				<a href="devicesProfile.php"><div class="product-box">
					<h3>Security Camera</h3>
				</div></a>
                <a href="devicesProfile.php"><div class="product-box">
					<h3>Add New Device</h3>
                    
				</div></a>
			</div>
		</section>

<hr><br>

		
		<section>
			<h2 style="text-align:center">Users</h2>
			<div class="product-container">
				<a href="usersProfile.php"><div class="product-box">
					<h3>User 1</h3>
				</div></a>
				<a href="usersProfile.php"><div class="product-box">
					<h3>User 2</h3>
				</div></a>
				<a href="usersProfile.php"><div class="product-box">
					<h3>User 3</h3>
				</div></a>
				<a href="usersProfile.php"><div class="product-box">
					<h3>User 4</h3>
				</div></a>
                <a href="usersProfile.php"><div class="product-box">
					<h3>Add New User</h3>
                    
				</div></a>
			</div>
		</section>

	</main>
	
	<footer>
		<p>&copy; 2023 Home Automation System</p>
	</footer>
</body>
</html>