<?php
class Katips_model extends CI_Model
{

    public function get_datakategori()
    {
        return $this->db->get('kategori_tips')->result_array();
    }
    public function tambahkategori()
    {
        $data = [
            "id_kategori_tips" => $this->input->post('id_kategori_tips', true),
            "nama_kategori_tips" => $this->input->post('nama_kategori_tips', true)
            //"id_jenis" => $this->input->post('id_jenis', true)
        ];
        $this->db->insert('kategori_tips', $data);
    }

    /*public function getData_Jenis()
    {
        $query = $this->db->query("SELECT * FROM jenis ORDER BY id_jenis ASC");
        return $query->result();
    }*/

    public function getKategoriById($id_kategori_tips)
    {
        return $this->db->get_where('kategori_tips', ['id_kategori_tips' => $id_kategori_tips])->row_array();
    }

    public function edit_kategori()
    {
        $data = [
            "id_kategori_tips" => $this->input->post('id_kategori_tips', true),
            "nama_kategori_tips" => $this->input->post('nama_kategori_tips', true)
        ];
        $this->db->where('id_kategori_tips',  $this->input->post('id_kategori_tips'));
        $this->db->update('kategori_tips', $data);
    }

    public function hapus($id_kategori_tips)
    {
        $this->db->where('id_kategori_tips', $id_kategori_tips);
        $this->db->delete('kategori_tips');
    }

    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_kategori_tips', $keyword);
        $this->db->or_like('nama_kategori_tips', $keyword);
        return $this->db->get('kategori_tips')->result_array();
    }
}
