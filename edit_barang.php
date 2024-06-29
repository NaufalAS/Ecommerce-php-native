<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <!-- <?php
       
       include "config.php";
       $db = new Database();
 
        if (isset($_GET['id'])) {
            $kode_barang = $_GET['id'];
            $data_barang = $db->kode_barang($kode_barang);
        }
        else
        {
            echo "aaaa";;
            header('location: produk.php');
        } 
    ?> -->
   
    <br>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">Edit data Barang</div>
        <div class="panel-body">
          <!-- membuat form  -->
          <!-- gunakan tanda [] untuk menampung array  -->
          <form action="simpan_edit_barang.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="kode_barang" value="<?php echo $data_barang[0]['kode_barang'];?>">
            <div class="control-group after-add-more">
              <td>Gambar</td>
              <td> <?php 
                    if (empty($data_barang[0]['foto'])) {
                ?>
                <td>
                    <font color="red">Belum Ada foto</font><br>
                    <input type="file" name="foto_peminjam">
                </td>
                <?php
                    }else {
                ?>
                <td>
                    <img src="<?php echo $data_barang[0]['foto']; ?>" alt="" width="50" height="50"><br>
                    <input type="file" name="foto_peminjam">
                </td>
                <?php
                    } 
                ?></td>
              <label>Kode Barang</label>
              <input type="text" name="kode_barang"  value="<?php echo $data_barang[0]['kode_barang'];?>" disabled>
              <label>Nama Barang</label>
              <input type="text" name="nama_brg"  value="<?php echo $data_barang[0]['nama_brg'];?>">
              <label>Deskripsi</label>
              <input type="text" name="desk"  value="<?php echo $data_barang[0]['desk'];?>">
              <label>harga</label>
              <input type="text" name="harga"  value="<?php echo $data_barang[0]['harga'];?>">
              <label>Stock</label>
              <input type="text" name="stock"  value="<?php echo $data_barang[0]['stock'];?>">
              <br>
              <hr>
            </div>
            <button class="btn btn-success" type="submit" value="simpan">Submit</button>
          </form>
          

          <!-- class hide membuat form disembunyikan  -->
        </div>
      </div>
    </div>
    </div>
    <!-- fungsi javascript untuk menampilkan form dinamis  -->
    <!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
    <script type="text/javascript">
      $(document).ready(function() {
        $(".add-more").click(function() {
          var html = $(".copy").html();
          $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
          $(this).parents(".control-group").remove();
        });
      });
    </script>
</body>
</html>