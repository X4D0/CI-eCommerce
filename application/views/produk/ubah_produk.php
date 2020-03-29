<div class="container">
	<h2>Ubah produk</h2><hr>
	<?= form_open('produk/ubah_produk/'.$produk['id_produk']) ?>
		<div class="form-group">
			<?= form_label('Nama Produk') ?>
			<?= form_input(['name'=>'nama_produk','class'=>'form-control','required'=>'required','value'=>$produk['nama_produk']]) ?>
		</div>
		<div class="form-group">
			<?= form_label('Kategori')?><br>
			<div class="form-check-inline">
				<?php if($produk['kategori']=='Makanan'): ?>
					<?= form_radio('kategori','Makanan','true',['class'=>'form-check-input']) ?>
				<?php else: ?>
					<?= form_radio('kategori','Makanan','',['class'=>'form-check-input']) ?>
				<?php endif; ?>
				Makanan
			</div>
			<div class="form-check-inline">
				<?php if($produk['kategori']=='Minuman'): ?>
					<?= form_radio('kategori','Minuman','true',['class'=>'form-check-input']) ?>
				<?php else: ?>
					<?= form_radio('kategori','Minuman','',['class'=>'form-check-input']) ?>
				<?php endif; ?>
				Minuman
			</div>
		<div class="form-group">
			<?= form_label('Deskripsi') ?>
			<?= form_input(['name'=>'deskripsi','class'=>'form-control','rows'=>'4','required'=>'required', 'value'=>$produk['deskripsi']]) ?>
		</div>
		<div class="form-group">
			<?= form_label('Harga') ?>
			<?= form_input(['name'=>'harga','class'=>'form-control','type'=>'number','required'=>'required','value'=>$produk['harga']]) ?>
		</div>
		<div class="form-group">
			<a href="<?= site_url('produk') ?>" class="btn btn-success">Back</a>
			<?= form_submit('submit','Update',['class'=>'btn btn-warning']) ?>
		</div>
	<?= form_close() ?>
</div>