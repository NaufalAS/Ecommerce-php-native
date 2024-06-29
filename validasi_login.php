<?php 
    include "config.php";
    $db = new Database();
    $nama_user = $_POST['nama_user'];
    $password = $_POST['password'];

    foreach($db->login($nama_user, $password) as $x){
        session_start();
        $_SESSION["nama_user"] = $nama_user;
        $_SESSION["password"] = $password;
        $username = $x["username"];
        $pass = $x['password'];
        //memeriksa user login sebagai admin atau peminjam
        if(($username == 'admin') AND ($password==$pass)){
            header('Location: menu_admin.html');
        }
        else if(($username == 'user')AND ($password==$pass)){
            header('Location: menu_user.html');
        }
        else{
            header('Location: index.php');
        }
    }
?>