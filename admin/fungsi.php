<?php
include '../koneksi.php';
function tambah_data($data){

    $no_kamar = $data['no_kamar'];
    $status = $data['status'];
    $deskripsi = $data['deskripsi'];

    $query = "INSERT INTO tb_kamar VALUES(null, '$no_kamar',  '$status',  '$deskripsi')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function ubah_data($data){
    $id = $data['id'];
    $no_kamar = $data['no_kamar'];
    $status = $data['status'];
    $deskripsi = $data['deskripsi'];

    $queryshow = "SELECT * FROM tb_kamar WHERE id = '$id';";
    $sqlshow = mysqli_query($GLOBALS['conn'], $queryshow);
    $result = mysqli_fetch_assoc($sqlshow);

    $query = "UPDATE tb_kamar SET no_kamar='$no_kamar', status = '$status', deskripsi = '$deskripsi' WHERE id='$id';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function hapus_data($data){
    $id = $data['hapus'];

    $queryshow = "SELECT * FROM tb_kamar WHERE id = '$id';";
    $sqlshow = mysqli_query($GLOBALS['conn'] , $queryshow);
    $result = mysqli_fetch_assoc($sqlshow);

    $query="DELETE FROM tb_kamar WHERE id = '$id' ;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;

}

?>