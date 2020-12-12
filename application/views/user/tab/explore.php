<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('css/user.css'); ?>">
	<title>Document</title>
</head>

<body>
	<div class="head-nav">
		<a href="<?php echo base_url('user/dashboard') ?>" class="brand">SOTA'<span>SouvenirTa'</span> </a>
		<div class="right-nav">
			<div class="search">
				<input type="text">
				<img src="<?php echo base_url('assets/img/search.svg'); ?>" alt="">
			</div>
			<a href="<?php echo base_url('admin/login') ?>">Sign in</a>
			<img src="<?php echo base_url('assets/img/cart.svg'); ?>" alt="">
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="#">Clothing</a></li>
			<li><a href="#">Accesories</a></li>
			<li><a href="<?php echo base_url('user/dashboard/explore') ?>">Food and Beverages</a></li>
			<li><a href="#">Art and Collectibles</a></li>
			<li><a href="#">Home and Living</a></li>
			<li><a href="#">Others</a></li>
		</ul>
	</nav>
	<div class="content">
		<p>All categories > Food and Beverages</p>
		<h1>Food and Beverages</h1>
		<div class="list-product">
			<div class="filter-tab">
				<div class="offer">
					<p>Special Offers</p>
					<div class="checkbox">
						<input type="checkbox">
						<p>On Sale</p>
					</div>
					<div class="checkbox">
						<input type="checkbox">
						<p>FREE Shipping</p>
					</div>
				</div>
				<div class="offer">
					<p>Price</p>
					<div class="checkbox">
						<input type="checkbox">
						<p>Any Range</p>
					</div>
					<div class="checkbox">
						<input type="checkbox">
						<p>Custom</p>
					</div>
					<div class="checkbox">
						<input type="text" class="input-range">
						<p class="to">to </p>
						<input type="text" class="input-range">
					</div>
				</div>
			</div>
			<div class="row-list">
				<?php foreach ($produk as $prd) : ?>
					<div class="card-list">
						<img class="product" src="<?php echo base_url() . '/assets/gambarProduk/' . $prd->gambar ?> " alt="">
						<h4><?php echo $prd->nama_produk ?></h4>
						<p><?php echo $prd->keterangan ?></p>
						<p class="harga"><?php echo $prd->harga ?></p>
						<button class="btn btn-primary"><a class="link-detail" href="<?php echo base_url('user/dashboard/detail_product/') . $prd->id_produk; ?>">Detail</a></button>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<footer class="explore-footer">
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