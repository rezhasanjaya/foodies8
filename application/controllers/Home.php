<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resep_model');
    }
    public function index()
    {
        //PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/foodies/home';
        $config['total_rows'] = $this->Resep_model->countAllResep();
        $config['per_page'] = 5;

        $data['start'] = $this->uri->segment(3);
        $data['resep'] = $this->Resep_model->gettop5($config['per_page'], $data['start']);
        //install pagination
        $this->pagination->initialize($config);

        $data['judul'] = 'Home';
        $this->load->view('tempuser/headuser', $data);
        $this->load->view('home/index', $data, $config);
        $this->load->view('tempuser/footuser');
    }
}
