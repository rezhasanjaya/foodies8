<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user'))
            redirect('dashboard');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/headin',  $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/footin');
        } else {
            $this->_login();
        }
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Lengkap harus diisi',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[32]|min_length[6]', [
            'required' => 'Username harus diisi',
            'min_length' => 'Username harus lebih dari 5 huruf!',
            'max_length' => 'Username harus kurang dari 32 huruf!'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Email tidak valid!'
        ]);

        $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim|max_length[32]|min_length[6]|matches[password1]', [
            'required' => 'Password harus diisi',
            'min_length' => 'Password harus lebih dari 5 huruf!',
            'max_length' => 'Password harus kurang dari 32 huruf!',
            'matches' => 'Password tidak cocok!'
        ]);
        $this->form_validation->set_rules('password1', 'Mohon Masukan Kembali', 'required|trim|matches[password]', [
            'required' => 'Masukan Password Kembali ',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password harus lebih dari 5 huruf!',
            'max_length' => 'Password harus kurang dari 32 huruf!'

        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required', [
            'required' => 'Pilih Jenis Kelamin'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Daftar Admin Foodies';
            $this->load->view('templates/headin', $data);
            $this->load->view('daftar/index');
            $this->load->view('templates/footin');
        } else {
            $data1 = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password', true)),
                'image' => 'default.jpg',
                'date_created' => time(),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true)
            ];
            $this->db->insert('akun', $data1);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda Berhasil Daftar</div>');
            redirect('Authadmin');
        }
    }
    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('akun', ['username' => $username])->row_array();

        if ($user) {
            if (md5($password) == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'nama' => $user['nama'],
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('Authadmin');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
            redirect('Authadmin');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda Berhasil Log Out</div>');
        redirect('Authadmin');
    }
}

?>
<script>
    (function(global) {

        if (typeof(global) === "undefined") {
            throw new Error("window is undefined");
        }

        var _hash = "!";
        var noBackPlease = function() {
            global.location.href += "#";

            // making sure we have the fruit available for juice (^__^)
            global.setTimeout(function() {
                global.location.href += "!";
            }, 50);
        };

        global.onhashchange = function() {
            if (global.location.hash !== _hash) {
                global.location.hash = _hash;
            }
        };

        global.onload = function() {
            noBackPlease();

            // disables backspace on page except on input fields and textarea..
            document.body.onkeydown = function(e) {
                var elm = e.target.nodeName.toLowerCase();
                if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                    e.preventDefault();
                }
                // stopping event bubbling up the DOM tree..
                e.stopPropagation();
            };
        }

    })(window);
</script>