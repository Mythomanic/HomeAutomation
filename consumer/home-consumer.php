

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Home Automation System</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://kit.fontawesome.com/1c2ecd6357.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<h1>Home Automation System - Consumer Page</h1>
		<nav>
			<ul>
				<li><a href="home-consumer.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Give us feedback</a></li>
                <li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<section>
			<h2>Welcome to Our Home Automation System</h2>
			<p>Our system makes it easy for you to control your home's lighting, temperature, security, and more with the touch of a button. Whether you're at home or away, our system gives you complete control over your home's environment.</p>
		</section>
		
		<section>
			<h2 style="text-align:center">Your Products</h2>
			<div class="product-container">
                <a href="../consumer/devices/lightbulb.php"><div class="product-box">
                <i class="fa-solid fa-lightbulb"></i>                   
                    <h3 style="transform: translate(-50%, -40%)">Light Bulb</h3>
                    <button class="button">Click to manage</button>
                </div></a>

                <a href="../consumer/devices/thermostat.php"><div class="product-box">
                <i class="fa-solid fa-temperature-three-quarters"></i>
                    <h3 style="transform: translate(-50%, -40%)">Thermostat</h3>
                <button class="button">Click to manage</button>
                    
                </div></a>
                <a href="../consumer/devices/smartlock.php"><div class="product-box">
                <i class="fa-solid fa-house-lock"></i>
                    <h3 style="transform: translate(-50%, -40%)">Smart Lock</h3>
                <button class="button">Click to manage</button>
                </div></a>
                <a href="../consumer/devices/camera.php"><div class="product-box">
                <i class="fa-solid fa-video"></i>
                    <h3 style="transform: translate(-50%, -40%)">Security Camera</h3>
                <button class="button">Click to manage</button>
                </div></a>
                <a href=""><div class="product-box">
                <i class="fa-solid fa-plus"></i>
                    <h3 style="transform: translate(-50%, -40%)">Add new product</h3>
                    <button class="button" style="text-decoration:none">+</button>
                
                </div></a>
            </div>
            
            
            
		</section>
	</main>
	
	<footer>
		<p>&copy; 2023 Home Automation System</p>
	</footer>

<script>// Get all the on/off buttons
    var onOffButtons = document.querySelectorAll('.on-off-btn');
    
    // Loop through each button and add a click event listener
    onOffButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get the current button text
            var buttonText = this.innerText;
    
            // Toggle the button text between "ON" and "OFF"
            if (buttonText === "ON") {
                this.innerText = "OFF";
            } else {
                this.innerText = "ON";
            }
        });
    });
    </script>

</body>
</html>

