<?php 


require_once ('../config.php');

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$foto = $_FILES['foto']['name']; //nama file
$tmp = $_FILES['foto']['tmp_name']; //extension


$foto_baru = "pegawai".$foto; //dirubah namanya saat mau disimpan
$path = "images/".$foto; //disimpan folder apa
$link_foto = $foto_baru;



if(!move_uploaded_file($tmp, $path)){
    echo "Upload File Failed";
}

// include ("hasil.php");



$query = "INSERT INTO tb_pegawai (nama, nip, alamat,tanggal_lahir,jk,foto)
values ('$nama','$nip','$alamat','$tgl_lahir','$jk','$link_foto')";



if($query = mysqli_query($koneksi, $query)){
    
    header('location:../index.php?status=success');
} else {
    header('location:../index.php?status=error');
}