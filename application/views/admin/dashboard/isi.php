<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<!-- row -->

	<div class="container-fluid">
		<div class="row text-center">


			<?php foreach ($produk as $prd) : ?>

				<div class="card ml-3 mb-3" style="width: 16rem;">
					<img class="card-img-top" src="<?php echo base_url() . '/assets/gambarProduk/' . $prd->gambar ?> " alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title mb-1"><?php echo $prd->nama_produk ?></h5>
						<small><?php echo $prd->keterangan ?></small>
						<br>
						<span class="badge badge-pill badge-success mb-3"><?php echo $prd->harga ?></span><br>
						<a href="#" class="btn btn-primary">Detail</a>
					</div>
				</div>

			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- #/ container -->
<!--**********************************
            Content body end
        ***********************************-->