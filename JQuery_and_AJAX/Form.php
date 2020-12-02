<?php 
  include ('Conn.php'); 

  $status = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
      $nama_sd = $_POST['nama_sd'];
      $tahun_sd = $_POST['tahun_sd'];
      $nama_smp = $_POST['nama_smp'];
      $tahun_smp = $_POST['tahun_smp'];
      $nama_sma = $_POST['nama_sma'];
      $tahun_sma = $_POST['tahun_sma'];
      $nama_univ = $_POST['nama_univ'];
      $tahun_univ = $_POST['tahun_univ'];
      
      $query = "INSERT INTO education (nama_sd, tahun_sd, nama_smp, tahun_smp, nama_sma, tahun_sma, nama_univ, tahun_univ) VALUES('$nama_sd','$tahun_sd','$nama_smp','$tahun_smp', '$nama_sma', '$tahun_sma', '$nama_univ', '$tahun_univ')"; 

      $result = mysqli_query(connection(),$query);
      if ($result) 
      {
        $status = 'ok';
      }
      else
      {
        $status = 'err';
      }
  }
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
          
          <?php 
              if ($status=='ok') 
              {
                echo '<br><br><div class="alert alert-success" role="alert">Data berhasil disimpan</div>';
              }
              elseif($status=='err')
              {
                echo '<br><br><div class="alert alert-danger" role="alert">Data gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Academic Resume</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <label>Nama Sekolah Dasar</label>
              <input type="text" class="form-control" placeholder="Nama SD" name="nama_sd" id="nama_sd" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat Tahun SD</label>
              <input type="text" class="form-control" placeholder="Riwayat Tahun SD" name="tahun_sd" id="tahun_sd" required="required">
            </div>
            <div class="form-group">
              <label>Nama Sekolah Menengah Pertama</label>
              <input type="text" class="form-control" placeholder="Nama SMP" name="nama_smp" id="nama_smp" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat Tahun SMP</label>
              <input type="text" class="form-control" placeholder="Riwayat Tahun SMP" name="tahun_smp" id="tahun_smp" required="required">
            </div>
            <div class="form-group">
              <label>Nama Sekolah Menengah Atas</label>
              <input type="text" class="form-control" placeholder="Nama SMA" name="nama_sma" id="nama_sma" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat Tahun SMA</label>
              <input type="text" class="form-control" placeholder="Riwayat Tahun SMA" name="tahun_sma" id="tahun_sma" required="required">
            </div>
            <div class="form-group">
              <label>Nama Perguruan Tinggi</label>
              <input type="text" class="form-control" placeholder="Nama Perguruan Tinggi" name="nama_univ" id="nama_univ" required="required">
            </div>
            <div class="form-group">
              <label>Riwayat Tahun Perguruan Tinggi</label>
              <input type="text" class="form-control" placeholder="Riwayat Tahun Perguruan Tinggi" name="tahun_univ" id="tahun_univ" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary" oneclick="simpandata()">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script>
      function simpandata()
      {
        var nama_sd = $('#nama_sd').val()
        var tahun_sd = $('#tahun_sd').val()
        var nama_smp = $('#nama_smp').val()
        var tahun_smp = $('#tahun_smp').val()
        var nama_sma = $('#nama_sma').val()
        var tahun_sma = $('#tahun_sma').val()
        var nama_univ = $('#nama_univ').val()
        var tahun_univ = $('#tahun_univ').val() 
        $.ajax({
          url: 'Tampilan.php',
          type: 'POST',
          data:{'nama_sd': nama_sd, 'tahun_sd': tahun_sd, 'nama_smp': nama_smp, 'tahun_smp': tahun_smp, 'nama_sma': nama_sma, 'tahun_sma': tahun_sma, 'nama_univ': nama_univ, 'tahun_univ': tahun_univ},
          datatype: 'JSON',
          success : function(query)
          {
            alert(query)
          }
        })
      }
    </script> -->
</body>
</html>