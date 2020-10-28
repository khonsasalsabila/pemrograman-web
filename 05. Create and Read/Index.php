<?php 
 	include ('Conn.php'); 

  	$text1 = "Hi there!! </br></br> My name is Khonsa Salsabila. I was born in Madiun on 20 November 1999. Now I'm 20years old.";
	$text2 = "Hello!! </br></br> I like reading books, because reading books will add more insight. And I also like something new that can add skills, such as coding and design.";
	$academic = "ACADEMIC RESUME";
	$hobby = "HOBBY";
	$abilities = "ABILITIES";
	$contacts = "CONTACTS";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<body background="Background.png">
	<div class="biodata">
		<img src="Profile.jpg" alt="Photo of Khonsa" id="profile" />
		<div id="rectangle-1">
			<div class="text-1">
				<?php echo "$text1";?>
			</div>
		</div>
		<div id="rectangle-2">
			<div class="text-2">
				<p><?php echo "$text2";?></p>
			</div>
		</div>
	</div>

	<div class="sosmed">
		<img src="Instagram.png" alt="Photo of Instagram" id="instagram" />
        <img src="Twitter.png" alt="Photo of Twitter" id="twitter" />
        <img src="Line.png" alt="Photo of Line" id="line" />

        <?php 
            $query = "SELECT * FROM sosmed";
            $result = mysqli_query(connection(),$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>
        <div class="text-instagram">
        	<p><?php echo $data['instagram'];  ?></p>
        </div>
        <div class="text-twitter">
        	<p><?php echo $data['twitter'];  ?></p>
        </div>
        <div class="text-line">
        	<p><?php echo $data['line'];  ?></p>
        </div>
        <?php endwhile ?>
	</div>

	<div class="aboutme">
		<div class="academic">
			<p><?php echo "$academic";?></p>
		</div>

		<div id="line-1"></div>
		<div id="line-2"></div>
		<div id="line-3"></div>
		<div id="line-4"></div>
		<div id="line-5"></div>
		<div id="line-6"></div>
		<div id="line-7"></div>

		<?php 
            $query = "SELECT * FROM education";
            $result = mysqli_query(connection(),$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>	
		<div class="text-sd">
			<?php echo $data['nama_sd'];  ?></br>
			<?php echo $data['tahun_sd'];  ?>
		</div>
		<div class="text-smp">
			<?php echo $data['nama_smp'];  ?></br>
			<?php echo $data['tahun_smp'];  ?>
		</div>
		<div class="text-sma">
			<?php echo $data['nama_sma'];  ?></br>
			<?php echo $data['tahun_sma'];  ?>
		</div>
		<div class="text-universitas">
			<?php echo $data['nama_univ'];  ?></br>
			<?php echo $data['tahun_univ'];  ?>
		</div>
		<?php endwhile ?>

		<div class="hobby">
			<p><?php echo "$hobby";?></p>
		</div>

		<div id="line-8"></div>
		<div id="line-9"></div>

		<img src="Book.png" alt="Photo of Book" id="book" />
        <img src="Film.png" alt="Photo of Movie" id="movie" />
        <img src="Music.png" alt="Photo of Music" id="music" />

        <?php 
            $query = "SELECT * FROM hobby";
            $result = mysqli_query(connection(),$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>
        <div class="text-book">
            <p><?php echo $data['book'];  ?></p>
        </div>
        <div class="text-movie">
            <p><?php echo $data['movie'];  ?></p>
        </div>
        <div class="text-music">
            <p><?php echo $data['music'];  ?><p>
        </div>
        <?php endwhile ?>

        <div class="abilities">
			<p><?php echo "$abilities";?></p>
		</div>

		<div id="line-10"></div>
		<div id="line-11"></div>

		<img src="Leadership.png" alt="Photo of Leadership" id="leadership" />
        <img src="Public Speaking.png" alt="Photo of Public Speaking" id="publicspeaking" />
        <img src="Teamwork.png" alt="Photo of Teamwork" id="teamwork" />

        <?php 
            $query = "SELECT * FROM abilities";
            $result = mysqli_query(connection(),$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>
        <div class="text-leadership">
            <p><?php echo $data['leadership'];  ?></p>
        </div>
        <div class="text-publicspeaking">
            <p><?php echo $data['publicspeaking'];  ?></p>
        </div>
        <div class="text-teamwork">
            <p><?php echo $data['teamwork'];  ?></p>
        </div>
        <?php endwhile ?>

        <div class="contacts">
			<p>CONTACTS</p>
		</div>

		<div id="line-12"></div>
		<div id="line-13"></div>

		<img src="Telepon.png" alt="Photo of Phone" id="phone" />
		<img src="Email.png" alt="Photo of Email" id="email" />
		<img src="Alamat.png" alt="Photo of Alamat" id="alamat" />

		<?php 
            $query = "SELECT * FROM contacts";
            $result = mysqli_query(connection(),$query);
        ?>

        <?php while($data = mysqli_fetch_array($result)): ?>
        <div class="text-phone">
            <p><?php echo $data['phone'];  ?></p>
        </div>
        <div class="text-email">
            <p><?php echo $data['gmail'];  ?></p>
        </div>
        <div class="text-alamat">
            <p><?php echo $data['alamat'];  ?></p>
        </div>
        <?php endwhile ?>
	</div>

</body>
</html>