<?php 
    session_start();
    $nama_user = $_SESSION['nama_user'];
    include "config.php";
    $db = new Database();

    foreach ($db->login($nama_user) as $x) {
        $username = $x['username'];
        if ($username == 'user') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Buku</title>
</head>
<body>
    <?php
        include "index.html"; 
    ?>
</body>
</html>
<?php 
        }else {
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>