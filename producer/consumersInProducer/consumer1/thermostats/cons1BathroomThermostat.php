<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../style.css">
</head>
<body onload="startTime()">
    
  <div id="wrapper" class="toggled">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav text-center">
            <li class="sidebar-brand text-center mt-3"> 
              <a  style="font-size: larger;" href="">Home Automation</a>
            </li>
            <li class="text-center">
                <a href="../../../home-producer.html">Dashboard</a>
            </li>
            <li>
                <a href="#">Consumers</a>
            </li>
            <li>
                <a href="#">Overview</a>
            </li>
            
            <li>
                <a href="../logout.php">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                  </span>
                  Logout
                </a>
            </li>
            <li class="mt-lg-4">
              <a style="font-size:xxx-large;" href="#">
                <div  id="txt"></div>
              </a>
            </li>
            
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div>
        <div class="container-lg">
          <nav style="background-color: rgb(12, 12, 12); height: 90px;" class="navbar">
            <div class="container-fluid">
              <a class="navbar-brand text-light">Consumer 1 - Bathroom Thermostat</a>
              <form class="d-flex mr-lg-3" role="search">
                
                
                <input class="form-control me-2 mr-lg-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light mr-lg-4" type="submit">Search</button>
                <button class="btn btn-outline-light" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg>
                </button>
              </form>
            </div>
          </nav>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>




  <div class="container-fluid mt-lg-4">
    <div class="row justify-content-end mx-lg-5">
      <div class="col-md-5">

        <div class="card">
          <div class="card-header" style="height: 59px;">
            
            <strong><h3> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
              <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
            </svg> Power Consumption (kw)</h3></strong>
          </div>
          <canvas id="line-chart"></canvas>
          <script
              src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
          <script>
            new Chart(document.getElementById("line-chart"), {
              type : 'line',
              data : {
                labels : ['Monday', 'Tuesday','Wednesday','Thursday',
              'Friday','Saturday','Sunday'],
              datasets : [
                    {
                      data : [ 1186, 3186, 1386, 3486, 4386,
                      4386, 3133],
                      label : "Consumption",
                      borderColor : "#3cba9f",
                      fill : true
                    }]
              },
              options : {
                title : {
                  display : true,
                  text : 'Chart JS Line Chart Example'
                }
              }
            });
          </script>
          <div class="card-footer text-body-secondary ">
            Usage today: <strong>1kw</strong>

            

          </div>
          
        </div>

       

      </div>
      

      <div class="col-md-5 ml-4">
        <div class="card text-center" style="height:100%;">
          <div class="card-header">
            <strong style="size: 50px;">Bathroom Heater</strong>
          </div>
          <div class="card-body">
            <img style="width:300px" src="../../../../img/Picture2.jpg" alt="">
            
          </div>
          <div class="card">
            <ul class="list-group list-group-flush">
              <?php
                // Veritabanı bağlantısı
                $servername = "localhost"; // Veritabanı sunucusunun adı veya IP adresi
                $username = "root"; // Veritabanı kullanıcı adı
                $password = ""; // Veritabanı şifre
                $dbname = "webproje"; // Veritabanı adı
        
                // Bağlantı oluşturma
                $conn = new mysqli($servername, $username, $password, $dbname);
        
                // Bağlantıyı kontrol etme
                if ($conn->connect_error) {
                  die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
                }
        
                // Veri almak için sorgu
                $sql = "SELECT * FROM termostat WHERE id = 4 LIMIT 1";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<li id='status' class='list-group-item'><h3>" . $row['status'] . "</h3></li>";
                  }
                } else {
                  echo "<li id='status' class='list-group-item'><h3>Veri bulunamadı.</h3></li>";
                }
        
                // Veritabanı bağlantısını kapatma
                $conn->close();
              ?>
              <?php
                // Veritabanı bağlantısı
                $servername = "localhost"; // Veritabanı sunucusunun adı veya IP adresi
                $username = "root"; // Veritabanı kullanıcı adı
                $password = ""; // Veritabanı şifre
                $dbname = "webproje"; // Veritabanı adı
        
                // Bağlantı oluşturma
                $conn = new mysqli($servername, $username, $password, $dbname);
        
                // Bağlantıyı kontrol etme
                if ($conn->connect_error) {
                  die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
                }
        
                // Veri almak için sorgu
                $sql = "SELECT * FROM termostat WHERE id = 4 LIMIT 1";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<li id='status' class='list-group-item'><h3>" . $row['temperature'] . "</h3></li>";
                  }
                } else {
                  echo "<li id='status' class='list-group-item'><h3>Veri bulunamadı.</h3></li>";
                }
        
                // Veritabanı bağlantısını kapatma
                $conn->close();
              ?>
            </ul>
          </div>
          <div class="card-footer text-body-secondary">
            Active for 2h
          </div>
        </div>


      </div>
      

    

    </div>
    



</div>









<script>
  function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
  }
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
  </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>