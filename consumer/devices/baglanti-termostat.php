<?php
// Veritabanı bağlantısı için gerekli bilgileri güncelleyin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproje";

// POST yöntemiyle gönderilen verileri alın
$name = $_POST['name'];
$temperature = $_POST['temperature'];
$status = $_POST['status'];

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Aynı ada sahip bir verinin olup olmadığını kontrol et
$checkQuery = "SELECT * FROM termostat WHERE name = '$name'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // Veri zaten mevcut, güncelle
    $updateQuery = "UPDATE termostat SET temperature = '$temperature', status = '$status' WHERE name = '$name'";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Veri başarıyla güncellendi";
        // Loglama
        $logMessage = "$name güncellendi - Sıcaklık: $temperature, Durum: $status";
        $logSql = "INSERT INTO log (action) VALUES ('$logMessage')";
        $conn->query($logSql);
    } else {
        echo "Veri güncellenirken hata oluştu: " . $conn->error;
    }
} else {
    // Veri mevcut değil, ekle
    $insertQuery = "INSERT INTO termostat (name, temperature, status) VALUES ('$name', '$temperature', '$status')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Veri başarıyla eklendi";
        // Loglama
        $logMessage = "Termostat eklendi - İsim: $name, Sıcaklık: $temperature, Durum: $status";
        $logSql = "INSERT INTO log (action) VALUES ('$logMessage')";
        $conn->query($logSql);
    } else {
        echo "Veri eklenirken hata oluştu: " . $conn->error;
    }
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
