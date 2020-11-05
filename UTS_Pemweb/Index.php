<?php 
  include ('Conn.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Barang Barokah Minimarket</title>
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
	<center><h2>Data Barang Barokah Minimarket</h2> <br></center>

    <center>
        <button><a href="http://localhost/UTS/Form.php">Input Barang</a></button>
        &nbsp;&nbsp;
        <button><a href="http://localhost/UTS/Searching.php">Search Barang</a></button>
    </center>
    <br><br>

    <center>
    <form action="Filter.php" method="post">
        <table border="0px" cellpadding="5px" cellspacing="0px">
        <tr>
            <td>
                <label for="min_harga">Min : </label>
                    <input type="text" name="min_harga" id="min_harga">
                </td>
            <td>
                <label for="max_harga">Max : </label>
                <input type="text" name="max_harga" id="max_harga">
            </td>
            <td>
                <button type="submit" name="submitfilter">Filter</button>
            </td>
        </tr>        
        </table>
    </form>
    </center>
    <br>

	<table>
        <thead >
            <tr>
                <td><b>SKU</b></td>
                <td><b>Nama Barang</b></td>
                <td><b>Kategori Barang</b></td>
                <td><b>Jumlah Stok</b></td>
                <td><b>Harga Satuan</b></td>
                <td><b>Update</b></td>
                <td><b>Delete</b></td>
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
                <td>
                    <a href="http://localhost/UTS/Update.php?id=<?php echo $data['sku']?>"> Update</a>
                </td>
                <td>
                    <a href="http://localhost/UTS/Delete.php?id=<?php echo $data['sku']?>"> Delete</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    <br><br>

</body>
</html>