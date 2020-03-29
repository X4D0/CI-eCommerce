<div class="container text-right">
	<a href="<?= site_url('produk/form_tambah') ?>" class="btn btn-primary">Tambah Produk</a>
</div>
<br>
<?php 
	$template = array(
		'table_open' => '<table id="tbProduk" class="table table-striped table-bordered">',
		'thead_open' => '<thead class="text-center">',
	);
	$this->table->set_template($template);
	$this->table->set_heading('ID','Nama','Kategori','Deskripsi','Harga','Aksi');

	foreach($data_produk as $dp){
		$url = 'ecommerce/index.php/produk/hapus_produk/' . $dp['id_produk'];
		$this->table->add_row(
			$dp['id_produk'],
			$dp['nama_produk'],
			$dp['kategori'],
			$dp['deskripsi'],
			'Rp. '. number_format($dp['harga']),
			'<a href="' . site_url('produk/form_ubah/'.$dp['id_produk'])
			.'" class="btn btn-warning btn-sm">'
			.'<i class="fa fa-edit"></i>'
			.'</a> &#160;'
			."<button href=\"#\" onclick=\"del('".$url."')\" class=\"btn btn-danger btn-sm\">"
			.'<i class="fa fa-trash"></li>'
			.'</button>'
		);
	}
	echo $this->table->generate();
	$this->table->clear();
?>