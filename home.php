<?php
include "koneksi.php";
$tgl = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="jumbotron header">

        <img class="logo" src="image/logo_hog.png">
        <h1 class="judul">Harley Owner Group</h1>

    </div>


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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <br><br>
                <h2 id="beranda-judul">Selamat Datang Di Harley Owner Group.</h2>
                <img class="img" src="image/foto1.jpg" alt="">
                <p class="lead">Harley Owners Group adalah klub pemasaran komunitas yang disponsori, dioperasikan oleh Harley-Davidson untuk penggemar sepeda motor merek itu. HOG adalah "grandaddy dari semua upaya pembangunan komunitas," melayani untuk mempromosikan tidak hanya produk konsumen, tetapi gaya hidup.</p>
                <br><br>
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