
<?php 
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Halaman Admin</title>
        <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
        <link rel="icon" type="image/png" href="../multimedia/images/logo.png" />
    </head>
    <body>
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="signinadm_function.php?op=in" method="POST" id="masukAdmin">

            <h3 class="mb-5">HALAMAN ADMIN</h3>

            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control form-control-lg" placeholder="username"/>
              <label class="form-label" name="username"></label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="pass" class="form-control form-control-lg" placeholder="password"/>
              <label class="form-label"></label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>
           
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>

            <hr class="my-4">
            <div>
              <p class="mb-0"> bukan admin? <a href="../user/signin_cus.php" class="text-blue-50 ">kembali</a></p>
            </div>
    </body>
    <script type="text/javascript">
      console.log("10122277_Sheli Maulida Salsiah");
      console.log("10122287_Naufal Fahrezi M.");
    </script>
</html>
