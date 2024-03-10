<?php
    include "../config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>|Petshop Ineffable|</title>
    <link rel="icon" type="image/png" href="../multimedia/images/logo.png" />
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                    <form action="signincus_function.php?op=in" method="POST">

                        <h3 class="mb-2">Petshop ineffable</h3>
                        <p>Selamat Datang Di Website Petshop Ineffable</p>
                        <p>Kami menyediakan makanan peliharaan terbaik untuk anda</p>
                        <hr>

                        <div class="form-outline mb-4">
                            <input type="text" id="typeEmailX-2" name="username" class="form-control form-control-lg" placeholder="username"/>
                            <label class="form-label" for="typeEmailX-2" name="username"></label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX-2" name="pass" class="form-control form-control-lg" placeholder="password"/>
                            <label class="form-label" for="typePasswordX-2"></label>
                        </div>
                
                        <button type="submit" class="btn btn-primary btn-lg btn-bloc">sign in</button>
                    </form>
                   <div>
                        <br>
                        <p>belum punya akun? <a href="../user/signup_cus.php">daftar sekarang</a></p>
                    </div>
</body>
<script type="text/javascript">
    console.log("10122277_Sheli Maulida Salsiah");
    console.log("10122310_Muhammad Fajar Satria Pamungkas");
  </script>
</html>