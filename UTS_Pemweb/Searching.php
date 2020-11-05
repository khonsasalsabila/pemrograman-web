<?php 
  include ('Conn.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pencarian Data Barang</title>
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
    table 
    {
        border: 2px solid #000000;
        border-collapse: collapse;
        border-spacing: 0;
        width: 70%;
        margin: 10px auto 10px auto;
        background-color: #8FBC8F;
    }
    thead, tbody, tr, td 
    {
            border: 2px solid #000000;
            padding: 20px;
            text-align: center;
    }
    </style>
  </head>

  <body>
          <center><h2>Pencarian Data Barang</h2></center>
          <table>
              <thead>
                <tr>
                  <td>SKU</td>
                  <td>Nama Barang</td>
                  <td>Kategori Barang</td>
                  <td>Jumlah Stok</td>
                  <td>Harga Satuan</td>                
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM barang";
                  $result = mysqli_query(connection(),$query);
                ?>
                
                <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['sku']  ?></td>
                    <td><?php echo $data['nama_barang']  ?></td>
                    <td><?php echo $data['kategori_barang']  ?></td>
                    <td><?php echo $data['jumlah_stok']  ?></td>
                    <td><?php echo $data['harga_satuan']  ?></td>
                  </tr>
                <?php endwhile ?>

                <center>
                <form action="" method="POST">
                    <label >Search: </label>
                    <input type="text" name="sku" placeholder="Search SKU"> &nbsp;&nbsp;
                    <input type="submit" name="search" value="Search">
                </form>
                </center> <br>
                
                <?php
                if(isset($_POST['search']))
                {
                    $sku = $_POST['sku'];
                    $query = "SELECT * FROM barang WHERE sku='$sku'";
                    $result = mysqli_query(connection(),$query);

                    while($data=mysqli_fetch_array($result))
                    {
                ?>
                <center>
                <form action="" method="POST">
                    <input type="text" name="sku" value="<?php echo $data['sku']?>"/>
                    <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>"/>
                    <input type="text" name="kategori_barang" value="<?php echo $data['kategori_barang']?>"/>
                    <input type="text" name="jumlah_stok" value="<?php echo $data['jumlah_stok']?>"/>
                    <input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']?>"/>
                </form>
                </center>
                <?php
                  }
                  }
                ?>
              </tbody>
            </table>
            <center><button onclick="window.location.href='http://localhost/UTS/'">Back</button></center>
</body>
</html>