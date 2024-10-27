<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'desintacarulina1212@gmail.com';
    $headers = "From: $email\r\n";
    $headers .= "Replay-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Mobile: $mobile\n";
    $emailContent .= "Subject: $subject\n\n";
    $emailContent .= "Message:\n$message\n";

    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Pesan berhasil dikirim";
    }else {
        echo "Gagal Mengirim Pesan. Silakan Coba Lagi.";
    }
}
?>