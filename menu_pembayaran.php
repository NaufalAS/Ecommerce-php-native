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
  <html lang="en">

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
      <div class="control-group after-add-more">
        <div class="panel-heading">Edit data Barang</div>
        <div class="panel-body">
          <!-- membuat form  -->
          <!-- gunakan tanda [] untuk menampung array  -->
          <form action="pembayaran.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="kode_barang" value="<?php echo $data_barang[0]['kode_barang'];?>">
          <input type="hidden" name="nama_brg" value="<?php echo $data_barang[0]['nama_brg'];?>">
          <input type="hidden" name="harga" value="<?php echo $data_barang[0]['harga'];?>">
            <div class="control-group after-add-more">
              <label>Kode Barang</label>
              <input type="text" name="kode_barang"  value="<?php echo $data_barang[0]['kode_barang'];?>" disabled>&ensp;
              <label>Nama Barang</label>
              <input type="text" name="nama_brg"  value="<?php echo $data_barang[0]['nama_brg'];?>" disabled> &ensp;
              <label>harga</label>
              <input type="text" name="harga"  value="<?php echo $data_barang[0]['harga'];?>" disabled> &ensp;
              <br>
              <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
              <br>
              <hr>
            </div>
            <input type="submit" name="hitung" value="Pembayaran" value="">
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
</body>

</html>