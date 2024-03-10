<!-- 10122287_Naufal Fahrezi M. -->
<!-- 10122277_Sheli Maulida Salsiah -->
<?php 
include '../pages/config.php';
$kodebrg    = $_POST['kodebrg'];
$jenis      = $_POST['jenis'];
$usia       = $_POST['usia'];
$brand      = $_POST['brand'];
$namaproduk = $_POST['namaproduk'];
$rasa       = $_POST['rasa'];
$ukuran     = $_POST['ukuran'];
$stok       = $_POST['stok'];
$harga      = $_POST['harga'];
$foto      = $_POST['foto'];

$cek_username = mysqli_query($conn, "SELECT * FROM produk WHERE kodebrg='$kodebrg'");
if( mysqli_num_rows($cek_username) === 1 ){
    echo "<center><h1>$kodebrg Sudah Tersedia</h1></center>";
    echo "<center><a href='inputbrg.php'>Kembali</a></center>";
}
else{
    mysqli_query($conn,"INSERT INTO produk VALUES(DEFAULT,'$kodebrg','$jenis','$usia','$brand','$namaproduk','$rasa','$ukuran','$stok','$harga','$foto')");

header("location:admin.php?pesan=input");
}
?>