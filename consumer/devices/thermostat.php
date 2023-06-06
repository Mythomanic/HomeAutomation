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
                        <a class="nav-link" href="../../logout.php">Logout</a>
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
                                    <input type="number" class="form-control temperature-input">
                                    <button class="btn btn-primary submit-button">Submit</button>
                                </div>
                                <div class="mt-3">
                                    <span class="input-group-text">Temperature:</span>
                                    <span class="input-group-text entered-value">25 C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diğer termostat kartlarını da buraya ekleyin -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-secondary mb-3">
                        <b><div class="card-header bg-secondary text-center">Living room thermostat</div></b>
                        <img class="card-img-top" src="..\..\img\thermostat.jpg" alt="Card image cap">
                        <div class="card-body text-secondary bg-secondary text-center">
                            <div class="input-group d-flex flex-column align-items-center">
                                <button class="btn btn-success toggle-button mb-3">ON</button>
                                <div class="input-group-prepend">
                                    <input type="number" class="form-control temperature-input">
                                    <button class="btn btn-primary submit-button">Submit</button>
                                </div>
                                <div class="mt-3">
                                    <span class="input-group-text">Temperature:</span>
                                    <span  class="input-group-text entered-value" id>25 C</span>
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
                                    <input type="number" class="form-control temperature-input">
                                    <button class="btn btn-primary submit-button">Submit</button>
                                </div>
                                <div class="mt-3">
                                    <span class="input-group-text">Temperature:</span>
                                    <span id class="input-group-text entered-value">25</span>
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
                                    <input type="number" class="form-control temperature-input">
                                    <button class="btn btn-primary submit-button">Submit</button>
                                </div>
                                <div class="mt-3">
                                    <span class="input-group-text">Temperature:</span>
                                    <span class="input-group-text entered-value">25</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer class="bg-dark text-white text-center py-4" style="transform: translate(0%, 75%)">
        <p>&copy; 2023 Home Automation System. All Rights Reserved.</p>
    </footer>

    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // AJAX ile termostat verilerini kaydet
        function saveTemperature(name, temperature, status) {
            $.ajax({
                url: 'baglanti-termostat.php',
                method: 'POST',
                data: { name: name, temperature: temperature, status: status },
                success: function(response) {
                    console.log(response); // İşlem sonucunu konsola yazdırabilirsiniz
                },
                error: function(xhr, status, error) {
                    console.error(error); // Hata durumunda hata mesajını konsola yazdırabilirsiniz
                }
            });
        }

        // Termostat verilerini kaydetmek için tetikleyici olayları tanımla
        $('.submit-button').click(function() {
            var card = $(this).closest('.card');
            var name = card.find('.card-header').text();
            var temperature = card.find('.temperature-input').val();
            var status = card.find('.toggle-button').text();

            saveTemperature(name, temperature, status);
        });
    </script>
    <script>
        // JavaScript kodlarını buraya ekleyin
        const toggleButtons = document.querySelectorAll('.toggle-button');
        const temperatureInputs = document.querySelectorAll('.temperature-input');
        const submitButtons = document.querySelectorAll('.submit-button');
        const enteredValues = document.querySelectorAll('.entered-value');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                button.classList.toggle('btn-success');
                button.classList.toggle('btn-danger');
                button.textContent = button.textContent === 'ON' ? 'OFF' : 'ON';
            });
        });

        submitButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                enteredValues[index].textContent = temperatureInputs[index].value + ' C';
            });
        });
    </script>

</body>
</html>
