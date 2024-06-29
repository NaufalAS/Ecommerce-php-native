<?php
 include('config.php');
 $db = new Database();
$koneksi->tambah_data_barang($_POST['nama_org'],$_POST['nohp'],
            $_POST['Alamat_pengirim'],$_POST['kode'],$_POST['nama'],$_POST,['harga_awal'],$_POST['qty'],$_POST['total']);
 header('location: shop.php');
 ?>