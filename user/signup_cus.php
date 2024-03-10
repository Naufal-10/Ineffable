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
<section style="background-color: #508bfc;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="signupcus_function.php" method="POST">

                <div class="form-outline mb-4">
                  <input type="text" name="nama" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">nama</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="alamat" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">alamat</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="phone" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">no hp</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="pass" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="re_pass" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Re-password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">sudah punya akun? <a href="signin_cus.php"
                    class="fw-bold text-body"><u>masuk disini</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script type="text/javascript">
    console.log("10122305_Dicky Bariyadi S.");
    console.log("10122277_Sheli Maulida Salsiah");
  </script>
</html>
