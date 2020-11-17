<div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                            	<?php
                                    $info = $this->session->flashdata('info');
                                        echo $info;
                                ?>
                                <button type="button" data-toggle="modal" data-target="#Modal_Tambah" class="btn mb-4 btn-success"> Tambah Produk <span class="btn-icon-right"><i class="fa fa-plus-square"></i></span></button>  
                                

                                <table class="table table-bordered">
                                	<tr>
                                		<th>No</th>
                                		<th>Nama Barang</th>
                                		<th>Keterangan</th>
			                       		<th>Kategori</th>
                                		<th>Harga</th>
                                		<th>Stok</th>
                                		<th>Aksi</th>
                                	</tr>

                                	<?php $i=1; foreach ($produk as $prd): ?>

                                	<tr>
                                		<td><?php echo $i++ ?></td>
                                		<td><?php echo $prd->nama_produk ?></td>
                                		<td><?php echo $prd->keterangan ?></td>
                                		<td><?php echo $prd->kategori ?></td>
                                		<td>Rp. <?php echo $prd->harga ?></td>
                                		<td><?php echo $prd->stok ?></td>
                                		<td>
                                			<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>
	                                		 <button type="button" class="btn mb-1 btn-primary" data-toggle="modal" data-target="#modal_update<?= $prd->id_produk ?>" ><i class="fa fa-edit"></i>
                                                    </button>
	                                		<button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target="#modal_hapus<?= $prd->id_produk ?>" ><i class="fa fa-trash"></i>
                                                    </button>
                                		</td>
                                	</tr>


                                	<?php endforeach; ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




         <!-- Modal Tambah-->

        <div class="modal fade" id="Modal_Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo site_url('admin/dashboard/tambah_produk') ?> " method="POST" enctype="multipart/form-data">

                                                    	<div class="form-group">
                                                    		<label>Nama Produk</label>
                                                    		<input type="text" name="nama_produk" class="form-control">
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Keterangan</label>
                                                    		<input type="text" name="keterangan" class="form-control">
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Kategori</label>
                                                    		<input type="text" name="kategori" class="form-control">
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Harga</label>
                                                    		<input type="text" name="harga" class="form-control">
                                                    	</div>
                                                        
                                                        <div class="form-group">
                                                    		<label>Jumlah Stok</label>
                                                    		<input type="text" name="stok" class="form-control">
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Picture</label>
                                                    		<input type="file" name="gambar" class="form-control">
                                                    	</div>
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                	<button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
        <!-- End Modal Tambah-->




<!-- Begin Modal Update -->

	<?php
	 foreach ($produk as $prd):
	 	$id = $prd->id_produk; 

	 ?>
	        <div class="modal fade" id="modal_update<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo site_url('admin/dashboard/edit_produk/'.$id) ?> " method="POST" enctype="multipart/form-data">


                                                    	<div class="form-group">
                                                    		<label>Nama Produk</label>
                                                    		<input type="text" name="nama_produk" class="form-control" id="message-text" value="<?= $prd->nama_produk ?>" required>
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Keterangan</label>
                                                    		<input type="text" name="keterangan" class="form-control" id="recipient-name" value="<?= $prd->keterangan ?>" required>
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Kategori</label>
                                                    		<input type="text" name="kategori" class="form-control" id="recipient-name" value="<?= $prd->kategori ?>" required>
                                                    	</div>

                                                    	<div class="form-group">
                                                    		<label>Harga</label>
                                                    		<input type="text" name="harga" class="form-control" id="recipient-name" value="<?= $prd->harga ?>" required>
                                                    	</div>
                                                        
                                                        <div class="form-group">
                                                    		<label>Jumlah Stok</label>
                                                    		<input type="text" name="stok" class="form-control" id="recipient-name" value="<?= $prd->stok ?>" required>
                                                    	</div>
                                                    	<input type="hidden" readonly value="<?= $prd->id_produk ?>" name="id_produk" class="form-control" >
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                	<button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>


	<?php endforeach; ?>


        <!-- modal  -->

<!-- Modal Hapus  -->


<?php
   foreach($produk as $prd){
    $id = $prd->id_produk;
?>

<div class="modal fade" id="modal_hapus<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/dashboard/delete_produk/'.$id) ?>">
                  
                    <!-- <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div> -->
                
                <h5>
                    Apakah Anda Yakin Menghapus Data Ini ?
                </h5>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>

        </form>

        </div>
    </div>                                     
</div>

<?php } ?>

<!-- END Modal Hapus -->

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>