<?php
include 'koneksi.php';
session_start();

$query = "SELECT * FROM tb_kamar;";
$sql = mysqli_query($conn, $query);
$no = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="datatables/datatables.css">
    <script src="datatables/datatables.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>tb_kamar</title>
</head>

<script>
    $(document).ready(function(){
        $('#dt').DataTable();
    });
</script>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                php
            </a>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-3">Hotelku</h1>
        <figure>
            <blockquote class="blockquote">
                <p>db_hotel</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                tb_kamar <cite title="Source Title"> php</cite>
            </figcaption>
        </figure>

        <a href="logout.php" type="button" class="btn btn-primary mb-3"> <i class="fa fa-user-times"></i> Logout</a>

        <div class="table-responsive">
            <table id="dt" class="table align-middle table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center>No</center>
                        </th>
                        <th scope="col">No kamar</th>
                        <th scope="col">status</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while (
                        $result = mysqli_fetch_assoc($sql)
                    ) {
                    ?>
                        <tr>
                            <th scope="row">
                                <center><?php echo ++$no; ?>.</center>
                            </th>
                            <td><?php echo $result['no_kamar']; ?></td>
                            <?php if($result['status']=='Vacant'): ?>
                            <td class="fw-bolder bg-success">
                                <?php echo $result['status']; ?>
                            </td>
                            <?php else: ?>
                            <td class="fw-bolder bg-warning">
                                <?php echo $result['status']; ?>
                            </td>
                            <?php endif ?>
                            <td><?php echo $result['deskripsi']; ?></td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="m-5 align-middle align-center">    <h6>Hello mom</h6></div>


</body>

</html>