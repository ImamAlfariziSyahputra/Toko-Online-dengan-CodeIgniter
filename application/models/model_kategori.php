<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_kategori extends CI_Model 
{
    public function getElektronik()
    {
        return $this->db->get_where('barang', ['kategori' => 'Elektronik']);
    }
    
    public function getFashionPria()
    {
        return $this->db->get_where('barang', ['kategori' => 'Fashion Pria']);
    }

    public function getFashionWanita()
    {
        return $this->db->get_where('barang', ['kategori' => 'Fashion Wanita']);
    }

    public function getFashionAnak()
    {
        return $this->db->get_where('barang', ['kategori' => 'Fashion Anak']);
    }

    public function getSports()
    {
        return $this->db->get_where('barang', ['kategori' => 'Sports']);
    }
}