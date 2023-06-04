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
                <b><div class="card-header bg-secondary text-center">Kitchen light bulb</div></b>
                <img class="card-img-top" src="..\..\img\lightbulb.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">

                    
                    <div class="input-group d-flex flex-column align-items-center">
                        <form action="lightbulb.php" method="POST">
                            <button name="kitchenLightBulb" class="btn btn-success toggle-button mb-3">ON</button>
                            </form>
                            <input  type="range" class="form-range" min="0" max="100" value="50" id="lightbulb-slider-1">
                        
                        <span class="input-group-text flex-fill d-flex justify-content-center align-items-center">
                            Brightness: <span id="lightbulb-value-1">50</span>%
                        </span>
                    </div>
                    <form action="lightbulb.php" method="POST">
                        <button name="kitchenLightBulb" class="btn btn-danger toggle-button">OFF</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Living Room light bulb</div></b>
                <img class="card-img-top" src="..\..\img\lightbulb.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                    <div class="input-group d-flex flex-column align-items-center">
                        <form action="lightbulb.php" method="POST">
                            <button name="livingRoomLightBulb" class="btn btn-success toggle-button mb-3">ON</button>
                        </form>
                        <input type="range" class="form-range" min="0" max="100" value="50" id="lightbulb-slider-2">
                        <span class="input-group-text flex-fill d-flex justify-content-center align-items-center">
                            Brightness: <span id="lightbulb-value-2">50</span>%
                        </span>
                    </div>
                    <form action="lightbulb.php" method="POST">
                        <button name="livingRoomLightBulb" class="btn btn-danger toggle-button">OFF</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Bedroom light bulb</div></b>
                <img class="card-img-top" src="..\..\img\lightbulb.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                    <div class="input-group d-flex flex-column align-items-center">
                        <form action="lightbulb.php" method="POST">
                            <button name="bedroomLightBulb" class="btn btn-success toggle-button mb-3">ON</button>
                        </form>
                        <input type="range" class="form-range" min="0" max="100" value="50" id="lightbulb-slider-3">
                        <span class="input-group-text flex-fill d-flex justify-content-center align-items-center">
                            Brightness: <span id="lightbulb-value-3">50</span>%
                        </span>
                    </div>
                    <form action="lightbulb.php" method="POST">
                        <button name="bedroomLightBulb" class="btn btn-danger toggle-button">OFF</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card border-secondary mb-3">
                <b><div class="card-header bg-secondary text-center">Bathroom light bulb</div></b>
                <img class="card-img-top" src="..\..\img\lightbulb.jpg" alt="Card image cap">
                <div class="card-body text-secondary bg-secondary text-center">
                    <div class="input-group d-flex flex-column align-items-center">
                        <form action="lightbulb.php" method="POST">
                            <button name="bathroomLightBulb" class="btn btn-success toggle-button mb-3">ON</button>
                        </form>
                        <input type="range" class="form-range" min="0" max="100" value="50" id="lightbulb-slider-4">
                        <span class="input-group-text flex-fill d-flex justify-content-center align-items-center">
                            Brightness: <span id="lightbulb-value-4">50</span>%
                        </span>
                    </div>
                    <form action="lightbulb.php" method="POST">
                        <button name="bathroomLightBulb" class="btn btn-danger toggle-button">OFF</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </section>

    </main>
    
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button[name="kitchenLightBulb"]').click(function(e) {
                e.preventDefault();
                var status = $(this).text() === 'ON' ? 'off' : 'on';
                $.post('lightbulb.php', { kitchenLightBulb: status }, function() {
                    location.reload();
                });
            });

            $('button[name="livingRoomLightBulb"]').click(function(e) {
                e.preventDefault();
                var status = $(this).text() === 'ON' ? 'off' : 'on';
                $.post('lightbulb.php', { livingRoomLightBulb: status }, function() {
                    location.reload();
                });
            });

            $('button[name="bedroomLightBulb"]').click(function(e) {
                e.preventDefault();
                var status = $(this).text() === 'ON' ? 'off' : 'on';
                $.post('lightbulb.php', { bedroomLightBulb: status }, function() {
                    location.reload();
                });
            });

            $('button[name="bathroomLightBulb"]').click(function(e) {
                e.preventDefault();
                var status = $(this).text() === 'ON' ? 'off' : 'on';
                $.post('lightbulb.php', { bathroomLightBulb: status }, function() {
                    location.reload();
                });
            });

            $('input[type="range"]').on('input', function() {
                var value = $(this).val();
                var id = $(this).attr('id');
                var bulbId = id.split('-')[2];
                $('#lightbulb-value-' + bulbId).text(value);
            });
        });
    </script>
</body>
</html>
