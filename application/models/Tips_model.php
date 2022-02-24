<?php
class Tips_model extends CI_Model
{
    public function getAllTips()
    {
        return $this->db->get('tips')->result_array();
    }

    public function getData_Kategori()
    {
        $query = $this->db->query("SELECT * FROM kategori_tips ORDER BY id_kategori_tips ASC");
        //$query = $this->db->get_where('kategori', array('id_jenis' => '1'));
        return $query->result();
    }

    public function tambah_tips($data)
    {
        $this->db->insert('tips', $data);
    }

    public function getTipsByID($id_tips)
    {
        return $this->db->get_where('tips', ['id_tips' => $id_tips])->row_array();
    }
    public function edit_tips()
    {
        $data = [
            "id_tips" => $this->input->post('id_tips', true),
            "nama_tips" => $this->input->post('nama_tips', true),
            "id_kategori_tips" => $this->input->post('id_kategori_tips', true),
            "sumber" => $this->input->post('sumber', true),
            "media" => $this->input->post('media', true),
            "penulis_tips" => $this->input->post('penulis_tips', true),
            "langkah" => $this->input->post('langkah', true)
        ];
        $this->db->where('id_tips',  $this->input->post('id_tips'));
        $this->db->update('tips', $data);
    }

    public function hapus($id_tips)
    {
        $this->db->where('id_tips', $id_tips);
        $this->db->delete('tips');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_tips', $keyword);
        $this->db->or_like('nama_tips', $keyword);
        $this->db->or_like('id_kategori_tips', $keyword);
        $this->db->or_like('sumber', $keyword);
        $this->db->or_like('penulis_tips', $keyword);
        return $this->db->get('tips')->result_array();
    }
}
