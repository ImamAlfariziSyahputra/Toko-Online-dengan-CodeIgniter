<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['barang'] = $this->model_barang->getAllBarang();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('user/barang/index');
        $this->load->view('templates_admin/footer');
    }

    public function tambah()
    {
        
        $this->model_barang->tambahDataBarang();
        redirect('barang');
    }
}