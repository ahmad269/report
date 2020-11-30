<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    // APP MY REPORT
    // PRESENT TO
    // PT JVC ELECTRONICS INDONESIA

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
        if ($this->session->userdata('jabatan') > 2) {
            $this->session->set_flashdata('pesan', ' <script>alert("Maaf akses ditolak!");history.back()</script>');
        }

        $data = [
            'jdl'   => 'Dashboard - Admin Panel',
            'sub'   => 'Dashboard - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Dashboard',

            'ur'      => $this->M_report->jumlah_ur(),
            'vim'       => $this->M_report->jumlah_vim(),
            'melva'     => $this->M_report->jumlah_melva(),
            'trouble'     => $this->M_report->jumlah_trouble(),
            'improve'     => $this->M_report->jumlah_improve(),
            'maintenance'     => $this->M_report->jumlah_maintenance(),
            'report'    => $this->M_report->jumlah_report(),
            'total_user'    => $this->M_report->jumlah_user(),
            'total_data_ur' => $this->M_ur->jumlah_ur(),
            'total_data_vim'    => $this->M_vim->jumlah_vim()
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();


        $this->load->view('base/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('base/footer', $data);
    }

    public function backup_data()
    {
        if ($this->session->userdata('jabatan') > 1) {
            redirect('block');
        }

        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_backup', ['password => $password'])->row_array();


        // cek password user
        if (base64_encode($password) == $user['password']) {
            if ($user['status'] == 1) {
                $this->load->dbutil();
                $format_file = array('format' => 'zip', 'filename' => 'Database Backup_MYREPORT.sql');
                $backup = &$this->dbutil->backup($format_file);
                $dbname = 'Backup data : ' . date('d F Y') . '.zip';
                $save = 'material/myreport/backup_database/' . $dbname;
                write_file($save, $backup);
                force_download($dbname, $backup);

                redirect('data_report');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger mt-2" role="alert">Anda tidak memiliki akses !	</div>');
                redirect('data_report');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger mt-2" role="alert">Akses Ditolak ! Silahkan masukan password dengan benar </div>');
            redirect('data_report');
        }
    }
}
