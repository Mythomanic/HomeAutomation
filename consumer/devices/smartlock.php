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
                        <b><div class="card-header bg-secondary text-center">Garage Lock</div></b>
                        <img class="card-img-top" src="..\..\img\smartlock.jpg" alt="Card image cap">
                        <div class="card-body text-secondary bg-secondary text-center">
                            <div class="input-group d-flex flex-column align-items-center">
                                <span class="input-group-text flex-fill d-flex justify-content-center align-items-center" id="garageLock-status">ON</span>
                                <button class="btn btn-success toggle-button mb-3" onclick="toggleLockStatus('garageLock')">Click to OPEN</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-secondary mb-3">
                        <b><div class="card-header bg-secondary text-center">Exterior Lock</div></b>
                        <img class="card-img-top" src="..\..\img\smartlock.jpg" alt="Card image cap">
                        <div class="card-body text-secondary bg-secondary text-center">
                            <div class="input-group d-flex flex-column align-items-center">
                                <span class="input-group-text flex-fill d-flex justify-content-center align-items-center" id="exteriorLock-status">ON</span>
                                <button class="btn btn-success toggle-button mb-3" onclick="toggleLockStatus('exteriorLock')">Click to OPEN</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-secondary mb-3">
                        <b><div class="card-header bg-secondary text-center">Bedroom Lock</div></b>
                        <img class="card-img-top" src="..\..\img\smartlock.jpg" alt="Card image cap">
                        <div class="card-body text-secondary bg-secondary text-center">
                            <div class="input-group d-flex flex-column align-items-center">
                                <span class="input-group-text flex-fill d-flex justify-content-center align-items-center" id="bedLock-status">ON</span>
                                <button class="btn btn-success toggle-button mb-3" onclick="toggleLockStatus('bedLock')">Click to CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3">
  <div class="card border-secondary mb-3">
    <img class="card-img-top" src="..\..\img\smartlock.jpg" alt="Card image cap">
    <div class="card-body text-secondary bg-secondary text-center">
      <h5 class="card-title">Add another smartlock</h5>
      <p class="card-text">Click the button below to add a new smartlock.</p>
      <button id="addCameraButton" class="btn btn-primary">Add another smartlock</button>
    </div>
  </div>
</div>

            

            </div>
        </section>

    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

    <script>
        function toggleLockStatus(lockName) {
            var nowStatusElement = document.getElementById(lockName + "-status");
            var toggleButton = document.querySelector("#" + lockName + "-card .toggle-button");
            var nowStatus = nowStatusElement.textContent;

            var newStatus = (nowStatus === "ON") ? "OFF" : "ON";

            $.ajax({
                type: "POST",
                url: "baglanti-lock.php",
                data: { lockName: lockName, status: newStatus },
                success: function(response) {
                    if (response === "success") {
                        nowStatusElement.textContent = newStatus;
                        toggleButton.textContent = (newStatus === "ON") ? "Click to CLOSE" : "Click to OPEN";
                        toggleButton.classList.toggle("btn-danger");
                        toggleButton.classList.toggle("btn-success");
                    } else {
                        alert("An error occurred. Please try again.");
                    }
                },
                error: function() {
                    alert("An error occurred. Please try again.");
                }
            });
        }
    </script>

<script>
  var cameraCount = 1; // Variable to track the number of added cameras

  function addCamera() {
    // Create a new camera card
    var newCameraCard = document.createElement("div");
    newCameraCard.className = "col-sm-6 col-md-4 col-lg-3";

    var cardContent = `
      <div class="card border-secondary mb-3">
        <b><div class="card-header bg-secondary text-center">New Lock ${cameraCount}</div></b>
        <img class="card-img-top" src="..\\..\\img\\smartlock.jpg" alt="Card image cap">
        <div class="card-body text-secondary bg-secondary text-center">
          <div class="input-group d-flex flex-column align-items-center">
            <span class="input-group-text flex-fill d-flex justify-content-center align-items-center" id="bedLock-status">ON</span>
            <button class="btn btn-success toggle-button mb-3" onclick="toggleLockStatus('bedLock')">Click to CLOSE</button>
          </div>
        </div>
      </div>
    `;

    newCameraCard.innerHTML = cardContent;

    // Append the new camera card to the row
    var cameraRow = document.querySelector(".row");
    cameraRow.insertBefore(newCameraCard, cameraRow.lastElementChild);

    cameraCount++; // Increment the camera count
  }

  // Add event listener to the "Add another camera" button
  var addCameraButton = document.getElementById("addCameraButton");
  addCameraButton.addEventListener("click", addCamera);
</script>


</body>
</html>
