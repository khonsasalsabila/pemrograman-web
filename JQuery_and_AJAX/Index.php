<?php 
  include ('Conn.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>JQuery and AJAX</title>
    <link href="Tampilan/CSS/Bootstrap.css" rel="stylesheet">
    <link href="Tampilan/CSS/Index.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Web Profile</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link active" href="<?php echo "Index.php"; ?>">Tampilan CV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "Form.php"; ?>">Form Education</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h2 style="margin: 30px 0 30px 0;">Web Profile Khonsa Salsabila</h2>
    <iframe src="http://localhost/Pemrograman Web/Semester 5/JQuery and AJAX/Tampilan.php" height="500px" width="1060px"></iframe>

    <script src="Tampilan/Java Script/JQuery v3.5.1.js"></script>
    <script src="Tampilan/Java Script/Bootstrap.js"></script>

</body>
</html>