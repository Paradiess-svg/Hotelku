<?php
include 'koneksi.php';
function tambah_data($data){

    $username = $data['name'];
    $password = md5($data['password']);

    $query = "INSERT INTO tb_login VALUES(null, '$username','$password',  'user'  )";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}