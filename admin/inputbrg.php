<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" type="text/css" href="../css/inputbrg.css">
    <link rel="icon" type="image/png" href="../multimedia/images/logo.png" />
</head>
<body>
    <div class="Header">
    <center><h1>Form Input Barang Petshop Ineffable</h1></center>
    

    
    <br/>
    </div>
    <div class="container">
    <form action="inputbrg_function.php" method="POST" name="inputbarang">
        <center>
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
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <div class="form1">
                <tr>
                    <td>Kode Barang</td>
                    <td>: <input type="text" name="kodebrg"></td>
                </tr>
                </div>
                <div class="form2">
                <tr>
                    <td>Jenis Barang</td>
                    <td>: <select name="jenis">
                        <option value="Wet">Wet Food</option>
                        <option value="Dry">Dry Food</option>
                        <option value="Snack Wet">Snack Wet</option>
                        <option value="Snack Dry">Snack Dry</option>
                    </select></td>
                </tr>
                </div>
                <div class="form3">
                <tr>
                    <td>Usia</td>
                    <td>: <input type="radio" name="usia" value="Adult"> Adult
                        <input type="radio" name="usia" value="Kitten"> Kitten
                        <input type="radio" name="usia" value="Both"> Semua Umur
                    </td>
                </tr>
                </div>
                <div class="form4">
                <tr>
                    <td>Brand Barang</td>
                    <td>: <select name="brand">
                        <option value="Whiskas">Whiskas</option>
                        <option value="Cat Choize">Cat Choize</option>
                        <option value="Sheba">Sheba</option>
                        <option value="Temptation">Temptation</option>
                    </select></td>
                </tr>
                </div>
                <div class="form5">
                <tr>
                    <td>Nama Barang</td>
                    <td>: <input type="text" name="namaproduk" size="60"></td>
                </tr>
                </div>
                <div class="form6">
                <tr>
                    <td>Rasa</td>
                    <td>: <input type="text" name="rasa" size="50"></td>
                </tr>
                </div>
                <div class="form7">
                <tr>
                    <td>Ukuran</td>
                    <td>: <input type="text" name="ukuran"></td>
                </tr>
                </div>
                <div class="form8">
                <tr>
                    <td>Stock</td>
                    <td>: <input type="number" name="stok" max="10" min=0></td>
                </tr>
                </div>
                <div class="form9">
                <tr>
                    <td>Harga</td>
                    <td>: <input type="text" name="harga"></td>
                </tr>
                </div>
                <div class="form10">
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto" value="<?php echo $data['foto'] ?>"></td>					
			    </tr>
                </div>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>  
                <td colspan="2" align="center"><input type="submit" value="Save" class="kirim">
                    <input type="reset" value="Reset" class="reset"></td>
                </tr>
                <tr>
                    <td>Keterangan:</td> 
                </tr> 
                <tr>
                    <td> Wet Food  = WF</td>
                </tr>
                <tr>
                    <td> Dry Food  = DF</td>
                </tr>
                <tr>
                    <td> Snack Wet = SW</td>
                </tr>
                <tr>
                    <td> Dry Snack = DS</td>
                </tr>
            </table>
        </center>
    </form>
    </div>
</body>
<script type="text/javascript">
    console.log("10122277_Sheli Maulida Salsiah");
    conosle.log("10122305_Dicky Bariyadi S.");
    console.log("10122307_Dhimas Kurnia P. S.");
    console.log("10122310_Muhammad Fajar Satria Pamungkas");
</script>
</html>