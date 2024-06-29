<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "tubes";
    var $koneksi = "";
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from data_barang");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    // function tambah_user($nama_user,$username,$password){
    //     mysqli_query($this->koneksi,"insert into user values('','$nama_user','$username','$password')");
    // }
    function login($nama_user)
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM user where nama_user = '$nama_user'");
        if (mysqli_num_rows($data) == 0) {
            echo "<b>data user tidak</b>";
            $hasil = [];
            header('location: login.php');
        } else {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }
    function tambah_data_barang($foto, $kode_barang, $nama_brg, $desk, $harga, $stock)
    {
        mysqli_query($this->koneksi, "insert into data_barang values ('','$foto','$kode_barang','$nama_brg',
            '$desk','$harga','$stock')");
        // $ambil_id = mysqli_query($this->koneksi,"select id from data_barang ORDER BY id DESC LIMIT 1");
        // $row_id = mysqli_fetch_array($ambil_id);
        // $hasil_id = $row_id['id'];
        // mysqli_query($this->koneksi, "insert into user values('','$kode_barang','$kode_barang', '2','$hasil_id')");
        //  mysqli_query($this->koneksi, "insert into user values('','$kode_peminjam','$nama_peminjam','$jenis_kelamin',
        //                '$tanggal_lahir','$alamat','$pekerjaan')");
    }
    function hapus_barang($kode_barang)
    {
        mysqli_query($this->koneksi, "DELETE from data_barang where kode_barang = '$kode_barang'");
    }
    function edit_data_barang($foto, $kode_barang, $nama_brg, $desk, $harga, $stock)
    {

        mysqli_query($this->koneksi, "UPDATE data_barang set  foto = '$foto',
                            nama_brg = '$nama_brg', desk = '$desk', harga = '$harga', stock = '$stock'  WHERE kode_barang = '$kode_barang'");
    }
    function kode_barang($kode_barang)
    {
        // $data_barang = mysqli_query($this->koneksi, "SELECT* from data_barang
        //                       ");
        // while ($row_barang = mysqli_fetch_assoc($data_barang)) {
        //     $hasil_barang[] = $row_barang;
        // }
        // return $hasil_barang;
        $data_barang = mysqli_query($this->koneksi,"select a.* from data_barang a
                                where a.kode_barang='$kode_barang'");
                                while ($row_peminjam = mysqli_fetch_assoc($data_barang)) {
                                    $hasil_peminjam[] = $row_peminjam;
                                }
                                return $hasil_peminjam;
    }
    function kurang_stock($nama_org, $Nohp, $Alamat, $nama, $qty, $total, $id_brg)
    {
        $selSto = mysqli_query($this->koneksi, "SELECT * FROM data_barang WHERE kode_barang='$id_brg'");
        $sto    = mysqli_fetch_array($selSto);
        $stock    = $sto['stock'];
        //menghitung sisa stok
        $sisa    = $stock - $qty;
        $insert = mysqli_query($this->koneksi, "insert into tb_out values ('','$nama_org','$Nohp','$Alamat','$nama','$qty','$total')");
        header('location: shop.php');
        if ($insert) {
            //update stok
            $upstok = mysqli_query($this->koneksi, "UPDATE data_barang SET stock='$sisa' WHERE kode_barang ='$id_brg'");
        } else {
            echo "<div><b>Oops!</b> 404 Error Server.</div>";
        }

        // function harga_brg()
        // {
        //     $query = "SELECT * FROM data_barang WHERE id = $";
        //     $result = mysqli_query($conn, $query);
        //     $product = mysqli_fetch_assoc($result);

        //     // Hitung total harga dengan mengalikan harga satuan dengan jumlah stock
        //     $total_price = $product['price'] * $product['stock'];
        // }

    }
    function keluar()
    {
        $data_out = mysqli_query($this->koneksi, "SELECT * FROM tb_out");
        while ($row = mysqli_fetch_array($data_out)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?> 