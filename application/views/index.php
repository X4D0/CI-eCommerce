<div class="container">
	<h2>Lihat Produk</h2><hr>
	<div class="row">
		<?php foreach($data_produk as $dp): ?>
			<div class="col-sm-12 col-md-4">
				<div class="card bg-light" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title"><?= $dp['nama_produk']?></h5>
						<h6 class="card-subtitle mb-2 text-muted">Rp. <?= number_format($dp['harga']) ?></h6>
						<p class="card-text"><?= $dp['deskripsi']?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>