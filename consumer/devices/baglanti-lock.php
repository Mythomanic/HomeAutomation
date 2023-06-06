<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproje";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// AJAX isteği ile gönderilen verileri al
$lockId = $_POST['lockId'];
$lockStatus = $_POST['lockStatus'];

// Veritabanında kilidin durumunu kontrol et
$sql = "SELECT * FROM locks WHERE id='$lockId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Kilidin veritabanında kaydı var, güncelleme işlemini gerçekleştir
    $updateSql = "UPDATE locks SET status='$lockStatus' WHERE id='$lockId'";
    
    if ($conn->query($updateSql) === TRUE) {
        echo "Kilit durumu başarıyla güncellendi.";
    } else {
        echo "Güncelleme hatası: " . $conn->error;
    }
} else {
    // Kilidin veritabanında kaydı yok, yeni veriyi ekle
    $insertSql = "INSERT INTO locks (id, status) VALUES ('$lockId', '$lockStatus')";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Yeni kilit verisi başarıyla eklendi.";
    } else {
        echo "Ekleme hatası: " . $conn->error;
    }
}

$conn->close();
?>
