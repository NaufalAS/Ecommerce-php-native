<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</head>

<body>
    <!-- navbar mulai -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
        <a class="navbar-brand me-5 me-lg-5" href="#">NASA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu_user.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="colaborasi.html">Colaborasi</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>

            <ul class="navbar-nav d-flex flex-row">
        <!-- Icons -->
          <!-- Icon dropdown -->
          <li class="nav-item me-3 me-lg-5 nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/user.png" alt="">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <li><a class="dropdown-item" href="login.php">Login</a></li> -->
              <li><a class="dropdown-item" href="#">Shop</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logout.php">Exit</a></li>
            </ul>
          </li>
        <!-- <li class="nav-item me-3 me-lg-5">
          <a class="nav-link" href="#">
            <img src="img/shop.png" alt="">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li> -->
      </ul>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <section class="bg-light pt-4 pb-4">
        <div class="container">
            <?php
            include 'config.php';
            $db = new Database();
            ?>
            <div class="row g-1">
                <div class="col-lg-12">
                    <div class="d-block rounded shadow bg-white p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">stock</th>
                                    <th scope="col">edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($db->tampil_data() as $x) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <?php
                                            if (empty($x['foto'])) {
                                            ?>
                                                <font color="red">Belum ada foto</font>
                                            <?php
                                            } else {
                                            ?>
                                                <img src="<?php echo $x['foto']; ?>" alt="" width="50" height="50">
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $x['kode_barang']; ?></td>
                                        <td><?php echo $x['nama_brg']; ?></td>
                                        <td><?php echo $x['desk']; ?></td>
                                        <td><?php echo $x['harga']; ?></td>
                                        <td><?php echo $x['stock']; ?></td>
                                        <td><a href="menu_pembayaran.php?id=<?php echo $x['kode_barang']; ?>"><img src="img/beli.png" alt=""></a></td>
                                        <div class="row g-2">
                                            <div class="col-12 col-lg-12">
                                            </div>
                                        </div>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                        </tbody>
    </section>
    </div>
    </div>
    </div>
    </div>
    <footer style="background-color: #2c2f33;">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-4 mt-5 mb-5 ">
                    <div class="center">
                    <img src="img/nasa1.png" class="col-12 col-md-7 mb-2"  >
                    <section class="mb-3">
                      <!-- Facebook -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="img/facebook.png" alt="">
                        <i class="fab fa-facebook-f"></i
                      ></a>
                
                      <!-- Twitter -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="img/twiter.png" alt=""><i class="fab fa-twitter"></i
                      ></a>
                
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><img src="img/ig1.png" alt=""><i class="fab fa-instagram"></i
                  ></a>
                
                      <!-- Linkedin -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="img/lkd.png" alt=""><i class="fab fa-linkedin-in"></i
                      ></a>
                    </section>
                  </div>
                    </div>
                  <div class="col-12 col-md-4 mt-5">
                      <h4 class="fw-semibold text-white">Kontak</h4>
                      <hr class="text-white" width="100">
                      <p class="mt-3 text-white">Alamat : Jl. Ahmad Yani Batam Kota. Kota Jakarta. Prov Jakarta. Indonesia
                      </p>
                      <p class="text-white">Phone : +62-894325262646</p>
                      <p class="text-white">Fax : +62-778-12457</p>
                      <p class="text-white">Email : nasa@gmail.com</p>
                  </div>
                  <div class="col-12 col-md-4 mt-5">
                      <h4 class="fw-semibold text-white">Tautan Penting</h4>
                      <hr class="text-white" width="200">
                      <ul class="list-unstyled">
                          <li class="mt-3">
                              <a href="logout.php" class="text-decoration-none text-white">Exit</a>
                          </li>
                          <li class="mt-3">
                              <a href="shop.php" class="text-decoration-none text-white">Shop</a>
                          </li>
                          <li class="mt-3">
                          <a href="colaborasi.html" class="text-decoration-none text-white">Colaborasi</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <hr class="text-white">
              <p class="text-center text-white pb-2">Copyright NASA ® 2022</p>
          </div>
      </footer>
</body>

</html>