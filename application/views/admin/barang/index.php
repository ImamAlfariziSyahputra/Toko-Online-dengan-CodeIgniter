<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#modalTambah">
        <i class="fas fa-plus fa-sm"></i>
        Tambah Barang
    </button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($barang as $b) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $b->nama_barang; ?></td>
                <td><?= $b->keterangan; ?></td>
                <td><?= $b->kategori; ?></td>
                <td><?= $b->harga; ?></td>
                <td><?= $b->stok; ?></td>
                <td>
                    <div class="btn btn-info btn-sm">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </td>
                <td>
                    <a class="btn btn-success btn-sm" href="<?= base_url('barang/ubah/') . $b->id_barang ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="<?= base_url('barang/hapus/') . $b->id_barang ?>" onclick="return confirm('yakin?')">
                        <i class=" fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('barang/tambah') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                        <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                        <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Fashion Anak">Fashion Anak</option>
                            <option value="Fashion Pria">Fashion Pria</option>
                            <option value="Fashion Wanita">Fashion Wanita</option>
                            <option value="Fashion Anak">Fashion Anak</option>
                            <option value="Sports">Sports</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control">
                        <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control">
                        <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control-file">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>