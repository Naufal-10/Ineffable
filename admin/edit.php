<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Produk</title>
	<link rel="stylesheet" type="text/css" href="../css/inputbrg.css">
	<link rel="icon" type="image/png" href="../multimedia/images/logo.png" />
</head>
<body>
	<center>
		
	
		<br/>
		<h3>Edit data</h3>
	
		<?php 
		include "../pages/config.php";
		$id = $_GET['id'];
		$query_mysql = mysqli_query($conn,"SELECT * FROM produk WHERE kodebrg='$id'");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
<div class="container">
	<form action="update.php" method="post">		
			<table>
				<tr>
					<td colspan="2" class="form0"><center><a href="admin.php">Lihat Semua Data</a></center></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>Kode Barang</td>
					<td>
						<input type="text" name="kodebrg" value="<?php echo $data['kodebrg'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>Jenis Barang</td>
					<td><input type="text" name="jenis" value="<?php echo $data['jenis'] ?>"></td>					
				</tr>	
				<tr>
					<td>Usia</td>
					<td><input type="text" name="usia" value="<?php echo $data['usia'] ?>"></td>					
				</tr>
				<tr>
					<td>Brand Produk</td>
					<td><input type="text" name="brand" value="<?php echo $data['brand'] ?>"></td>					
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="namaproduk" value="<?php echo $data['namaproduk'] ?>"></td>					
				</tr>
				<tr>
					<td>Rasa</td>
					<td><input type="text" name="rasa" value="<?php echo $data['rasa'] ?>"></td>					
				</tr>
				<tr>
					<td>Ukuran</td>
					<td><input type="text" name="ukuran" value="<?php echo $data['ukuran'] ?>"></td>					
				</tr>
				<tr>
					<td>Stock</td>
					<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>					
				</tr>	
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
				</tr>
				<tr>
					<td>Foto</td>
					<td><input type="text" name="foto" value="<?php echo $data['foto'] ?>"></td>					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan" class="kirim"></td>					
				</tr>				
			</table>
		</form>
	</div>
		
		<?php } ?>
	</center>
</body>
<script type="text/javascript">
console.log("10122277_Sheli Maulida Salsiah");
console.log("10122305_Dicky Bariyadi S.");
console.log("10122310_Muhammad Fajar Satria Pamungkas");
</script>
</html>