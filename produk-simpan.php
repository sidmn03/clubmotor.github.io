<?php
include "koneksi.php";

extract($_POST);
if (isset($submit)) {

    $nama_file = $_FILES['foto']['name'];
    $dir_upload = "image/" . $nama_file;

    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $cek = move_uploaded_file(['foto']['name']);
        $dir_upload . $nama_file;
        if ($cek) {
            echo "Photo Berhasil Diupload";
        } else {
            echo "Photo Gagal Diupload";
        }
    }

    $perintah = mysqli_query($db, "INSERT into produk values('$idproduk','$namaproduk','$jumlah','$$nama_file')");
    if ($perintah) {
        echo "Data Produk Berhasil Disimpan";
    } else {
        echo "Data Produk Gagal Disimpan";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="card">
            <a href="produk.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
        </div>
    </div>


</body>

</html>