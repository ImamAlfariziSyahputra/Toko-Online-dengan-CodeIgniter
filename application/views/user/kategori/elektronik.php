<div class="container-fluid">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Item -->
    <div class="row text-center mt-4">
        <?php foreach ($elektronik as $e) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?= base_url('assets/img/item/') . $e->gambar ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $e->nama_barang; ?></h5>
                    <small><?= $e->keterangan; ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($e->harga, 0, ',', '.'); ?></span><br>
                    <a href="<?= base_url('user/tambahkeranjang/') . $e->id_barang ?>" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
                    <a href="<?= base_url('user/detailbarang/') . $e->id_barang ?>" class="btn btn-sm btn-success">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>