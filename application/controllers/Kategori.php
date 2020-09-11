<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
    public function elektronik()
    {
        $data['title'] = 'Kategori Elektronik';
        $data['elektronik'] = $this->model_kategori->getElektronik()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/kategori/elektronik');
        $this->load->view('templates/footer');
    }

    public function fashionPria()
    {
        $data['title'] = 'Kategori Fashion Wanita';
        $data['pria'] = $this->model_kategori->getFashionPria()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/kategori/fashion_pria');
        $this->load->view('templates/footer');
    }

    public function fashionWanita()
    {
        $data['title'] = 'Kategori Fashion Wanita';
        $data['wanita'] = $this->model_kategori->getFashionWanita()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/kategori/fashion_wanita');
        $this->load->view('templates/footer');
    }

    public function fashionAnak()
    {
        $data['title'] = 'Kategori Fashion Anak';
        $data['anak'] = $this->model_kategori->getFashionAnak()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/kategori/fashion_anak');
        $this->load->view('templates/footer');
    }

    public function sports()
    {
        $data['title'] = 'Kategori Sports';
        $data['sports'] = $this->model_kategori->getSports()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/kategori/sports');
        $this->load->view('templates/footer');
    }
}