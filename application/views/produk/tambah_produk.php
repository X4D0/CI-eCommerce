<div class="container">
	<h2>Tambah Produk</h2><hr>
	<?= form_open('produk/tambah_produk') ?>
		<div class="form-group">
			<?= form_label('Nama Produk') ?>
			<?= form_input(['name'=>'nama_produk','class'=>'form-control','required'=>'required']) ?>
		</div>
		<div class="form-group">
			<?= form_label('Kategori')?><br>
			<div class="form-check-inline">
				<?= form_radio('kategori','Makanan','true',['class'=>'form-check-input']) ?>
				Makanan
			</div>
			<div class="form-check-inline">
				<?= form_radio('kategori','Minuman','',['class'=>'form-check-input']) ?>
				Minuman
			</div>
		<div class="form-group">
			<?= form_label('Deskripsi') ?>
			<?= form_input(['name'=>'deskripsi','class'=>'form-control','rows'=>'4','required'=>'required']) ?>
		</div>
		<div class="form-group">
			<?= form_label('Harga') ?>
			<?= form_input(['name'=>'harga','class'=>'form-control','type'=>'number','required'=>'required']) ?>
		</div>
		<div class="form-group">
			<a href="<?= site_url('produk') ?>" class="btn btn-success">Back</a>
			<?= form_reset(['value'=>'Reset','class'=>'btn btn-info']) ?>
			<?= form_submit('submit','Submit',['class'=>'btn btn-primary']) ?>
		</div>
	<?= form_close() ?>
</div>