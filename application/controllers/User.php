<?php 

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }

    // public function index()
    // {
    //     $data['title'] = 'Dashboard';
    //     $data['barang'] = $this->model_barang->getAllBarang();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('user/dashboard/index');
    //     $this->load->view('templates/footer');
    // }

    public function detailBarang($id)
    {
        $data['title'] = 'Detail Barang';
        $data['barang'] = $this->model_barang->getDetailBarang($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard/detail_barang');
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
        redirect('welcome');
    }

    public function detailKeranjang() 
    {
        $data['title'] = 'Detail Keranjang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapusKeranjang() 
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran() 
    {
        $data['title'] = 'Pembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/dashboard/pembayaran');
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
            $this->load->view('user/dashboard/proses_pesan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal Diproses";
        }
    }
}