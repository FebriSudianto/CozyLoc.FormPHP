<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email = htmlspecialchars($_POST["email"]);
    $telepon = htmlspecialchars($_POST["telepon"]);

    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nomor Telepon:</strong> $telepon</p>";
} else {
    echo "Form belum dikirim.";
}
?>