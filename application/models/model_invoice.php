<?php 

class model_invoice extends CI_Model
{
    public function getAllInvoice()
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function tambahInvoice()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date
            ('s'), date('m'), date('d') + 1, date('Y'))),
        ];

        $this->db->insert('invoice', $data);
        $id_invoice = $this->db->insert_id();

        foreach($this->cart->contents() as $item) {
            $data = [
                'id_invoice' => $id_invoice,
                'id_barang' => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            ];

            $this->db->insert('pesan', $data);
        }

        return true;
    }


}