<!-- 10122287_Naufal Fahrezi M. -->
<!-- 10122307_Dhimas Kurnia P. S. -->
<?php
    ob_start();
    session_start();
    include "../config.php";
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $op = $_GET['op'];
    if($op == 'in'){
        $cek_username = mysqli_query($conn, "SELECT * FROM customers WHERE username = '$username' AND pass ='$password'");
        if( mysqli_num_rows($cek_username) === 1 ) {
            $row = mysqli_fetch_assoc($cek_username);
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['pass'] = $row['pass'];
            header("location:../web.php");
        }
        else {
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. Username & password tidak sesuai ...');
                document.location='signin_cus.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['username']);
        unset($_SESSION['pass']);
        header("location: ../web.php");
    }    
?>
