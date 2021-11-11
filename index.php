<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require_once('config.php'); ?>

    <div class="container bg-light">


        <h1>Hallo World</h1>

        <div class="text-right">

            <a href="create.php" class="btn btn-primary">Tambah Data</a>
            <hr>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">foto</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    $query = "SELECT * FROM tb_pegawai";

                    if ($query = mysqli_query($koneksi, $query)) {
                        while ($data = mysqli_fetch_array($query)) {
                            echo
                            "
                            <tr>
                <td>" . $data["id"] . "</td>
                <td>" . $data["nama"] . "</td>
                <td>" . $data["nip"] . "</td>
                <td>" . $data["alamat"] . "</td>
                <td>" . $data["tanggal_lahir"] . "</td>
                <td>" . $data["jk"] . "</td>
                <td>" . "<img src = '" . $data["foto"] . "'class = 'img-fluid' width='90px' height='60px' >" . "</td>
              
              
                <td>" .
                                "<a href='edit.php?id=" . $data['id'] . "'class='btn btn-warning' name='edit' type ='submit'>Update</a>" . " " .
                                "<a href='#' onclick='validasi(" . $data['id'] . ")'
                                 class='btn btn-danger' type='submit' name='delete'>Delete</a>
                        
                        
                        " . "</td></tr>
            ";
                        }
                    } else
                        echo "
                    
                    <tr>
                    <th>Data tidak ditemukan</th>
                    </tr>
                    " . $query;

                    ?>
                </tr>

            </tbody>
        </table>





    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function validasi(param) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((result) => {
                    if (result) {
                        window.location.href = "proses/delete.php?id=" + param;
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        }
    </script>

    <?php
    $cek = count($_GET);
    print_r($cek);
    // try {
    //     if ($cek > 0) {
    //         $status = $_GET['status'];
    //         if ($status == 'success') {
    //             echo "<script>
    //             swal('Good job!','Data Berhasil Ditambahkan', 'success');
    //         </script>";
    //         } else {
    //             echo "<script>
    //             swal('Failed!','Data gagal Ditambahkan', 'error');
    //         </script>";
    //         }
    //     }
    // } catch (Exception $e) {
    //     return "error : " . $e;
    // }

    ?>


</body>

</html>