<?php
class Resep_model extends CI_Model
{
    public function getData_Kategori()
    {
        $query = $this->db->query("SELECT * FROM kategori ORDER BY id_kategori ASC");
        //$query = $this->db->get_where('kategori', array('id_jenis' => '1'));
        return $query->result();
    }

    /* public function upload()
    {

        $config['upload_path']  = FCPATH . '/upload/file_imgvid/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['remove_space'] = TRUE;
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;


        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('userfile')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }*/

    public function tambah($data)
    {
        $this->db->insert('resep', $data);
    }


    public function getResepByID($id_resep)
    {
        return $this->db->get_where('resep', ['id_resep' => $id_resep])->row_array();
    }

    public function edit_resep()
    {
        $data = [
            "id_resep" => $this->input->post('id_resep', true),
            "judul_resep" => $this->input->post('judul_resep', true),
            "penulis_artikel" => $this->input->post('penulis_artikel', true),
            "jenis" => $this->input->post('jenis', true),
            "id_kategori" => $this->input->post('id_kategori', true),
            "sumber" => $this->input->post('sumber', true),
            "media" => $this->input->post('media', true),
            "isi_resep" => $this->input->post('isi_resep', true),
            "langkah" => $this->input->post('langkah', true),
            "date_writed" => date('Y-m-d')
        ];
        $this->db->where('id_resep',  $this->input->post('id_resep'));
        $this->db->update('resep', $data);
    }

    public function hapus($id_resep)
    {
        $this->db->where('id_resep', $id_resep);
        $this->db->delete('resep');
    }

    public function getAllResep()
    {

        return $this->db->get('resep')->result_array();
    }

    public function gettop5($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('resep');
        $this->db->order_by('id_resep', 'DESC');

        $query = $this->db->get();

        return $this->db->get('resep', $limit, $start)->result_array();
    }

    public function countAllResep()
    {
        return $this->db->get('resep')->num_rows();
    }

    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_resep', $keyword);
        $this->db->or_like('judul_resep', $keyword);
        $this->db->or_like('penulis_artikel', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('id_kategori', $keyword);
        $this->db->or_like('sumber', $keyword);
        return $this->db->get('resep')->result_array();
    }

    public function usermakanan()
    {
        $keyword = 'Makanan';
        $this->db->or_like('jenis', $keyword);
        return $this->db->get('resep')->result_array();
    }

    public function userminuman()
    {
        $keyword = 'Minuman';
        $this->db->or_like('jenis', $keyword);
        return $this->db->get('resep')->result_array();
    }
}
