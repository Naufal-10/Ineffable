<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$produkByKodebrg = $db_handle->runQuery("SELECT * FROM produk WHERE kodebrg='" . $_GET["kodebrg"] . "'");
			$itemArray = array($produkByKodebrg[0]["kodebrg"]=>array('namaproduk'=>$produkByKodebrg[0]["namaproduk"], 'kodebrg'=>$produkByKodebrg[0]["kodebrg"], 'quantity'=>$_POST["quantity"], 'harga'=>$produkByKodebrg[0]["harga"], 'foto'=>$produkByKodebrg[0]["foto"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($produkByKodebrg[0]["kodebrg"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($produkByKodebrg[0]["kodebrg"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "show_discount":
		if (! empty($_SESSION["cart_item"])) {
			if (! empty($_POST["voucher"])) {
				$voucher = $db_handle->runQuery("SELECT harga FROM voucher WHERE voucher='" . $_POST["voucher"] . "'");
				
				if (! empty($voucher)) {
					foreach ($voucher as $key => $value) {
						$hargaDiskon =$voucher[$key]['harga'];
					}
					if (! empty($hargaDiskon) && $hargaDiskon > $_POST["total"]) {
						$message = "Invalid Discount Coupon";
					}
				} else {
					$message = "Invalid Discount Coupon";
				}
			}
		} else {
			$message = "Not applicable. The cart is empty";
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["kodebrg"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
	<TITLE>Cart</TITLE>
	<link href="./css/cart.css" type="text/css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="./multimedia/images/logo.png" />
</HEAD>
<BODY bgcolor="#a6e4e7">
	
	<div id="shopping-cart">
	<div class="txt-heading"><center><h1>Shopping Cart</h1></center></div>

	<a id="btnEmpty" href="web.php">Kembali</a>
	<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
	<?php
	if(isset($_SESSION["cart_item"])){
		$total_quantity = 0;
		$total_harga = 0;
	?>	
	<table class="tbl-cart" cellpadding="10" cellspacing="1" >
		<tr>
			<th style="text-align:left;">Nama Produk</th>
			<th style="text-align:left;">Kodebarang</th>
			<th style="text-align:right;" width="5%">Quantity</th>
			<th style="text-align:right;" width="10%">Harga Satuan</th>
			<th style="text-align:right;" width="10%">Total Harga</th>
			<th style="text-align:center;" width="5%">Hapus</th>
		</tr>	
			<?php		
				foreach ($_SESSION["cart_item"] as $item){
					$item_harga = $item["quantity"]*$item["harga"];
			?>
		<tr>
			<td><img src="<?php echo $item["foto"]; ?>" class="cart-item-foto" /><?php echo $item["namaproduk"]; ?></td>
			<td><?php echo $item["kodebrg"]; ?></td>
			<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
			<td  style="text-align:right;"><?php echo "Rp. ".$item["harga"]; ?></td>
			<td  style="text-align:right;"><?php echo "Rp. ". number_format($item_harga,3); ?></td>
			<td style="text-align:center;"><a href="cart.php?action=remove&kodebrg=<?php echo $item["kodebrg"]; ?>" class="btnRemoveAction"><img src="./multimedia/images/icon-delete.png" alt="Remove Item" /></a></td>
		</tr>
			<?php
				$total_quantity += $item["quantity"];
				$total_harga += ($item["harga"]*$item["quantity"]);
			}
			?>
			<form id="applyDiscountForm" method="post" action="cart.php?action=show_discount" onsubmit="return validate();">
		<tr>
			<td colspan="2" align="right">Total:<input type="hidden" name="total" value="<?php echo $total_harga; ?>"></td>
			<td align="right"><?php echo $total_quantity; ?></td>
			<td align="right" colspan="2"><strong><?php echo "Rp. ".number_format($total_harga, 3); ?></strong></td>
			<td></td>
		</tr>
			<?php     
				if (!empty($hargaDiskon) && $total_harga > $hargaDiskon) {
					$total_harga_setelah_diskon = $total_harga - $hargaDiskon;
			?>
		<tr>
			<td colspan="3" align="right">Discount:<input type="hidden" name="hargaDiskon" id="hargaDiskon" value="<?php echo $hargaDiskon; ?>"></td>
			<td align="right" colspan="2"><strong><?php echo "Rp. " . number_format($hargaDiskon, 3); ?></strong></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" align="right">Total after Discount:</td>
			<td align="right" colspan="2"><strong><?php echo "Rp. " . number_format($total_harga_setelah_diskon, 3); ?></strong></td>
			<td></td>
		</tr>
			<?php 
				}
			?>
	</table>		
	<?php
		} else {
	?>
	<div class="no-records">Your Cart is Empty</div>
	<?php 
	}
	?>
	</div>
	<div class="discount-grid">
			<div class="discount-action">
				<span id="error-msg-span" class="error-message">
					<?php
					if (! empty($message)) {
						echo $message;
					}
					?>
				</span> 
				<span></span>
				<input type="text" class="discount-code" name="voucher" size="15" placeholder="Enter Coupon Code" />
				<input id="btnDiscountAction" type="submit" value="Apply Discount" class="btnDiscountAction" />
			</div>
	</div>
	</form>

	<script>
	function validate() {
		var valid= true;
		if($("#discountCode").val() === "") {
			valid = false;
		}

		if(valid == false) {
			$('#error-msg-span').text("Discount Coupon Required");
		}
		return valid;
	}
	console.log("10122287_Naufal Fahrezi M.");
	console.log("10122310_Muhammad Fajar Satria Pamungkas");
	</script>
</BODY>
</HTML>