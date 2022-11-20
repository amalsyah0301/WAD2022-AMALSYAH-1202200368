<?php
require "amalsyah_insert.php";
if(isset($_POST['submit'])){
    add($_POST);
    if(addData($_POST) > 0){
    header("Location: amalsyah_listcar.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link text-light" href="../pages/Home-Dzul.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="../pages/ListCar-Dzul.php">MyCar</a>
            </li>
            </ul>
            </div>  
        </div>
    </nav>

    <div class="container">
        <h3>Tambah Mobil</h3>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="form-label"><b>Nama Mobil</b></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Mobil">
            </div>
            <div class="mb-4">
                <label for="owner" class="form-label"><b>Nama Pemilik</b></label>
                <input type="text" class="form-control" id="owner" name="owner" value="AMALSYAH - 1202200368" readonly>
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label"><b>Merk</b></label>
                <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Mobil">
            </div>
            <div class="mb-4">
                <label for="buydate" class="form-label"><b>Tanggal Beli</b></label>
                <input type="date" class="form-control" id="buydate" name="buydate" placeholder="Tanggal Pembelian">
            </div>
            <div class="mb-4">
                <label for="desc" class="form-label"><b>Deskripsi</b></label>
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Deskripsi Mobil"></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="form-label"><b>Foto</b></label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div>
            <div class="row mb-4">
                <b>Status Pembayaran</b>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lunas" id="lunas" value="lunas">
                        <label class="form-check-label" for="lunas">
                            Lunas
                        </label>
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lunas" id="xlunas" value="belumlunas">
                        <label class="form-check-label" for="xlunas">
                            Belum Lunas
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-4" name="submit">Selesai</button>
        </form>
    </div>
    

</body>
</html>