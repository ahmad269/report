<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backup_data extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
        $this->load->library('zip');

        if (!$this->session->userdata('status')) {
            redirect('portal');
        }
    }

    public function index()
    {
        if (!$this->session->userdata('status')) {
            redirect('portal');
        } else if ($this->session->userdata('jabatan') > 1) {
            redirect('block');
        }
        $data = [
            'jdl'   => 'Backup Data - Admin Panel',
            'sub'   => 'Backup Data - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Backup Data'
        ];

        $data['data'] = $this->M_report->backup();
        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('admin/backup', $data);
        $this->load->view('base/footer');
    }

    public function tambah_data()
    {

        $password = $this->input->post('password');

        $encode = base64_encode($password);

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'password'      =>  $encode,
            'status'        => 1,
            'tgl_buat'      => date('Y-m-d H:i:s'),
            'batas_exp'     => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))

        ];


        $this->db->insert('tbl_backup', $data);

        $this->autodelete();
        redirect('backup_data');
    }

    private function autodelete()
    {
        $query =  "UPDATE tbl_backup SET status = '0' 
                   WHERE DATEDIFF(CURRENT_DATE, 'tgl_buat') >= 1) AS t1)";

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hapus($id)
    {
        $where = array('id_backup' => $id);
        $this->M_report->hapus_data_akses($where, 'tbl_backup');
        redirect('backup_data');
    }

    function remove()
    {
        foreach ($_POST['id'] as $id) {
            $this->M_report->delete_akses($id);
        }
        redirect('backup_data');
    }
}
