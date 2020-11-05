<?php
  include ('Conn.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
      $sku = $_POST['sku'];
      $nama_barang = $_POST['nama_barang'];
      $kategori_barang = $_POST['kategori_barang'];
      $jumlah_stok = $_POST['jumlah_stok'];
      $harga_satuan = $_POST['harga_satuan'];
      
      $query = "UPDATE barang SET sku='$sku', nama_barang='$nama_barang', kategori_barang='$kategori_barang', jumlah_stok='$jumlah_stok', harga_satuan='$harga_satuan' WHERE sku='$sku'";

      $result = mysqli_query(connection(),$query);

      header("Location: http://localhost/UTS/");
  }

  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {
      $sku = $_GET['id'];
      $query_get = "SELECT * FROM barang WHERE sku = '$sku'";
      $result_get = mysqli_query(connection(),$query_get);
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Data Barang</title>
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
  <h2>Update Data Barang</h2><br>
  
  <form action="Update.php" method="POST">
    <?php while ($data = mysqli_fetch_array($result_get)) : ?>
      SKU: <input type="text" placeholder="SKU Barang" name="sku" value="<?php echo $data['sku']; ?>"> <br><br>
      Nama Barang: <input type="text" placeholder="Nama Barang" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"> <br><br>
      Kategori Barang: 
        <select name="kategori_barang">
          <option value="">Pilihan</option>
          <option value="Makanan" <?php echo $data['kategori_barang']=='Makanan' ? 'selected="selected"' : ''?>>Makanan</option>
          <option value="Minuman" <?php echo $data['kategori_barang']=='Minuman' ? 'selected="selected"' : ''?>>Minuman</option>
          <option value="ATK" <?php echo $data['kategori_barang']=='ATK' ? 'selected="selected"' : ''?>>Alat Tulis</option>
        </select>
      <br><br>
      Jumlah Stok: <input type="text" placeholder="Jumlah Stok Barang" name="jumlah_stok" value="<?php echo $data['jumlah_stok']; ?>"> <br><br>
      Harga Satuan: <input type="text" placeholder="Harga Satuan Barang" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>"> <br><br>
      <input type="submit" name="submit" value="Update">
    <?php endwhile; ?>
  </form>

</body>
</html>