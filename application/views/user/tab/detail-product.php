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
		<div class="detail">
			<?php foreach ($produk as $prd) : ?>
			<img class="product" src="<?php echo base_url() . '/assets/gambarProduk/' . $prd->gambar ?> " alt="">
			<div class="detail-desc">
				<p>seller name</p>
				<div class="stars">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				</div>
				
				<div class="detail-product">
					<h3><?php echo $prd->nama_produk ?></h3>
					<p class="price">Rp.<?php echo $prd->harga ?></p>
					<p class="desc-prod"><?php echo $prd->keterangan ?></p>
				</div>
				
				<div class="form-buy">
					<label for="">Quantity</label>
					<input type="text">
					<button class="btn btn-primary">Add to Cart</button>
				</div>
			</div>
		</div>
		<div class="another-prod">

			<img src="<?php echo base_url('assets/img/koptor2 1.svg'); ?>" alt="">
			<img src="<?php echo base_url('assets/img/koptor2 1.svg'); ?>" alt="">
			<img src="<?php echo base_url('assets/img/koptor2 1.svg'); ?>" alt="">
		</div><?php endforeach; ?>
		<div class="reviewer">
			<h1>Product Reviews</h1>
			<div class="stars">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
			</div>
			<div class="buyers-review">
				<h4>Buyers name</h4>
				<div class="stars">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
					<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel enim risus hendrerit ipsum. Velit
					volutpat
					scelerisque mauris tellus ac. Hac duis tristique egestas leo, maecenas curabitur eget diam.</p>
			</div>
		</div>
		<div class="buyers-review">
			<h4>Buyers name</h4>
			<div class="stars">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
				<img src="<?php echo base_url('assets/img/star_rate-24px 1.svg'); ?>" alt="">
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel enim risus hendrerit ipsum. Velit volutpat
				scelerisque mauris tellus ac. Hac duis tristique egestas leo, maecenas curabitur eget diam.</p>
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