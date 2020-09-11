<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td class="text-right">Rp.<?= number_format($items['price'], 0, ',', '.'); ?></td>
                <td class="text-right">Rp.<?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td class="text-right">Rp.<?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>
    </table>

    <div class="text-right">
        <a href="<?= base_url('user/hapuskeranjang') ?>" class="btn btn-sm btn-danger">Hapus Keranjang</a>
        <a href="<?= base_url('user') ?>" class="btn btn-sm btn-primary">Lanjut Belanja</a>
        <a href="<?= base_url('user/pembayaran') ?>" class="btn btn-sm btn-success">Pembayaran</a>
    </div>
</div>