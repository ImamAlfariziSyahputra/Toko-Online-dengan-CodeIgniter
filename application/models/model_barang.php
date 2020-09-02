<?php 

class model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang');
    }
}