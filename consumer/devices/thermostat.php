<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Automation System</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1c2ecd6357.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    

</head>
<body style="background-color:#bdc2e6">
    <header class="bg-dark text-white text-center py-4">
        <div class="container">
            <h1>Home Automation System - Consumer Page</h1>
            <nav class="mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="../home-consumer.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Give us feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="container py-4">
        <h2 class="text-center fw-bold" style="font-family: 'Roboto', sans-serif;">Welcome to Our Home Automation System</h2>
        <p class="text-center fs-5" style="font-family: 'Roboto', sans-serif;">Our system makes it easy for you to control your home's lighting, temperature, security, and more with the touch of a button. Whether you're at home or away, our system gives you complete control over your home's environment.</p>  
        </section>

        <section class="container py-4">
    <div class="row justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Kitchen thermostat</div></b>
                <img class="card-img-top" src="..\..\img\thermostat.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                <div class="input-group d-flex flex-column align-items-center">
    <button class="btn btn-success toggle-button mb-3">ON</button>
    <div class="input-group-prepend">
        <input type="number" class="form-control temperature-input" id="input-field">
        <button class="btn btn-primary submit-button">Submit</button>
    </div>
    <div class="mt-3">
        <span class="input-group-text">Temperature:</span>
        <span id="entered-value" class="input-group-text">25&nbsp;C</span>
    
                    </div>
                </div>  
            </div>
        </div>
    </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Living room thermostat</div></b>
                <img class="card-img-top" src="..\..\img\thermostat.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                <div class="input-group d-flex flex-column align-items-center">
    <button class="btn btn-success toggle-button mb-3">ON</button>
    <div class="input-group-prepend">
        <input type="number" class="form-control temperature-input" id="input-field">
        <button class="btn btn-primary submit-button">Submit</button>
    </div>
    <div class="mt-3">
        <span class="input-group-text">Temperature:</span>
        <span id="entered-value" class="input-group-text">25&nbsp;C</span>
        

        
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Bedroom thermostat</div></b>
                <img class="card-img-top" src="..\..\img\thermostat.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                <div class="input-group d-flex flex-column align-items-center">
    <button class="btn btn-success toggle-button mb-3">ON</button>
    <div class="input-group-prepend">
        <input type="number" class="form-control temperature-input" id="input-field">
        <button class="btn btn-primary submit-button">Submit</button>
    </div>
    <div class="mt-3">
        <span class="input-group-text">Temperature:</span>
        <span id="entered-value" class="input-group-text">25&nbsp;C</span>
        

        
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Bathroom thermostat</div></b>
                <img class="card-img-top" src="..\..\img\thermostat.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                <div class="input-group d-flex flex-column align-items-center">
    <button class="btn btn-success toggle-button mb-3">ON</button>
    <div class="input-group-prepend">
        <input type="number" class="form-control temperature-input" id="input-field">
        <button class="btn btn-primary submit-button">Submit</button>
    </div>
    <div class="mt-3">
        <span class="input-group-text">Temperature:</span>
        <span id="entered-value" class="input-group-text">25&nbsp;C</span>
        

        
            </div>
            </div>
            </div>
            </div>
            </div>


    </div>
</section>

    </main>
    
    <footer class="bg-dark text-white text-center py-4" style="transform: translate(0%, 75%)">
        <div class="container">
            <p>&copy; 2023 Home Automation System</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

<script>
  var submitButton = document.querySelector('.submit-button');
    var enteredValue = document.getElementById('entered-value');
    var inputField = document.getElementById('input-field');

    submitButton.addEventListener('click', function() {
        var temperature = inputField.value;
        if (temperature >= 15 && temperature <= 40) {
            enteredValue.textContent = temperature + ' °C';
        } else {
            alert('Please enter a correct value between 15 and 40 degrees Celsius');
        }
    });


</script>

<script>
var toggleButtons = document.querySelectorAll(".toggle-button");

toggleButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        if (button.textContent === "ON") {
            button.textContent = "OFF";
            button.classList.remove("btn-success");
            button.classList.add("btn-danger");
        } else {
            button.textContent = "ON";
            button.classList.remove("btn-danger");
            button.classList.add("btn-success");
        }
    });
});
</script>

</body>
</html>
