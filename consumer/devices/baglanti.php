<?php
// Veritabanı bağlantısı için gerekli bilgileri ayarlayın
$servername = "localhost"; // Veritabanı sunucusu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "webproje"; // Veritabanı adı

// Veritabanına bağlanın
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol edin
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız oldu: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lightName = $_POST["lightName"];
    $status = $_POST["status"];

    // Veritabanında ilgili ışığın mevcut olup olmadığını kontrol edin
    $checkSql = "SELECT COUNT(*) as count FROM lights WHERE light_name = '$lightName'";
    $result = $conn->query($checkSql);
    $row = $result->fetch_assoc();
    $count = $row["count"];

    if ($count == 0) {
        // Işık verisi yoksa, ekleme işlemi yapın
        $insertSql = "INSERT INTO lights (light_name, status) VALUES ('$lightName', '$status')";

        if ($conn->query($insertSql) === TRUE) {
            // Ekleme işlemi başarılıysa "success" yanıtını döndür
            echo "success";
        } else {
            // Ekleme işlemi başarısız olduysa hata mesajını döndür
            echo "Hata: " . $insertSql . "<br>" . $conn->error;
        }
    } else {
        // Işık verisi mevcutsa, güncelleme işlemi yapın
        $updateSql = "UPDATE lights SET status = '$status' WHERE light_name = '$lightName'";

        if ($conn->query($updateSql) === TRUE) {
            // Güncelleme işlemi başarılıysa "success" yanıtını döndür
            echo "success";
        } else {
            // Güncelleme işlemi başarısız olduysa hata mesajını döndür
            echo "Hata: " . $updateSql . "<br>" . $conn->error;
        }
    }
}

// Veritabanı bağlantısını kapatın
$conn->close();
?>
