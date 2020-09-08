<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($invoice as $inv) :?>
        <tr>
            <td><?= $inv->id; ?></td>
            <td><?= $inv->nama; ?></td>
            <td><?= $inv->alamat; ?></td>
            <td><?= $inv->tgl_pesan; ?></td>
            <td><?= $inv->batas_bayar; ?></td>
            <td><a href="" class="btn btn-sm btn-info">Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>