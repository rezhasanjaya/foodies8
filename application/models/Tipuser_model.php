<?php
class Tipuser_model extends CI_Model
{
    public function tipsuser()
    {
        return $this->db->get('tips')->result_array();
    }

    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_tips', $keyword);
        $this->db->or_like('nama_tips', $keyword);
        $this->db->or_like('id_kategori_tips', $keyword);
        $this->db->or_like('sumber', $keyword);
        $this->db->or_like('penulis_tipe', $keyword);
        $this->db->or_like('langkah', $keyword);
        return $this->db->get('resep')->result_array();
    }

    public function getData_Kategori()
    {
        $query = $this->db->query("SELECT * FROM kategori_tips ORDER BY id_kategori_tips ASC");
        //$query = $this->db->get_where('kategori', array('id_jenis' => '1'));
        return $query->result();
    }

    public function getTipsByID($id_tips)
    {
        return $this->db->get_where('tips', ['id_tips' => $id_tips])->row_array();
    }
}
