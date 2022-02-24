<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = "Kelola Kategori";
        $data['datakategori'] = $this->Kategori_model->get_datakategori();
        $data['kategori'] = $this->Kategori_model->getAllKategori();
        if ($this->input->post('keyword')) {
            $data['kategori'] = $this->Kategori_model->search();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        //$getdata = $this->Kategori_model->getData_Jenis();
        //$data['datajenis'] = $getdata;
        $data['judul'] = 'Tambah Kategori Makanan';
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required|numeric|is_unique[kategori.id_kategori]');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('kategori/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kategori_model->tambahkategori();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kategori');
        }
    }

    public function edit($id_kategori)
    {
        $data['judul'] = 'Edit Kategori';
        $data['kategori'] = $this->Kategori_model->getKategoriById($id_kategori);
        $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required|numeric');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('kategori/edit',  $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kategori_model->edit_kategori();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kategori');
        }
    }

    public function hapus($id_kategori)
    {
        $this->Kategori_model->hapus($id_kategori);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kategori');
    }
}
