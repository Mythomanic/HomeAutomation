<?php


    session_start();

    if(isset($_SESSION['id'])  &&  isset($_SESSION['user_name']) ){

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
				<li><a href="homeProducer.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>

	
	<main>
		<section>
			<h2>Device Profile Page</h2>
			
		</section>
		
		<section>
			<h2>Device 1 has these properties</h2>
			<div class="product-container">
					<h3>Device 1</h3>
                    
				</div></a>
				
                
			</div>
		</section>
	</main>
	
	
</body>
</html>

<?php
    }else{
        header("Location: index.php"); 
        exit();

    }
?>