<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ur extends CI_Controller
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
            'jdl'   => 'Data UR - Admin Panel',
            'sub'   => 'Data UR - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data UR'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();

        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();
        $data['data_ur'] = $this->M_ur->tampilkan_ur()->result();

        $this->load->view('base/header', $data);
        $this->load->view('ur/data_ur', $data);
        $this->load->view('base/footer');
    }

    public function tambah_ur()
    {


        $data = array(
            'serial'      => $this->input->post('serial'),
            'name'      => $this->input->post('name'),
            'file'      => $this->input->post('file'),
            'location'      => $this->input->post('location'),
        );

        $this->M_ur->tambah_data($data);
        redirect('data_ur');
    }

    public function hapus_ur($id)
    {
        $where = array('id_ur' => $id);
        $this->M_ur->hapus_data($where, 'tbl_ur');
        redirect('data_ur');
    }


    public function remove()
    {
        foreach ($_POST['id_ur'] as $id) {
            $this->M_ur->delete($id);
        }
        redirect('data_ur');
    }

    public function edit_ur($id)
    {
        $data = [
            'jdl'   => 'Data UR - Admin Panel',
            'sub'   => 'Data UR - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data UR'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();

        $where = array('id_ur' => $id);
        $data['data'] = $this->M_ur->edit_ur($where, 'tbl_ur')->result();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('ur/edit_ur', $data);
        $this->load->view('base/footer');
    }

    public function updated()
    {
        $id     = $this->input->post('id');

        $data = array(

            'serial'      => $this->input->post('serial'),
            'name'       => $this->input->post('name'),
            'file'      => $this->input->post('file'),
            'location'     => $this->input->post('location'),

        );

        $where = array(
            'id_ur'        => $id
        );

        $this->M_ur->update_ur($where, $data, 'tbl_ur');
        redirect('data_ur');
    }
}
