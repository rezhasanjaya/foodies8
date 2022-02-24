<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('profile/index');
        $this->load->view('templates/footer');
    }
}
