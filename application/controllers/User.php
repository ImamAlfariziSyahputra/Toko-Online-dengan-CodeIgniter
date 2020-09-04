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
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }
    
}