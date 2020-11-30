<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    // APP PPDB BY RYF PRODUCT
    // PRESENT BY TAFAKILAH INDONESIA
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('status')) {
            redirect('portal');
        }
    }

    public function index()
    {

        $data = [
            'jdl'   => 'Profil Saya - Admin Panel',
            'sub'   => 'Profil Saya - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Profil Saya'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['detail'] = $this->M_user->tampilkan_semua();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();


        $this->load->view('base/header', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('base/footer', $data);
    }

    public function update_data()
    {
        $kode =  $this->input->post('kode');

        $data = [
            'nama'      => htmlspecialchars($this->input->post('nama'), true),
            'email'      => htmlspecialchars($this->input->post('email'), true),
            'username'      => htmlspecialchars($this->input->post('username'), true),
            'status_pribadi'      => $this->input->post('status_pribadi'),
            'alamat'      => $this->input->post('alamat'),
            'skill'      => $this->input->post('skill'),
        ];

        $where = array(
            'kode'        => $kode
        );



        $this->M_user->update($where, $data, 'akun_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil di update ! 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>');
        redirect('profile');
    }

    public function update_foto_profil()
    {
        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $kode = $this->input->post('kode');

        // cek jika ada gambar di upload
        $upload_image = $_FILES['foto_profil']['name'];

        if ($upload_image) {
            $config['upload_path'] = './material/myreport/profil/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']     = '2048';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_profil')) {
                $old_image = $data['user']['foto_profil'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'material/myreport/profil/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profil', $new_image);
            } else {
                // echo $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>' . $this->upload->display_errors() . '</div>');
                redirect('profile');
            }
        }

        $this->db->where('kode', $kode);
        $this->db->update('akun_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Foto profil berhasil diganti ! 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>');
        redirect('profile');
    }

    public function ganti_password()
    {

        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $kode = $this->input->post('kode');



        $this->db->set('password', $password);
        $this->db->where('kode', $kode);
        $this->db->update('akun_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissable fade show" role="alert">Password berhasil di perbarui
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('profile');
    }
}
