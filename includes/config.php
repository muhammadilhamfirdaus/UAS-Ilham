<?Php
date_default_timezone_set('Asia/Jakarta');
$base_url = 'http://localhost:3306/';

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "db_kuliner";

// koneksi

$conn = new mysqli($servername, $username, $password, $dbname);

// cek

if ($conn->connect_errno) {
    echo "Gagal koneksi ke database: " . $conn->connect_error;
    exit();
}
