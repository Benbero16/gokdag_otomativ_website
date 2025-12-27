<?php

$servername = "localhost";        // Sunucu adresi
$db_username = "root";            // MySQL kullanıcı adı
$db_password = "";                // MySQL şifresi
$database = "proje";            // Veritabanı adı

try {
    // PDO ile bağlantıyı oluştur
    $baglanti = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $db_username, $db_password);
    
    // Hataları yakalayabilmek için PDO hata modunu ayarla
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Veritabanına başarıyla bağlanıldı!";
} catch (PDOException $e) {
    // Bağlantı başarısızsa hatayı göster
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}



?>
