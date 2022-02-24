<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Tentang';
        $this->load->view('tempuser/headuser', $data);
        $this->load->view('tentang/index');
        $this->load->view('tempuser/footuser');
    }
}
