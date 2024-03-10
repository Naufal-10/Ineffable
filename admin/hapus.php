<!-- 10122287_Naufal Fahrezi M. -->
<!-- 10122307_Dhimas Kurnia P. S. -->
<?php 
include '../pages/config.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM produk WHERE kodebrg='$id'");
 
header("location:admin.php?pesan=hapus");
?>