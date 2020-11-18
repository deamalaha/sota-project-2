<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('css/user.css'); ?>">
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
			<li><a href="<?php echo base_url('user/dashboard/explore') ?>">Food and Beverages</a></li>
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
		<div class="row-popular">
			<?php foreach ($produk as $prd) : ?>
				<div class="card-popular">
					<img src="<?php echo base_url() . '/assets/gambarProduk/' . $prd->gambar ?> " alt="">
					<h4><?php echo $prd->nama_produk ?></h4>
					<p><?php echo $prd->keterangan ?></p>
					<p class="harga">Rp. <?php echo $prd->harga ?></p>
					<button class="btn btn-primary"><a class="link-detail" href="<?php echo base_url('user/dashboard/detail_product'); ?>">Detail</a></button>
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