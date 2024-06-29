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
</head>

<body>
  <html lang="en">

  <body>
    <br>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">Form Tambah Data Dinamis</div>
        <div class="panel-body">
          <!-- membuat form  -->
          <!-- gunakan tanda [] untuk menampung array  -->
          <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="control-group after-add-more">
              <td>Gambar</td>
              <td><input type="file" name="foto_peminjam"></td>
              <label>Kode Barang</label>
              <input type="text" name="kode_barang" class="form-control">
              <label>Nama Barang</label>
              <input type="text" name="nama_brg" class="form-control">
              <label>Deskripsi</label>
              <input type="text" name="desk" class="form-control">
              <label>harga</label>
              <input type="text" name="harga" class="form-control">
              <label>Stock</label>
              <input type="text" name="stock" class="form-control">
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