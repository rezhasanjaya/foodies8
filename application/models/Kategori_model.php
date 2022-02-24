<?php
class Kategori_model extends CI_Model
{

    public function get_datakategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function tambahkategori()
    {
        $data = [
            "id_kategori" => $this->input->post('id_kategori', true),
            "nama_kategori" => $this->input->post('nama_kategori', true)
            //"id_jenis" => $this->input->post('id_jenis', true)
        ];
        $this->db->insert('kategori', $data);
    }

    /*public function getData_Jenis()
    {
        $query = $this->db->query("SELECT * FROM jenis ORDER BY id_jenis ASC");
        return $query->result();
    }*/

    public function getKategoriById($id_kategori)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array();
    }

    public function edit_kategori()
    {
        $data = [
            "id_kategori" => $this->input->post('id_kategori', true),
            "nama_kategori" => $this->input->post('nama_kategori', true)
        ];
        $this->db->where('id_kategori',  $this->input->post('id_kategori'));
        $this->db->update('kategori', $data);
    }

    public function hapus($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }

    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_kategori', $keyword);
        $this->db->or_like('nama_kategori', $keyword);
        return $this->db->get('kategori')->result_array();
    }
}
