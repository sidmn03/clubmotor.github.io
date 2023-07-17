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
            <br><br>
            <h1>TAMBAH PRODUK</h1><br>

            <form method="post" action="produk-simpan.php">
                <div class="mb-3">
                    <label for="idproduk" class="form-label">Id Produk</label>
                    <input type="text" class="form-control" name="idproduk" id="idproduk" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="namaproduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="namaproduk" id="namaproduk">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Foto Produk</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                <a href="produk.php">
                    <button type="button" class="btn btn-secondary">Kembali</button></a>
            </form>
            <br><br>
        </div>
    </div>

    <div class="footer text-center">
        <div class="card-footer text-muted">
            Copyright 2022. Club Motor
        </div>
    </div>


</body>

</html>