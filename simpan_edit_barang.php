<?php 
    include('config.php');
    $koneksi = new database();
    
    $cekdir = is_dir("foto_peminjam");
    if ($cekdir) {
        opendir("foto_peminjam");
    }else {
        mkdir("foto_peminjam");
        chmod("foto_peminjam",0755);
        opendir("foto_peminjam");
    }
    $daftar_list = array("jpeg", "jpg", "png");
    $nama_file = $_FILES['foto_peminjam']['name'];
    $pecah = explode(".", $nama_file);
    $ekstensi = $pecah[1];
    //$kode_jk = $_POST['jenis_kelamin'];echo $kode_jk;die();
    //echo $_POST['jenis_kelamin'];die();
    if (in_array($ekstensi, $daftar_list)) 
    {
        $lokasi_foto_peminjam = $_FILES['foto_peminjam']['tmp_name'];
        $nama_foto_peminjam = $_FILES['foto_peminjam']['name'];
        $dir_foto_peminjam = "foto_peminjam/$nama_foto_peminjam";
        move_uploaded_file($lokasi_foto_peminjam, $dir_foto_peminjam);
        $koneksi->edit_data_barang($dir_foto_peminjam,$_POST['kode_barang'], $_POST['nama_brg'],
        $_POST['desk'], $_POST['harga'], $_POST['stock']);
header('location: produk.php');
    }else {
        echo "Type file harus berupa gambar <br>";
        header('location: produk.php');
    }
    // $jenis_kelamin = $_POST['jenis_kelamin'];
    // if ($jenis_kelamin == "Perempuan") {
    //     $kode_jk = 'P';
    // }elseif ($jenis_kelamin == "Laki-laki") {
    //     $kode_jk = 'L';
    // }
    // $koneksi = new database();
    // $koneksi->edit_data_barang($dir_foto_peminjam,$_POST['kode_barang'], $_POST['nama_brg'],
    //              $_POST['desk'], $_POST['harga'], $_POST['stock']);
    // header('location: produk.php');
?>
