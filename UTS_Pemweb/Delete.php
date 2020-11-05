<?php 
	include ('Conn.php');

  	if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  	{
        $sku = $_GET['id'];
        $query_get = "DELETE FROM barang WHERE sku = '$sku'"; 

        $result_get = mysqli_query(connection(),$query_get);

        header("Location: http://localhost/UTS/");
     }  
?>