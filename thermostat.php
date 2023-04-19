
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Home Automation System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</head>
<body>
    <header>
		<h1>Home Automation System</h1>
		<nav>
			<ul>
				<li><a href="homeconsumer.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>



<main>
    <div class="product-container">
        <div class="product-box">
            <h3>Thermostat</h3>
            <button class="on-off-btn">ON</button>
            <div class="slider-container">
                <input class="slider" type="range" min="0" max="100">
                <span class="slider-value">50</span>
            </div>
        
        </div>
    </div>
    
    <div>
<ul>
    <li>
        Spesifications of the thermostat
    </li>
    <li>
        Spesifications of the thermostat
    </li>
</ul>


    </div>



</main>

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
    
    <script>// Get the slider input element
        var slider = document.querySelector('.slider');
        
        // Add an event listener for the input event
        slider.addEventListener('input', function() {
            // Get the current value of the slider
            var sliderValue = this.value;
        
            // Update the slider value display
            var sliderValueDisplay = this.nextElementSibling;
            sliderValueDisplay.innerHTML = sliderValue;
        });</script>


</body>
</html>
