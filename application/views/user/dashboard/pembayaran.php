<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success align-middle">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total += $item['subtotal'];
                    }

                    echo "<h4>Total Belanja Anda : Rp." . number_format($grand_total, 0, ',', '.');                
                ?>
            </div>
            <h3 class="text-center">Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url('user/prosespesan') ?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="kurir" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">J&T</option>
                        <option value="">Go Send</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih BANK</label>
                    <select name="bank" id="" class="form-control">
                        <option value="">BCA - XXXXX</option>
                        <option value="">BRI - XXXXX</option>
                        <option value="">Mandiri - XXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>

            <?php 
            } else {
                echo "<h4>Keranjang Anda Masih Kosong!";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>