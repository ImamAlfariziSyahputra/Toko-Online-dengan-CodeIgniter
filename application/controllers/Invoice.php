<?php 

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['invoice'] = $this->model_invoice->getAllInvoice();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/invoice');
        $this->load->view('templates_admin/footer');
    }
}