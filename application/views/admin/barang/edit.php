<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <form action="" <?= base_url('barang/ubah') ?> method="post">
        <input type="hidden" name="id" value="<?= $barang->id_barang ?>">
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang->nama_barang ?>">
            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $barang->keterangan ?>">
            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $barang->kategori ?>">
            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang->harga ?>">
            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang->stok ?>">
            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
        </div>
        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
</div>