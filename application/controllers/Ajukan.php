<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajukan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Ajukan Resep';
        $this->load->view('tempuser/headuser', $data);
        $this->load->view('ajukan/index');
        $this->load->view('tempuser/footuser');
    }
}
