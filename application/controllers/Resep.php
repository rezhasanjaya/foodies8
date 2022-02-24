<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resep_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    /* public function upload()
    {
        $config['upload_path'] = './imgvid/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imgvid')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('imageupload_form', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('imageupload_success', $data);
        }
    }

    public function aksi_upload()
    {
        $config['upload_path']          = './imgvid/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 2048;
        $config['max_width']            = 3840;
        $config['max_height']           = 2160;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('imgvid')) {
            $error = array('error' => $this->upload->display_errors());
            $data['judul'] = 'Tulis Resep';
            $this->load->view('templates/header2', $data);
            $this->load->view('resep/tambah', $error);
            $this->load->view('templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());
            redirect('resep');
        }
    }*/

    public function index()
    {
        $data['resep'] = $this->Resep_model->getAllResep();
        $data['judul'] = 'Kelola Resep';
        if ($this->input->post('keyword')) {
            $data['resep'] = $this->Resep_model->search();
        }
        //PAGINATION
        //$this->load->library('pagination');

        //CONFIG
        // $config['base_url'] = 'http://localhost/foodies/makanan/index';
        // $config['total_rows'] = $this->Resep_model->countAllResep();
        //$config['per_page'] = 12;

        // $data['start'] = $this->uri->segment(3);
        // $data['resep'] = $this->Resep_model->getMakanan($config['per_page'], $data['start']);
        //install pagination
        //$this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('templates/header', $data);
        $this->load->view('resep/index', $data);
        $this->load->view('templates/footer');
    }

    public function tulisresep()
    {
        $getdata = $this->Resep_model->getData_Kategori();
        $data['datakatg'] = $getdata;
        $data['judul'] = 'Tulis Resep';
        $this->form_validation->set_rules('id_resep', 'ID Resep', 'required');
        $this->form_validation->set_rules('judul_resep', 'Judul Resep', 'required');
        $this->form_validation->set_rules('penulis_artikel', 'Penulis Artikel', 'required');
        $this->form_validation->set_rules('sumber', 'Sumber', 'required');
        $this->form_validation->set_rules('isi_resep', 'Isi Resep', 'required');
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
            $this->load->view('resep/tambah');
            $this->load->view('templates/footer');
        } else {
            $now = new DateTime();
            $this->upload->data();
            $data = [
                "id_resep" => $this->input->post('id_resep', true),
                "judul_resep" => $this->input->post('judul_resep', true),
                "penulis_artikel" => $this->input->post('penulis_artikel', true),
                "jenis" => $this->input->post('jenis', true),
                "id_kategori" => $this->input->post('id_kategori', true),
                "sumber" => $this->input->post('sumber', true),
                "media" => $this->input->post('media', true),
                "isi_resep" => $this->input->post('isi_resep', true),
                "langkah" => $this->input->post('langkah', true),
                "date_writed" => $now->format('Y-m-d H:i:s'),
                "imgvid" => $this->upload->data('file_name')
            ];
            $this->Resep_model->tambah($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('resep');
        }
    }


    public function detail($id_resep)
    {
        $getdata = $this->Resep_model->getData_Kategori();
        $data['datakategori'] = $getdata;
        $data['judul'] = 'Detail Resep';
        $data['resep'] = $this->Resep_model->getResepByID($id_resep);
        $this->load->view('templates/header3', $data);
        $this->load->view('resep/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id_resep)
    {
        $data['judul'] = 'Edit Resep';
        $data['resep'] = $this->Resep_model->getResepByID($id_resep);
        $getdata = $this->Resep_model->getData_Kategori();
        $data['datakatg'] = $getdata;
        $this->form_validation->set_rules('id_resep', 'ID Resep', 'required');
        $this->form_validation->set_rules('judul_resep', 'Judul Resep', 'required');
        $this->form_validation->set_rules('penulis_artikel', 'Penulis Artikel', 'required');
        $this->form_validation->set_rules('sumber', 'Sumber', 'required');
        $this->form_validation->set_rules('isi_resep', 'Isi Resep', 'required');
        $this->form_validation->set_rules('langkah', 'Langkah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header3', $data);
            $this->load->view('resep/edit',  $data);
            $this->load->view('templates/footer');
        } else {

            $this->Resep_model->edit_resep();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('resep');
        }
    }

    public function hapus($id_resep)
    {
        $this->Resep_model->hapus($id_resep);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('resep');
    }
}
