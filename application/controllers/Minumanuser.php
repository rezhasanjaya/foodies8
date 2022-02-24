<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minumanuser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resep_model');
        $this->load->library('form_validation');
        $this->load->model('Resepuser_model');
    }
    public function Index()
    {
        $data['judul'] = 'Resep Minuman';
        $data['resep'] = $this->Resep_model->userminuman();
        if ($this->input->post('keyword')) {
            $data['resep'] = $this->Resepuser_model->search();
        }
        $this->load->view('tempuser/headuser', $data);
        $this->load->view('minumanuser/index', $data);
        $this->load->view('tempuser/footuser');
    }

    public function lihat($id_resep)
    {
        $getdata = $this->Resep_model->getData_Kategori();
        $data['datakategori'] = $getdata;
        $data['judul'] = 'Detail Resep';
        $data['resep'] = $this->Resep_model->getResepByID($id_resep);
        $this->load->view('tempuser/headuser2', $data);
        $this->load->view('minumanuser/lihat', $data);
        $this->load->view('tempuser/footuser2');
    }
}
