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
    <br>
    <div class="container">
        <div class="panel panel-default">
        <form action="kurang_stock.php" method="POST" enctype="multipart/form-data">
            <div class="panel-heading">Alamat pengirim</div>
            <div class="panel-body">
                <!-- membuat form  -->
                <!-- gunakan tanda [] untuk menampung array  -->
                <form action="kurang_stock.php" method="post" enctype="multipart/form-data">
                    <div class="control-group after-add-more">
                        <label>Nama</label>
                        <input type="text" name="namaorg" class="form-control">
                        <label>No hp</label>
                        <input type="text" name="Nohp" class="form-control">
                        <label>Alamat pengirim</label>
                        <input type="text" name="Alamat" class="form-control">
                        <br>
                        <?php
                                    $no = 1;
                                    if (isset($_POST['hitung'])) {
                                        $id_brg    = $_POST['kode_barang'];
                                        $nama   = $_POST['nama_brg'];
                                        $harga_awal  = $_POST['harga'];
                                        $qty    = $_POST['qty'];
                                        $total    = $harga_awal * $qty;
                                        ?>
                                                 <label>Kode Barang</label>
              <input type="text" name="id_brg"  value="<?php echo $id_brg;?>"  class="form-control" readonly>&ensp;
              <label>nama</label>
              <input type="text" name="nama"  value="<?php echo $nama;?>"  class="form-control" readonly>&ensp;
              <label>Banyaknya</label>
              <input type="text" name="qty"  value="<?php echo $qty;?>"  class="form-control" readonly>&ensp;
              <label>Total Harga</label>
              <input type="text" name="total"  value="<?php echo $total;?>"  class="form-control" readonly>&ensp;
                                    <?php
                                    }
                                    ?>
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