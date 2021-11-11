<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card card-primary text-black w-50">
                    <div class="card-header bg-secondary">
                        <h5 class="card-title">Edit Form Pegawai</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        require_once('config.php');


                        $parameter = $_GET['id'];
                        $query = "SELECT * FROM tb_pegawai where id=" . $parameter;

                        if ($query = mysqli_query($koneksi, $query)) {
                            $row = $query->fetch_assoc();


                            // print_r ($row);
                            // echo $row['tanggal_lahir'];
                        } else {
                            echo "Error : mysqli error" . $query;
                        }

                        ?>
                        <form action="proses/edit.php?id=<?=$parameter;?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" value="<?= $row['nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">NIP</label>
                                <input type="number" name="nip" class="form-control" placeholder="Masukkan NIP Anda" value="<?= $row['nip']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" value="<?= $row['alamat']; ?>">
                            </div>


                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan tanggal lahir Anda" value="<?= $row['tanggal_lahir']; ?>">
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="lakilaki" value="Laki-Laki" <?php if ($row['jk'] == 'Laki-Laki') {
                                            echo 'checked';
                                        }
                                        ?>>
                                <label class="form-check-label" for="lakilaki">
                                    Laki-Laki
                                </label>


                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" <?php if ($row['jk'] == 'Perempuan') {
                                            echo 'checked';
                                        }
                                        ?> >

                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>

                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>

                            <hr style="border-color: white" ;>
                            <button type="submit" class="btn btn-secondary w-50" name="edit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>