<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h2>LOGIN</h2>
    <form action="validasi_login.php" method="post">
    <div class="form-group">
        <label for="nama_user">Username</label>
        <input type="text" class="form-control" id="nama_user" placeholder="Enter nama_user" name="nama_user" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
    <div>
</body>
</html>