<!DOCTYPE html>
<html lang="en">
    <?php session_start()?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Bersama | Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body class="bg-secondary" style="height:100vh">
    <div class="h-100 d-flex justify-content-center align-items-center">
        <div class="col-7 col-lg-3">
            <div class="card shadow">
                <div class="card-body">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?php 
        if(isset($_SESSION['eksekusi'])):
        ?>

        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>
                <?php
                echo $_SESSION['eksekusi'];
                ?>
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php 

        session_destroy();
        endif;
        ?>
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger' role='alert'>Username / Password tak sesuai, silakan coba lagi! </div>";
                        }
                    }
                    ?>

<h1 class="card-title text-center text-info mt-2 fs-1 fw-bold">Hotelku</h1>
                    <h2 class="card-title text-center text-success mb-4 fs-1"><i class="fa fa-bed" aria-hidden="true"></i> Register</h2>

                    <form action="registerProses.php" method="post" class="col-10 mx-auto">
                        <div class="form-group mt-3">
                            <label for="name" class="form-label">Username</label>
                            <input required type="text" name="name" class="form-control" id="name" placeholder="Ex:Farrel Laksana Soetarjo">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group mt-4 mb-3">
                            <input type="submit" name="aksi" value="register" class="form-control btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>