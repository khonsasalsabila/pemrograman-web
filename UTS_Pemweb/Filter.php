<?php
    include('conn.php');

    $min = $_POST["min_harga"];
    $max = $_POST["max_harga"];
    $query = "SELECT * FROM barang WHERE harga_satuan BETWEEN $min AND $max";
    $filter = mysqli_query(connection(), $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Filter Range Harga</title>
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
        <center><h2>FILTER RANGE HARGA</h2></center>
        
        <table>
            <thead >
                <tr>
                    <td><b>SKU</b></td>
                    <td><b>Nama Barang</b></td>
                    <td><b>Kategori Barang</b></td>
                    <td><b>Jumlah Stok</b></td>
                    <td><b>Harga Satuan</b></td>
                </tr>
            </thead>

            <?php while ($data = mysqli_fetch_array($filter)) : ?>
                <tr>
                    <td><?php echo $data['sku']  ?></td>
                    <td><?php echo $data['nama_barang']  ?></td>
                    <td><?php echo $data['kategori_barang']  ?></td>
                    <td><?php echo $data['jumlah_stok']  ?></td>
                    <td><?php echo $data['harga_satuan']  ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <center><button onclick="window.location.href='http://localhost/UTS/'">Back</button></center>
    
</body>
</html>