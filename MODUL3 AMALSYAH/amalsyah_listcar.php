<?php
include('amalsyah_connector.php');

if(count(showAll()) == 0){
    header("Location: amalsyah_additem.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-light" href="amalsyah_home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="amalsyah_list.php">Mycar</a>
        </ul>
        <a href="Add-Dzul.php" class="btn btn-light text-primary">Add Car</a>
        </div>
    </div>
    </nav>
    <div class="container">
        <h3 class="mt-5">My Show Room</h3>
        <p>List Show Room Amalsyah - 1202200368</p>
        <div class="row mb-5">
                <?php 
                $sql = "SELECT * FROM showroom_amalsyah_table";
                $query = mysqli_query($db, $sql);
                $jmlhrow = mysqli_num_rows($query);
        
                while($item = mysqli_fetch_array($query)){
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="../asset<?=$item['foto_mobil']?>" class="img-thumbnail">
                            <h4 class="mt-3"><?=$item['merk_mobil'].' '.$item['nama_mobil']?></h4>
                            <div class="mb-4"><?=$item['deskripsi']?></div>
                            <a href="/pages/Detail-amalsyah.php?id=<?=$item['id_mobil']?>" class="btn btn-primary px-5 rounded-pill">Detail</a>
                            <a href="/config/delete.php?id=<?=$item['id_mobil']?>" class="btn btn-danger px-5 rounded-pill">Delete</a>
                        </div>
                    </div>
                </div>
                <?php }?>
        </div>
        <p class="fw-bold">Jumlah Mobil: <?=$jmlhrow?></p>
    </div>
    <?php
        session_start();
        if (!empty($_SESSION['msg'])) {
        ?>
        <div class="toast show align-items-center text-bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Data berhasil ditambahkan.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php
        unset($_SESSION['msg']);
        }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</body>
</html>