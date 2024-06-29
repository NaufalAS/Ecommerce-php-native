<?php 
    include('config.php');
    $db = new Database();
    if (isset($_GET['id'])) {
        $kode_barang = $_GET['id'];
        $db->hapus_barang($kode_barang);
        header('location:produk.php');
    }else {
        header('Location : produk.php');
    }
?>