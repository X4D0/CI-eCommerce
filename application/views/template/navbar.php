<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active <?php if($page=='home') echo 'active'; ?>" href="<?= site_url('home') ?>">Home</a>
      <a class="nav-item nav-link active <?php if($page=='produk') echo 'active'; ?>" href="<?= site_url('produk') ?>">Produk</a>
    </div>
  </div>
</nav>