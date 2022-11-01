
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    body {
        font-family:"Trebuchet MS",sans-serif;
        
    }  
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Amalsyah_Home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Amalsyah_Booking.php">Booking</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

  
        <div>
        <h5 class="bg-dark text-center p-2 m-2 w-75 mt-2 m-auto text-white">Rent your car now!</h5>
            <div class="row mx-auto w-75 p-3 mt-2" style="border:solid 1px grey;">
                <div class="col-6 text-center">
                    <?php
                    if (isset($_GET["nomor"]) ) {
                        if ($_GET["nomor"] == "1") {
                            echo '<img src="img/rush.jpeg" class="w-75" alt="">';
                        } elseif ($_GET["nomor"] == "2") {
                            echo '<img src="img/alya.jpeg" class="w-75" alt="">';
                        } elseif ($_GET["nomor"] == "3"){
                            echo '<img src="img/brio.jpeg" class="w-75" alt="">';
                        }
                        
                    } else {
                        echo '<img src="img/rush.jpeg" class="w-75" alt="">';
                    };

                    ?>
                    
                </div>

                <div class="col-6">
                    <form action="Amalsyah_ListBooking.php" method="post">
                    <label for="">Name</label>
                    <input type="text" class="form-control form-control-readonly" readonly value="Amalsyah_1202200368" name="nama">

                    <input type="hidden" class="form-control form-control-readonly" readonly value="<?rand()?>" name="id">

                    <label for="">Book Date</label>
                    <input type="date" class="form-control" name="tanggal">

                    <label for="">Start Time</label>
                    <input type="time" class="form-control" name="waktu">

                    <label for="">Duration</label>
                    <input type="number" class="form-control" name="jam">
                    <label for="">Car Type</label>
                    <select name="jenismobil" id="" class="form-select">
                        <option value="Toyota Rush">Toyota Rush</option>
                        <option value="Toyota Alya">Toyota Alya</option>
                        <option value="Honda Brio">Honda Brio</option>
                    </select>

                    <label for="">Phone Number</label>
                    <input type="number" class="form-control " name="nomorhp">

                    <label for="">Add Service</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="25000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                            Health protocol/Rp25.000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input " type="checkbox" value="250000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                            Driver/Rp.100.000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="100000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                             Fuelfilled/Rp.250.000
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book</button>
                    </form>
                </div>
            </div>
        </div>
  

        <footer class=" text-center bg-dark text-white" >created by : amalsyah_1202200368</footer>

</body>
