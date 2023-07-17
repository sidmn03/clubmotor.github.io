<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "
                <script>alert('Anda Gagal Login')</script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET(['pesan']) == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>

    <div class="container">
        <div class="card2">
            <h1>Login</h1>
        </div>
        <div class="card2">
            <form action="cek_login.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>