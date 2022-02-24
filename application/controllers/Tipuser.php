<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tipuser_model');
    }

    public function Index()
    {

        $data['judul'] = 'Tips';
        $data['tipuser'] = $this->Tipuser_model->tipsuser();
        if ($this->input->post('keyword')) {
            $data['tipsuser'] = $this->Tipuser_model->search();
        }
        $this->load->view('tempuser/headuser', $data);
        $this->load->view('tipuser/index', $data);
        $this->load->view('tempuser/footuser');
    }

    public function lihat($id_tips)
    {
        $getdata = $this->Tipuser_model->getData_Kategori();
        $data['datakategori'] = $getdata;
        $data['judul'] = 'Lihat Tips';
        $data['tips'] = $this->Tipuser_model->getTipsByID($id_tips);
        $this->load->view('tempuser/headuser2', $data);
        $this->load->view('tipuser/lihat', $data);
        $this->load->view('tempuser/footuser2');
    }
}
