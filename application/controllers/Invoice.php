<?php 

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['invoice'] = $this->model_invoice->getAllInvoice();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/invoice/index');
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['title'] = 'Detail Pemesanan';
        $data['invoice'] = $this->model_invoice->getInvoiceById($id_invoice);
        $data['pesan'] = $this->model_invoice->getPesanById($id_invoice);

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/invoice/detail');
        $this->load->view('templates_admin/footer');
    }
}