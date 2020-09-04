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
        $this->load->view('admin/barang/index');
        $this->load->view('templates_admin/footer');
    }

    public function tambah()
    {
        $this->model_barang->tambahDataBarang();
        redirect('barang');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Barang';
        $data['barang'] = $this->model_barang->getBarangById($id);

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('templates_admin/topbar');
            $this->load->view('admin/barang/edit');
            $this->load->view('templates_admin/footer');
        } else {            
            $this->model_barang->ubahDataBarang();
            redirect('barang');
        }
    }

    public function hapus($id)
    {
        $this->model_barang->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }
    
}