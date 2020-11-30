<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

    // APP PPDB BY RYF PRODUCT
    // PRESENT BY TAFAKILAH INDONESIA
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('status')) {
            redirect('portal');
        } else if ($this->session->userdata('jabatan') > 1) {
            redirect('block');
        }
    }

    public function index()
    {

        $data = [
            'jdl'   => 'Data User - Admin Panel',
            'sub'   => 'Data User - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data User'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['detail'] = $this->M_user->tampilkan_semua();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();
        $data['kodeuser'] = $this->M_user->buat_kode();


        $this->load->view('base/header', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('base/footer', $data);
    }

    public function hapus($kode)
    {
        $where = array('kode' => $kode);
        $this->M_user->hapus_data($where, 'akun_user');
        redirect('data_user');
    }

    public function remove()
    {
        foreach ($_POST['id_akun'] as $id) {
            $this->M_user->delete($id);
        }
        redirect('data_user');
    }

    public function daftar()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email  = $this->input->post('email');
        $password = $this->input->post('pass1');


        $data = [
            'kode'      => $kode,
            'foto_profil'   => 'default.jpg',
            'nama'      => htmlspecialchars($nama, true),
            'username'  => htmlspecialchars($username, true),
            'email'     => htmlspecialchars($email, true),
            'password'  => password_hash($password, PASSWORD_DEFAULT),
            'jabatan'   => 2,
            'aktif'    => 1,
            'tgl_daftar' => time()
        ];

        $this->db->insert('akun_user', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil ditambahkan. Silahkan Login!</div>');
        redirect('data_user');
    }

    public function edit_user($kode)
    {
        $data = [
            'jdl'   => 'Edit User - Admin Panel',
            'sub'   => 'Edit User - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Edit User'
        ];
        $data['akun'] = $this->M_user->tampilkan_detail();
        $where = array('kode' => $kode);
        $data['id'] = $this->uri->segment(4);
        $data['data'] = $this->M_user->edit_user($where, 'akun_user');
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('admin/edit_user', $data);
        $this->load->view('base/footer');
    }

    public function updated()
    {
        $kode     = $this->input->post('kode');

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'jabatan' => $this->input->post('jabatan'),
            'aktif' => $this->input->post('aktif'),

        ];

        $where = array(
            'kode'        => $kode
        );

        $this->M_user->update_data($where, $data, 'akun_user');
        redirect('data_user');
    }
}
