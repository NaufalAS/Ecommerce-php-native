<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light d-block pt-2 pb-2 px-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Safna Prasetiono</p>
                                        <span class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Quia sint laboriosam in architecto earum.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-file fa-lg dropdown-icons bg-warning text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">file informations</p>
                                        <span class="content-text">your file has exceeded the limit.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-hdd-o fa-lg dropdown-icons bg-danger text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Storage</p>
                                        <span class="content-text">Your storage is full, delete some files.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="./images/user/user.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <i mg src="./images/user/user.png" alt="user" class="img-user me-2">
                                    <div class="d-block">
                                        <p class="fw-bold m-0 lh-1">YourName</p>
                                        <small>YourAccount@gmail.com</small>
                                    </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                    <small class="text-white">YourAccount@gmail.com</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="menu_admin.html">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="produk.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Product
                    </a>
                    <a class="nav-link px-3" href="data_sales.php">
                        <i class="fa fa-shopping-cart fa-lg box-icon" aria-hidden="true"></i>Data Sales
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="logout.php">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Menu Produk</h2>
                            <p>Disini anda bisa menambahkan data mengedit dan menghapus data produk sesuai data penjualan anda.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-1">
                        <div class="card p-1 shadow">
                            <div class="d-flex align-items-center px-4">
                                <a href="add.php"><img src="img/plus.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                
        <div class="container">
                <?php
                include 'config.php';
                $db = new Database();
                ?>
                <div class="row g-2">
                    <div class="col-12 col-lg-12 ">
                        <div class="d-block rounded shadow bg-white p-3">
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
                                        <th scope="col">hapus</th>
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
                                            <td><a href="edit_barang.php?id=<?php echo $x['kode_barang']; ?>"><img src="img/edit.png" alt=""></a></td>
                                            <td><a href="hapus_barang.php?id=<?php echo $x['kode_barang']; ?>"><img src="img/delete.png" alt=""></a></td>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        </div>

        <div class="slider-background" id="sliders-background"></div>
        <script src="./dist/js/jquery.js"></script>
        <script src="./assets/app/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <script src="./dist/js/index.js"></script>

</body>

</html>