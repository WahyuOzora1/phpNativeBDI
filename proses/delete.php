<?php

require_once('../config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    $query = "DELETE FROM tb_pegawai where id = '$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location:../index.php?status=success');
    } else {
        header('location:../index.php?status=error');
    }
}
