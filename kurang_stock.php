<?php
  include 'config.php';
  $koneksi = new database();
    $koneksi->kurang_stock($_POST['namaorg'],$_POST['Nohp'],
            $_POST['Alamat'],$_POST['nama'],$_POST['qty'],$_POST['total'], $_POST['id_brg']);
 header('location: shop.php');

?>