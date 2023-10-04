<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <?php
     $nama = "Dhini Fidya Anggraeni";
	 $alamat = "Kuningan, Jawa Barat";
	 $kampus = "Universitas Kuningan";
	 $umur = 20;

  ?>
  <body style="background-color: #DFCCFB; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 20px;">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1 style=" margin-right: 1100px; border-radius: 10px; color: #FFF3DA;">
					Profile! 
					<br><small>Dhini Fidya Anggraeni</small>
				</h1>
				<hr>
				<style>
					hr {
						border-color: rgb(118, 118, 118); 
						border-width: 3px;
						border-radius: 10px;
					}
				</style>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item" style="background-color: #BEADFA; border-radius: 10px;">
					<a class="nav-link active" href="index.php">Profile</a>
				</li>
				&nbsp;
				<li class="nav-item" style="background-color: #BEADFA; border-radius: 10px;">
					<a class="nav-link active" href="portofolio.php">Portofolio</a>
				</li>
				&nbsp;
				<li class="nav-item" style="background-color: #BEADFA; border-radius: 10px;">
					<a class="nav-link active" href="contact.php">Contact</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img alt="Bootstrap Image Preview" src="aku.jpg" class="rounded" style="margin-top: 20px; width: 60%; margin-left: 100px;">
		</div>
		<div class="col-md-6" style="background-color: #BEADFA; border-radius: 20px; margin-bottom: 150px;">
			<p style="margin-top: 20px; color: #FFF3DA;">
			   <strong><?= $nama ?></strong>. Saya berasal dari kota <?= $alamat ?> . Saya wanita berusia <?= $umur ?> tahun yang saat ini mengejar pendidikan di <?= $kampus ?>. Saya memiliki minat khusus dalam pengembangan web, yang berarti saya senang dalam merancang dan mengembangkan situs web yang menarik dan fungsional.
			   Sebagai seorang Cancer, saya cenderung memiliki sifat-sifat seperti kepedulian, kreativitas, dan sensitivitas. Saya merasa nyaman dalam lingkungan yang mendukung dan peduli terhadap orang lain, dan saya selalu berusaha memberikan kontribusi positif dalam hubungan sosial dan tim kerja saya. Kreativitas saya membantu saya menciptakan solusi yang unik dalam pengembangan web, dan sensitivitas saya terhadap detail membantu memastikan bahwa setiap proyek yang saya kerjakan berkualitas tinggi.
			   Saya selalu bersemangat untuk belajar dan berkembang dalam bidang pengembangan web, dan saya berharap untuk mencapai prestasi yang lebih tinggi di masa depan. Saya percaya bahwa dengan kerja keras, dedikasi, dan semangat belajar, saya akan terus tumbuh dan berkembang dalam karier saya sebagai seorang web developer.</small>
			</p>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>