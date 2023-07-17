<?php
include "koneksi.php";
extract($_GET);
$data = mysqli_query($db, "SELECT * FROM produk where idproduk ='$id'");
$row = mysqli_fetch_array($data);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="visi-misi.php">Visi dan Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="lainnya" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                            <li><a class="dropdown-item" href="event.php">Event</a></li>
                            <li><a class="dropdown-item" href="galery.php">Galeri</a></li>
                            <li><a class="dropdown-item" href="klien.php">Klien</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="card">
                <h1>EDIT PRODUK</h1><br>
            </div>
            <div class="card">
                <form method="post" action="produk-update.php">
                    <div class="mb-3">
                        <label for="idproduk" class="form-label">Id Produk</label>
                        <input type="text" name="idproduk" id="idproduk" readonly required value="<?php echo $row['idproduk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="namaproduk" class="form-label">Nama Produk</label>
                        <input type="text" name="namaproduk" id="namaproduk" value="<?php echo $row['namaproduk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" value="<?php echo $row['jumlah']; ?>">
                    </div>
                    <div class="mb-3">
                        <img src="../image/<?= $foto; ?>" alt="" width="70px" height="75px">
                        <input type="file" name="fotoproduk">
                        <input type="hidden" name="foto_awal" value="<?= $row['fotoproduk']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Submit <a href="produk.php"><button type="button" class="btn btn-secondary">Kembali</button></a></button>
                </form>
                <br><br>
                <?php
                if (isset($_POST['simpan'])) {
                    extract($_POST);
                    $nama_file = $_FILES['foto']['name'];
                    if (!empty($nama_file)) {
                        // baca lokasi file sementara dan nama file dari form
                        $lokasi_file = $_FILES['foto']['tmp_name'];
                        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
                        $file_foto = $id_produk . "." . $tipe_file;
                        // tenttukan folder untuk menyimpan file
                        $folder = "../image/$file_foto";
                        @unlink("$folder");
                        // apabila file berhasil di upload
                        move_uploaded_file($lokasi_file, "$folder");
                    } else {
                        $file_foto = $foto_awal;
                    }
                }
                ?>

            </div>
        </div>
    </div>


    <div class="footer text-center">
        <div class="card-footer text-muted">
            Copyright 2022. Harley Owner Group
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>