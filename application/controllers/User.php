<?php 

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['barang'] = $this->model_barang->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard');
        $this->load->view('templates/footer');
    }
    
    public function tambahKeranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = [
            'id' => $barang->id_barang,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_barang
        ];

        $this->cart->insert($data);
        redirect('user');
    }

    public function detailKeranjang() 
    {
        $data['title'] = 'Detail Keranjang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapusKeranjang() 
    {
        $this->cart->destroy();
        redirect('user');
    }

    public function pembayaran() 
    {
        $data['title'] = 'Pembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/pembayaran');
        $this->load->view('templates/footer');
    }

    public function prosespesan()
    {
        $data['title'] = 'Proses Pesan';

        $is_processed = $this->model_invoice->tambahInvoice();
        if($is_processed){
            $this->cart->destroy();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('user/proses_pesan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal Diproses";
        }
    }
}