
<?php
	include "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/admstyle.css">
<link rel="icon" type="image/png" href="../multimedia/images/logo.png" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
					<div class="col-sm-8"><h1>Data Produk</h1></div>
					<div class="col-sm-4">
						<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> <a href="inputbrg.php">Add New</a></button>
					</div>
	
					<?php 
					if(isset($_GET['pesan'])){
						$pesan = $_GET['pesan'];
						if($pesan == "input"){
							echo "Data berhasil di input.";
						}else if($pesan == "update"){
							echo "Data berhasil di update.";
						}else if($pesan == "hapus"){
							echo "Data berhasil di hapus.";
						}
					}
					?>
	
					<br>
					<?php
					ob_start();
					session_start();
						if(!isset($_SESSION['id'])){
							die("<b>Oops!</b> Access Failed.
								<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
								<button type='button' onclick=location.href='signin_adm.php'>Back</button>");
						}

						$tampilAdm = mysqli_query($conn, "SELECT * FROM admin WHERE username='$_SESSION[username]'");
						$adm = mysqli_fetch_array($tampilAdm);
					?>
					<div class="output">
						<h3>Informasi Admin</h3>
						<table border="0" cellpadding="4">
							<tr>
								<td>Username</td>
								<td>: <?=$adm['username']?></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>: <?=$adm['nama']?></td>
							</tr>
						</table>
					</div>
					<br>

					<table border="1" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Jenis Barang</th>
							<th>Usia</th>
							<th>Brand Produk</th>
							<th>Nama Produk</th>
							<th>Rasa</th>
							<th>Ukuran</th>
							<th>Stock</th>
							<th>Harga</th>
							<th>Foto</th>
							<th>Opsi</th>		
						</tr>
					</thead>
						<?php 
						$query_mysql = mysqli_query($conn,"SELECT * FROM produk")or die(mysql_error());
						$nomor = 1;
						while($data = mysqli_fetch_array($query_mysql)){
						?>
						<tr>
							<td><?php echo $nomor++; ?></td>
							<td><?php echo $data['kodebrg']; ?></td>
							<td><?php echo $data['jenis']; ?></td>
							<td><?php echo $data['usia']; ?></td>
							<td><?php echo $data['brand']; ?></td>
							<td><?php echo $data['namaproduk']; ?></td>
							<td><?php echo $data['rasa']; ?></td>
							<td><?php echo $data['ukuran']; ?></td>
							<td><?php echo $data['stok']; ?></td>
							<td><?php echo $data['harga']; ?></td>
							<td>
								<div class="card-img">
									<div class="img"><img src="<?php echo $data['foto']; ?>"></div>
								</div>
							</td>
							<td>
								<a class="edit" title="Edit" href="edit.php?id=<?php echo $data['kodebrg']; ?>"><i class="material-icons">&#xE254;</i></a> |
								<a class="hapus" title="hapus" href="hapus.php?id=<?php echo $data['kodebrg']; ?>"><i class="material-icons">&#xE872;</i></a>					
							</td>
						</tr>
						<?php } ?>
					</table>
					<button><a href="signinadm_function.php?op=out">Keluar</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var actions = $("table td:last-child").html();
		// Append table with add row form on add new button click
		$(".add-new").click(function(){
			$(this).attr("disabled", "disabled");
			var index = $("table tbody tr:last-child").index();
			var row = '<tr>' +
				'<td><input type="text" class="form-control" name="name" id="name"></td>' +
				'<td><input type="text" class="form-control" name="department" id="department"></td>' +
				'<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
				'<td>' + actions + '</td>' +
			'</tr>';
			$("table").append(row);		
			$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
			$('[data-toggle="tooltip"]').tooltip();
		});
		// Add row on add button click
		$(document).on("click", ".add", function(){
			var empty = false;
			var input = $(this).parents("tr").find('input[type="text"]');
			input.each(function(){
				if(!$(this).val()){
					$(this).addClass("error");
					empty = true;
				} else{
					$(this).removeClass("error");
				}
			});
			$(this).parents("tr").find(".error").first().focus();
			if(!empty){
				input.each(function(){
					$(this).parent("td").html($(this).val());
				});			
				$(this).parents("tr").find(".add, .edit").toggle();
				$(".add-new").removeAttr("disabled");
			}		
		});
		// Edit row on edit button click
		$(document).on("click", ".edit", function(){		
			$(this).parents("tr").find("td:not(:last-child)").each(function(){
				$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
			});		
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").attr("disabled", "disabled");
		});
		// Delete row on delete button click
		$(document).on("click", ".delete", function(){
			$(this).parents("tr").remove();
			$(".add-new").removeAttr("disabled");
			});
	});
</script>
</body>
<script type="text/javascript">
console.log("10122305_Dicky Bariyadi S.");
console.log("10122307_Dhimas Kurnia P. S.");
console.log("10122310_Muhammad Fajar S. P.");
</script>
</html>              