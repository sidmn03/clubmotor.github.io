<?php
include "koneksi.php";
$cek = mysqli_query($db, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
                <h1>Produk</h1>
            </div>
            <br><br>
            <div class="card">
                <h1 id="beranda-judul">Data Produk</h1>

                <table class="table">

                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Foto Produk</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <?php foreach ($cek as $value) : ?>
                        <tr>
                            <td><?= $value['idproduk'] ?></td>
                            <td><?= $value['namaproduk'] ?></td>
                            <td><?= $value['jumlah'] ?></td>
                            <td>
                                <img src="image/<?= $value['fotoproduk'] ?>" width="70px" height="70px" alt="">
                            </td>
                            <td>
                        </tr>
                    <?php endforeach ?>
                </table>

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