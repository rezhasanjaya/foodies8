<?php
class Dashboard_model extends CI_Model
{
    public function get_datakategori()
    {
        return $this->db->get('kategori')->result_array();
    }
}
