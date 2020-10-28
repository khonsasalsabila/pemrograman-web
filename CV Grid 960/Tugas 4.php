<?php
	$text1 = "Hi there!! </br></br> My name is Khonsa Salsabila. I was born in Madiun on 20 November 1999. Now I'm 20years old.";
	$text2 = "Hello!! </br></br> I like reading books, because reading books will add more insight. And I also like something new that can add skills, such as coding and design.";
	$instagram = "salsabila.khns";
	$twitter = "@salsabilakhns99";
	$line = "@khonsa99";
	$academic = "ACADEMIC RESUME";
	$sd = "SDN 02 PANDEAN </br> (2006 - 2012)";
	$smp = "SMPN 07 MADIUN </br> (2012-2015)";
	$sma = "SMAN 06 MADIUN </br> (2015-2018)";
	$universitas = "UPN 'Veteran' Jatim </br> (2018-Now)";
	$hobby = "HOBBY";
	$book = "Reading Book";
	$movie = "Watching Movie";
	$music = "Listening Music";
	$abilities = "ABILITIES";
	$leadership = "Leadership";
	$publicspeaking = "Public Speaking";
	$teamwork = "Teamwork";
	$contacts = "CONTACTS";
	$phone = "082331574790";
	$email = "salsabilakhonsa043";
	$alamat = "Tuntang street, number 34, Madiun";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
	<link rel="stylesheet" type="text/css" href="Tugas 3.css">
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

        <div class="text-instagram">
        	<p><?php echo "$instagram";?></p>
        </div>
        <div class="text-twitter">
        	<p><?php echo "$twitter";?></p>
        </div>
        <div class="text-line">
        	<p><?php echo "$line";?></p>
        </div>
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

		<div class="text-sd">
			<p><?php echo "$sd";?></p>
		</div>
		<div class="text-smp">
			</p><?php echo "$smp";?></p>
		</div>
		<div class="text-sma">
			<p><?php echo "$sma";?></p>
		</div>
		<div class="text-universitas">
			<p><?php echo "$universitas";?></p>
		</div>

		<div class="hobby">
			<p><?php echo "$hobby";?></p>
		</div>

		<div id="line-8"></div>
		<div id="line-9"></div>

		<img src="Book.png" alt="Photo of Book" id="book" />
        <img src="Film.png" alt="Photo of Movie" id="movie" />
        <img src="Music.png" alt="Photo of Music" id="music" />

        <div class="text-book">
            <?php echo "$book";?>
        </div>
        <div class="text-movie">
            <?php echo "$movie";?>
        </div>
        <div class="text-music">
            <?php echo "$music";?>
        </div>

        <div class="abilities">
			<p><?php echo "$abilities";?></p>
		</div>

		<div id="line-10"></div>
		<div id="line-11"></div>

		<img src="Leadership.png" alt="Photo of Leadership" id="leadership" />
        <img src="Public Speaking.png" alt="Photo of Public Speaking" id="publicspeaking" />
        <img src="Teamwork.png" alt="Photo of Teamwork" id="teamwork" />

        <div class="text-leadership">
            <?php echo "$leadership";?>
        </div>
        <div class="text-publicspeaking">
            <?php echo "$publicspeaking";?>
        </div>
        <div class="text-teamwork">
            <?php echo "$teamwork";?>
        </div>

        <div class="contacts">
			<p>CONTACTS</p>
		</div>

		<div id="line-12"></div>
		<div id="line-13"></div>

		<img src="Telepon.png" alt="Photo of Phone" id="phone" />
		<img src="Email.png" alt="Photo of Email" id="email" />
		<img src="Alamat.png" alt="Photo of Alamat" id="alamat" />

        <div class="text-phone">
            <p>082331574790</p>
        </div>
        <div class="text-email">
            <p>salsabilakhonsa043 @gmail.com</p>
        </div>
        <div class="text-alamat">
            <p>Tuntang street, number 34, Madiun</p>
        </div>
	</div>

</body>
</html>