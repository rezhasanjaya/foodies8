<?php
class Profile_model extends CI_Model
{
    public function getAkunByUsername($username)
    {
        return $this->db->get_where('akun', ['username' => $username])->row_array();
    }
}
