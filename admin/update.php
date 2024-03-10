<!-- 10122287_Naufal Fahrezi M. -->
<!-- 10122277_Sheli Maulida Salsiah -->
<?php 
 
include '../pages/config.php';
$kodebrg = $_POST['kodebrg'];
$jenis = $_POST['jenis'];
$usia = $_POST['usia'];
$brand = $_POST['brand'];
$namaproduk = $_POST['namaproduk'];
$rasa = $_POST['rasa'];
$ukuran = $_POST['ukuran'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$foto = $_POST['foto'];
 
mysqli_query($conn,"UPDATE produk SET kodebrg='$kodebrg', jenis='$jenis', usia='$usia', brand='$brand', namaproduk='$namaproduk', rasa='$rasa', ukuran='$ukuran', stok='$stok', harga='$harga', foto='$foto' WHERE kodebrg='$kodebrg'");
 
header("location:admin.php?pesan=update");
?>