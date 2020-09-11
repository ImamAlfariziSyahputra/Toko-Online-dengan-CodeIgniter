<?php 

class model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result();
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row();
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

    public function ubahDataBarang()
    {
        $data = [
            'nama_barang'  => $this->input->post('nama_barang', true),
            'keterangan'  => $this->input->post('keterangan', true),
            'kategori'  => $this->input->post('kategori', true),
            'harga'  => $this->input->post('harga', true),
            'stok'  => $this->input->post('stok', true)
        ];

        $this->db->where('id_barang', $this->input->post('id'));
        $this->db->update('barang', $data);
    }

    public function hapusDataBarang($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }

    public function find($id) {
        $result = $this->db->where('id_barang', $id)
                            ->limit(1)
                            ->get('barang');
        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function getDetailBarang($id)
    {
        $result = $this->db->where('id_barang', $id)->get('barang');

        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

}