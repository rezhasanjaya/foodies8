<?php
class Resepuser_model extends CI_Model
{
    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_resep', $keyword);
        $this->db->or_like('judul_resep', $keyword);
        $this->db->or_like('penulis_artikel', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('sumber', $keyword);
        return $this->db->get('resep')->result_array();
    }
}
