<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_vim extends CI_Controller
{


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
            'jdl'   => 'Data VIM - Admin Panel',
            'sub'   => 'Data VIM - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data VIM'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();
        $data['data_vim'] = $this->M_vim->tampilkan_vim()->result();

        $this->load->view('base/header', $data);
        $this->load->view('vim/data_vim', $data);
        $this->load->view('base/footer');
    }

    public function tambah_vim()
    {


        $data = array(
            'serial'      => $this->input->post('serial'),
            'name'      => $this->input->post('name'),
            'software'      => $this->input->post('software'),
            'location'      => $this->input->post('location'),
        );

        $this->M_vim->tambah_data($data);
        redirect('data_vim');
    }

    public function hapus_vim($id)
    {
        $where = array('id_vim' => $id);
        $this->M_vim->hapus_data($where, 'tbl_vim');
        redirect('data_vim');
    }

    public function remove()
    {
        foreach ($_POST['id_vim'] as $id) {
            $this->M_vim->delete($id);
        }
        redirect('data_vim');
    }

    public function edit_vim($id)
    {
        $data = [
            'jdl'   => 'Data VIM - Admin Panel',
            'sub'   => 'Data VIM - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data VIM'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();

        $where = array('id_vim' => $id);
        $data['data'] = $this->M_vim->edit_vim($where, 'tbl_vim')->result();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('vim/edit_vim', $data);
        $this->load->view('base/footer');
    }

    public function updated()
    {
        $id     = $this->input->post('id');

        $data = array(

            'serial'      => $this->input->post('serial'),
            'name'       => $this->input->post('name'),
            'software'      => $this->input->post('software'),
            'location'     => $this->input->post('location'),

        );

        $where = array(
            'id_vim'        => $id
        );

        $this->M_vim->update_vim($where, $data, 'tbl_vim');
        redirect('data_vim');
    }
}
