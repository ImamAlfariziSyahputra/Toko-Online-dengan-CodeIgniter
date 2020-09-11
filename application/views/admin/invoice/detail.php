<div class="container-fluid">
    <h4>Detail Pemesanan <div class="btn btn-sm btn-success">ID Invoice : <?= $invoice->id; ?></div>
    </h4>

    <table class="table table-bordered table-hover table-stripped">
        <tr>
            <th>ID Barang</th>
            <th>Jumlah Produk</th>
            <th>Nama Produk</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
        </tr>
        <?php $total = 0; ?>
        <?php foreach ($pesan as $p) :
            $subtotal = $p->jumlah * $p->harga;
            $total += $subtotal;
        ?>
            <tr>
                <td><?= $p->id_barang; ?></td>
                <td><?= $p->nama_barang; ?></td>
                <td><?= $p->jumlah; ?></td>
                <td><?= number_format($p->harga, 0, ',', '.'); ?></td>
                <td><?= number_format($subtotal, 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" class="text-right">Grand Total</td>
            <td class="text-right">Rp.<?= number_format($total, 0, ',', '.'); ?></td>
        </tr>
    </table>

    <a href="<?= base_url('invoice'); ?>" class="btn btn-sm btn-primary">Kembali</a>
</div>