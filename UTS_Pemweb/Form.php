<?php 
	include ('Conn.php'); 

  	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
  	{
      $sku = $_POST['sku'];
      $nama_barang = $_POST['nama_barang'];
      $kategori_barang = $_POST['kategori_barang'];
      $jumlah_stok = $_POST['jumlah_stok'];
      $harga_satuan = $_POST['harga_satuan'];

      
      $query = "INSERT INTO barang (sku, nama_barang, kategori_barang, jumlah_stok, harga_satuan) VALUES('$sku','$nama_barang','$kategori_barang','$jumlah_stok', '$harga_satuan')"; 

      $result = mysqli_query(connection(),$query);

      header("Location: http://localhost/UTS/");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data Barang</title>
	<style type="text/css">
    * 
    {
        font-family: "Trebuchet MS";
    }
    h2 
    {
        text-transform: uppercase;
        color: #8FBC8F;
    }
	</style>
</head>
<body>
	<h2>Form Data Barang</h2><br>
	
	<form action="Form.php" method="POST">
		SKU: <input type="text" placeholder="SKU Barang" name="sku"> <br><br>
		Nama Barang: <input type="text" placeholder="Nama Barang" name="nama_barang"> <br><br>
		Kategori Barang: 
			<select name="kategori_barang">
				<option> Pilihan </option>
				<option value="Makanan"> Makanan </option>
				<option value="Minuman"> Minuman </option>
				<option value="ATK"> Alat Tulis </option>

			</select>
		<br><br>
		Jumlah Stok: <input type="text" placeholder="Jumlah Stok Barang" name="jumlah_stok"> <br><br>
		Harga Satuan: <input type="text" placeholder="Harga Satuan Barang" name="harga_satuan"> <br><br>

		<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>