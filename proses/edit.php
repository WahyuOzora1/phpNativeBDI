<?php

require_once('../config.php');

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $taggal_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $foto = '';
    // $foto = $_POST['foto'];

    // $foto_baru = "pegawai".$foto; //dirubah namanya saat mau disimpan
    // $path = "images/".$foto; //disimpan folder apa
    // $link_foto = $foto_baru;
    
    
    
    // if(!move_uploaded_file($tmp, $path)){
    //     echo "Upload File Failed";
    // }
    
    $query = "UPDATE tb_pegawai SET nama = '$nama', nip = '$nip', alamat= '$alamat', tanggal_lahir='$taggal_lahir', jk ='$jk' WHERE id='$id'";


    // print_r($query);

    if ($query = mysqli_query($koneksi, $query)) {
        // echo "berhasil ".$query;
        header('location:../index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        // echo "erroraaaaa ".$query;

        header('location:../index.php?status=error');
    }
}
