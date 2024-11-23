<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST['Ad']);
    $soyad = htmlspecialchars($_POST['Soyad']);
    $telefon = htmlspecialchars($_POST['Telefon Numarası']);
    $email = htmlspecialchars($_POST['Email']);
    $mesaj = htmlspecialchars($_POST['Şikayet/Önerileriniz']);

    $to = "anilerencandan1@gmail.com";
    $subject = "Yeni Müşteri Şikayet/Önerisi";
    $body = "Ad: $ad\nSoyad: $soyad\nTelefon Numarası: $telefon\nEmail: $email\nMesaj: $mesaj";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mesajınız başarıyla gönderildi.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Mesaj gönderilirken bir hata oluştu.'); window.location.href='index.html';</script>";
    }
}
?>
