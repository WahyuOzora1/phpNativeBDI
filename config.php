<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_desa');


$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($koneksi === false){
    die("Error : tidak bisa konek" . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil";
}






?>