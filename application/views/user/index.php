<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('css/user.css'); ?>">
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
	<div class="head-nav">
		<h1>SOTA'<span>SouvenirTa'</span></h1>
		<div class="right-nav">
			<div class="search">
				<input type="text">
				<img src="<?php echo base_url('assets/img/search.svg'); ?>" alt="">
			</div>
			<a href="#">Sign in</a>
			<img src="<?php echo base_url('assets/img/cart.svg'); ?>" alt="">
		</div>
	</div>
	</div>
	<nav>
		<ul>
			<li><a href="">Clothing</a></li>
			<li><a href="">Accesories</a></li>
			<li><a href="">Food and Beverages</a></li>
			<li><a href="">Art and Collectibles</a></li>
			<li><a href="">Home and Living</a></li>
			<li><a href="">Others</a></li>
		</ul>
	</nav>
	<div class="slide">
		<img src="<?php echo base_url('assets/img/slider e 1.svg'); ?>" alt="">
	</div>
	<div class="populars">
		<h1>Popular Right Now</h1>
		<div class="row popular">
			<?php foreach ($produk as $prd) : ?>
				<div class="card popular">
					<img src="<?php echo base_url() . '/assets/gambarProduk/' . $prd->gambar ?> " alt="">
					<h5 class="card-title mb-1"><?php echo $prd->nama_produk ?></h5>
						<small><?php echo $prd->keterangan ?></small>
						<br>
						<span class="badge badge-pill badge-success mb-3"><?php echo $prd->harga ?></span><br>
						<a href="#" class="btn btn-primary">Detail</a>
				</div>
			<?php endforeach; ?>
		</div>


	</div>
	<div class=" about">
		<h1>What is <span>SOTA'?</span></h1>
		<div class="desc-about">
			<img src="<?php echo base_url('assets/img/logo.svg'); ?>" alt="">
			<p>Lorem ipsum dolor sit amet, consectetuqr adipiscing elit. Porttitor blandit ut scelerisque duis fusce
				vitae. Morbi orci mi blandit sed netus. Ut mauris purus, elementum mauris integer faucibus. Vulputate
				pharetra amet nibh nisl, cras consectetur.</p>
		</div>
	</div>
	<footer>
		<div class="copyright">
			<h4>SOTA'</h4>
			<p>All Rights Resereved by SOTA' Copyright 2020.</p>
		</div>
		<div class="right-foot">
			<ul>
				<li><a href="">Sell in SOTA'</a></li>
				<li><a href="">Terms and Condition</a></li>
				<li><a href="">Help Center</a></li>
			</ul>
		</div>
	</footer>
</body>

</html>