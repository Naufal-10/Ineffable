<!-- 10122287_Naufal Fahrezi M. -->
<!-- 10122277_Sheli Maulida Salsiah -->
<?php
    include "../config.php";

        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $re_password = $_POST["re_pass"];

        $cek_username = mysqli_query($conn,"SELECT * FROM customers WHERE username = '$username'");
        if(mysqli_num_rows($cek_username) == 1) {
            //time()+60
            echo "Username already used";
            header("location: signin_cus.php");
            // return false;
        }

        if($password == $re_password){
            $sql = "INSERT INTO customers (nama,alamat,phone,email,username,pass,re_pass) VALUES ('$nama', '$alamat', '$phone', '$email', '$username', '$password','$re_password')";
            mysqli_query($conn, $sql);  
            header("location: signin_cus.php");
        }else{
            echo "Password is not matched";
            header("location: signup_cus.php");
        }

?>