<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Home Automation System</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <script src="https://kit.fontawesome.com/1c2ecd6357.js" crossorigin="anonymous"></script>
        <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #113f67;
  color: white;
}



</style>
    </head>
</head>
<body>
    <header>
		<h1>Home Automation System</h1>
		<nav>
			<ul>
				<li><a href="home-producer.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
                <li><a href="../logout.php">Logout</a></li>

			</ul>
		</nav>
	</header>



<main>
	<h3 style="text-align:center">User has these devices:</h3>
<div class="product-container">
                <a href="#"><div class="product-box" hover="">
                <i class="fa-solid fa-lightbulb"></i>                   
                    <h3>Light Bulb</h3>
                    
                </div></a>

                <a href="#"><div class="product-box">
                <i class="fa-solid fa-temperature-three-quarters"></i>
                    <h3>Thermostat Sensor</h3>
                
                    
                </div></a>
                <a href="#"><div class="product-box">
                <i class="fa-solid fa-house-lock"></i>
                    <h3>Smart Lock</h3>
                
                </div></a>
                
                
            </div>
    
    <div>



    </div>



</main>
<br>
<br>
<br>

<table id="customers" style="margin: auto;">
  <tr>
    <th>User 1's Products</th>
    <th>ON / OFF</th>
    <th>Last Update</th>
  </tr>
  <tr>
    <td>Lightbulb</td>
    <td>ON</td>
    <td>06.05.2023 23:15</td>
  </tr>
  <tr>
    <td>Thermostat</td>
    <td>ON</td>
    <td>06.05.2023 23:15</td>
  </tr>
  <tr>
    <td>Smartlock</td>
    <td>OFF</td>
    <td>06.05.2023 23:15</td>
  </tr>
  
  
</table>





    
</body>
</html>
