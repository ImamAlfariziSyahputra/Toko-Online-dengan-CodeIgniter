<?php 

class model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result();
    }

    public function tambahDataBarang()
    {
        $nama_barang  = $this->input->post('nama_barang', true);
        $keterangan  = $this->input->post('keterangan', true);
        $kategori  = $this->input->post('kategori', true);
        $harga  = $this->input->post('harga', true);
        $stok  = $this->input->post('stok', true);
        $gambar  = $_FILES['gambar']['name'];
        if ($gambar = "") {
        } else {
            $config['upload_path'] = './assets/img/item';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        ];

        $this->db->insert('barang', $data);
    }
}