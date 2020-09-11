<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <div class="row">
                <?php foreach ($barang as $b) : ?>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/item/') . $b->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $b->nama_barang; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $b->kategori; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $b->stok; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <div class="btn btn-sm btn-success">Rp. <?= number_format($b->harga, 0, ',', '.') ?></div>
                                </td>
                            </tr>
                        </table>
                        <a href="<?= base_url('user/tambahkeranjang/') . $b->id_barang ?>" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
                        <a href="<?= base_url('user') ?>" class="btn btn-sm btn-danger">kembali</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>