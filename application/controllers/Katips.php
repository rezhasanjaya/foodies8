<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Katips_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Kelola Kategori Tips";
        $data['katips'] = $this->Katips_model->get_datakategori();
        if ($this->input->post('keyword')) {
            $data['katips'] = $this->Katips_model->search();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('kategori_tips/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        //$getdata = $this->Kategori_model->getData_Jenis();
        //$data['datajenis'] = $getdata;
        $data['judul'] = 'Tambah Kategori Tips';
        $this->form_validation->set_rules('id_kategori_tips', 'ID Kategori', 'required|numeric|is_unique[kategori_tips.id_kategori_tips]');
        $this->form_validation->set_rules('nama_kategori_tips', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('kategori_tips/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Katips_model->tambahkategori();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('katips');
        }
    }

    public function edit($id_kategori_tips)
    {
        $data['judul'] = 'Edit Kategori Tips';
        $data['katips'] = $this->Katips_model->getKategoriById($id_kategori_tips);
        $this->form_validation->set_rules('id_kategori_tips', 'ID Kategori', 'required|numeric');
        $this->form_validation->set_rules('nama_kategori_tips', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('kategori_tips/edit',  $data);
            $this->load->view('templates/footer');
        } else {
            $this->Katips_model->edit_kategori();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('katips');
        }
    }

    public function hapus($id_kategori_tips)
    {
        $this->Katips_model->hapus($id_kategori_tips);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('katips');
    }
}
