<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_tips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tips_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Kelola Tips';
        $data['tips'] = $this->Tips_model->getAllTips();
        if ($this->input->post('keyword')) {
            $data['tips'] = $this->Tips_model->search();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('tips/index');
        $this->load->view('templates/footer');
    }

    public function tambahtips()
    {
        $getdata = $this->Tips_model->getData_Kategori();
        $data['datakatg'] = $getdata;
        $data['judul'] = 'Tambah Tips';

        $this->form_validation->set_rules('id_tips', 'ID Tips', 'required|numeric');
        $this->form_validation->set_rules('nama_tips', 'Nama Tips', 'required');
        $this->form_validation->set_rules('id_kategori_tips', 'Kategori', 'required');
        $this->form_validation->set_rules('sumber', 'Sumber', 'required');
        $this->form_validation->set_rules('penulis_tips', 'Penulis Tips', 'required');
        $this->form_validation->set_rules('langkah', 'Langkah', 'required');

        $config['upload_path']          = './imgvid/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 2048;
        $config['max_width']            = 3840;
        $config['max_height']           = 2160;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header2', $data);
            $this->load->view('tips/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->upload->data();
            $data = [
                "id_tips" => $this->input->post('id_tips', true),
                "nama_tips" => $this->input->post('nama_tips', true),
                "id_kategori_tips" => $this->input->post('id_kategori_tips', true),
                "sumber" => $this->input->post('sumber', true),
                "media" => $this->input->post('media', true),
                "penulis_tips" => $this->input->post('penulis_tips', true),
                "langkah" => $this->input->post('langkah', true),
                "imgvid" => $this->upload->data('file_name')
            ];
            $this->Tips_model->tambah_tips($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelola_tips');
        }
    }
    public function edit($id_tips)
    {
        $data['judul'] = 'Edit Tips';
        $data['tips'] = $this->Tips_model->getTipsByID($id_tips);
        $getdata = $this->Tips_model->getData_Kategori();
        $data['datakatg'] = $getdata;
        $this->form_validation->set_rules('id_tips', 'ID Tips', 'required|numeric');
        $this->form_validation->set_rules('nama_tips', 'Nama Tips', 'required');
        $this->form_validation->set_rules('id_kategori_tips', 'Kategori', 'required');
        $this->form_validation->set_rules('sumber', 'Sumber', 'required');
        $this->form_validation->set_rules('penulis_tips', 'Penulis Tips', 'required');
        $this->form_validation->set_rules('langkah', 'Langkah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header3', $data);
            $this->load->view('tips/edit',  $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tips_model->edit_tips();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelola_tips');
        }
    }

    public function hapus($id_tips)
    {
        $this->Tips_model->hapus($id_tips);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelola_tips');
    }

    public function detail($id_tips)
    {
        $getdata = $this->Tips_model->getData_Kategori();
        $data['datakategori'] = $getdata;
        $data['judul'] = 'Detail Tips';
        $data['tips'] = $this->Tips_model->getTipsByID($id_tips);
        $this->load->view('templates/header3', $data);
        $this->load->view('tips/detail', $data);
        $this->load->view('templates/footer');
    }
}
