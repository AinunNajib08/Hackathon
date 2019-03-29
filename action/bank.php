<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $id = $_GET['id'];
    $bank = $_POST['bank'];
    $cabang = $_POST['cabang'];
    $pw = $_POST['norek'];
    $no_hp = $_POST['pemrek'];


    $sql = "UPDATE datainvestor SET kode_bank = '$bank' WHERE id='$id'";
    mysqli_query($koneksi, $sql);
    echo $bank;
}





    mysqli_close($koneksi);
    //header("location: ../data-bank.php?id=$id");

 
?>