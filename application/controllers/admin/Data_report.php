<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_report extends CI_Controller
{

    // APP MY REPORT
    // PRESENT TO
    // PT JVC ELECTRONICS INDONESIA

    private $filename = 'import_report'; // Kita tentukan nama filenya

    public function __construct()
    {
        parent::__construct();
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
            'jdl'   => 'Data Report - Admin Panel',
            'sub'   => 'Data Report - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Data Report',
            'uri' => base_url('admin/data_report/dataw')
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['report'] = $this->M_report->tampilkan_report();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('report/rep', $data);
        $this->load->view('base/footer', $data);
    }

    public function dataw($date1 = null, $date2 = null)
    {

        if (empty($date1) && empty($date2)) {
            // $wh = array('date' => '02/11/2020');
            // $fetch_data = $this->M_report->tampil_w('tbl_report', $wh);
            $fetch_data = $this->M_report->tampilkan_report();
        } else {

            $dt1 = date('Y-m-d', strtotime($date1));
            // $dt2 = date('d/m/Y', strtotime($date2));

            // $wh = array('date >=' => $dt1, 'date <=' => $dt2);
            $wh = array('Y-m-d' => $dt1);
            $fetch_data = $this->M_report->tampil_w($date1, $date2);

            // print_r($fetch_data); exit;
        }


        $data = array();
        $no = 1;
        foreach ($fetch_data as $rpt) {
            $sub_array = array();
            $sub_array[] = '<input type="checkbox" class="check-item" name="id_report[]" value="' . $rpt->id_report . '">';
            $sub_array[] = $no++;
            $sub_array[] = $rpt->date;
            $sub_array[] = $rpt->line;
            $sub_array[] = $rpt->tstart;
            $sub_array[] = $rpt->tfinish;
            $sub_array[] = $rpt->duration;
            $sub_array[] = $rpt->type;
            $sub_array[] = $rpt->eqp;
            $sub_array[] = $rpt->item;
            $sub_array[] = $rpt->model;
            $sub_array[] = $rpt->file;
            $sub_array[] = $rpt->pic;
            $sub_array[] = '
            <a href id="detail_report" class="btn btn-success btn-sm " data-toggle="modal" data-target="#detail-report" data-line="' . $rpt->line . '" data-type="' . $rpt->type . '" data-eqp="' . $rpt->eqp . '" data-problem="' . $rpt->problem . '" data-action="' . $rpt->action . '" data-cause="' . $rpt->cause . '" data-note="' . $rpt->note . '">
            <i class=" fa fa-search-plus text-white"></i></a>&nbsp;
            <a href="' . base_url('admin/data_report/edit_report/' . $rpt->id_report) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
            <a href="' . base_url('admin/data_report/hapus_report/' . $rpt->id_report) . '" class="btn btn-danger btn-sm" onclick="return confirm("Apakah anda yakin menghapus data ini?")"><i class=" fa fa-trash"></i></a>';

            $data[] = $sub_array;
        }
        $output = array(
            "data" => $data
        );
        echo json_encode($output);
    }

   

    public function filter()
    {
        $date1 = $this->input->post('aw');
        $date2 = $this->input->post('akh');

        // print_r($date1);
        // print_r($date2); exit;

        if ($date1 && $date2) {

            // $dt1 = date('Y-m-d', strtotime($date1));


            if ($this->session->userdata('jabatan') > 2) {
                $this->session->set_flashdata('pesan', ' <script>alert("Maaf akses ditolak!");history.back()</script>');
            }
            $data = [
                'jdl'   => 'Data Report - Admin Panel',
                'sub'   => 'Data Report - MY REPORT',
                'navmenu' => 'AUTOMATION ' . date('Y'),
                'navigasi'  => 'Data Report ' . $date1,
                'dat1'=>$date1,
                'dat2'=>$date2,
                'uri' => base_url('admin/data_report/dataw/' . $date1 . '/' . $date2)
            ];

            $data['akun'] = $this->M_user->tampilkan_detail();
            $data['report'] = $this->M_report->tampilkan_report();
            $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

            $this->load->view('base/header', $data);
            $this->load->view('report/rep', $data);
            $this->load->view('base/footer', $data);
        } else {
            $this->rep();
            // echo 'ada';
        }
    }

    public function tambah_report()
    {
        $tstart = $this->input->post('tstart');
        $tfinish = $this->input->post('tfinish');
        $selisih = $this->M_report->selisih($tstart, $tfinish);

        $date = date_create($this->input->post('date'));
        $date = date_format($date, "Y-m-d");

        $report = array(
            'date'      => $date,
            'line'      => $this->input->post('line'),
            'tstart'    => $tstart,
            'tfinish'   => $tfinish,
            'duration' => $selisih,
            'type'      => $this->input->post('type'),
            'eqp'       => $this->input->post('eqp'),
            'item'      => $this->input->post('item'),
            'model'     => $this->input->post('model'),
            'file'      => $this->input->post('file'),
            'problem'   => $this->input->post('problem'),
            'cause'     => $this->input->post('cause'),
            'action'    => $this->input->post('action'),
            'note'      => $this->input->post('note'),
            'pic'       => $this->input->post('pic')
        );

        $this->M_report->simpan_report($report);
        redirect('data_report');
    }


    public function edit_report($id)
    {
        $data = [
            'jdl'   => 'Edit Report - Admin Panel',
            'sub'   => 'Edit Report - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'Edit Report'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();

        $where = array('id_report' => $id);
        $data['report'] = $this->M_report->data_edit($where, 'tbl_report')->result();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('report/edit_report', $data);
        $this->load->view('base/footer', $data);
    }

    public function update_report()
    {
        $id     = $this->input->post('id');
        $tstart = $this->input->post('tstart');
        $tfinish = $this->input->post('tfinish');


        $selisih = $this->M_report->selisih($tstart, $tfinish);

        $data = array(
            'date'  => $this->input->post('date'),
            'line'  => $this->input->post('line'),
            'tstart'    => $tstart,
            'tfinish'   => $tfinish,
            'duration'  => $selisih,
            'type'      => $this->input->post('type'),
            'eqp'       => $this->input->post('eqp'),
            'item'      => $this->input->post('item'),
            'model'     => $this->input->post('model'),
            'file'      => $this->input->post('file'),
            'problem'   => $this->input->post('problem'),
            'cause'     => $this->input->post('cause'),
            'action'    => $this->input->post('action'),
            'note'      => $this->input->post('note'),
            'pic'       => $this->input->post('pic')
        );

        $where = array(
            'id_report'        => $id
        );

        $this->M_report->update_report($where, $data, 'tbl_report');
        redirect('data_report');
    }

    public function hapus_report($id)
    {
        $where = array('id_report' => $id);
        $this->M_report->hapus_report($where, 'tbl_report');
        redirect('data_report');
    }

    public function remove()
    {
        foreach ($_POST['id_report'] as $id) {
            $this->M_report->delete($id);
        }
        redirect('data_report');
    }

    // FUNGSI EXPORT
    public function export_excel($date1 = null, $date2 = null)
    {

        $data['data'] = $this->M_report->tampil_w($date1, $date2);

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator('Ahmad Zaenudin');
        $object->getProperties()->setLastModifiedBy('Ahmad Zaenudin');
        $object->getProperties()->setTitle('Master Data MYReport');
        $object->getProperties()->setDescription('File ini adalah hasil export dari aplikasi MYReport');

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'Date');
        $object->getActiveSheet()->setCellValue('C1', 'Line');
        $object->getActiveSheet()->setCellValue('D1', 'Time Start');
        $object->getActiveSheet()->setCellValue('E1', 'Time Finish');
        $object->getActiveSheet()->setCellValue('F1', 'Duration');
        $object->getActiveSheet()->setCellValue('G1', 'Type');
        $object->getActiveSheet()->setCellValue('H1', 'Equipment');
        $object->getActiveSheet()->setCellValue('I1', 'Item');
        $object->getActiveSheet()->setCellValue('J1', 'Model');
        $object->getActiveSheet()->setCellValue('K1', 'File');
        $object->getActiveSheet()->setCellValue('L1', 'Problem');
        $object->getActiveSheet()->setCellValue('M1', 'Cause');
        $object->getActiveSheet()->setCellValue('N1', 'Action');
        $object->getActiveSheet()->setCellValue('O1', 'Note');
        $object->getActiveSheet()->setCellValue('P1', 'Pic');

        $baris = 2;
        $no = 1;

        foreach ($data['data'] as $dt) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dt->date);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dt->line);
            $object->getActiveSheet()->setCellValue('D' . $baris, $dt->tstart);
            $object->getActiveSheet()->setCellValue('E' . $baris, $dt->tfinish);
            $object->getActiveSheet()->setCellValue('F' . $baris, $dt->duration);
            $object->getActiveSheet()->setCellValue('G' . $baris, $dt->type);
            $object->getActiveSheet()->setCellValue('H' . $baris, $dt->eqp);
            $object->getActiveSheet()->setCellValue('I' . $baris, $dt->item);
            $object->getActiveSheet()->setCellValue('J' . $baris, $dt->model);
            $object->getActiveSheet()->setCellValue('K' . $baris, $dt->file);
            $object->getActiveSheet()->setCellValue('L' . $baris, $dt->problem);
            $object->getActiveSheet()->setCellValue('M' . $baris, $dt->cause);
            $object->getActiveSheet()->setCellValue('N' . $baris, $dt->action);
            $object->getActiveSheet()->setCellValue('O' . $baris, $dt->note);
            $object->getActiveSheet()->setCellValue('P' . $baris, $dt->pic);

            $baris++;
        }

        date_default_timezone_set('Asia/Jakarta');
        $filename = "Laporan Master Data " . date('d F Y') . '.xlsx';

        $object->getActiveSheet()->setTitle("Master Data");

        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }




    // FUNGSI IMPORT EXCEL
    public function form()
    {


        $data = array();

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $upload = $this->M_report->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('material/myreport/file_data/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();
        $data['jdl'] = 'Form Import Data';
        $this->load->view('report/form_preview_report', $data);
    }

    public function import()
    {

        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('material/myreport/file_data/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'date' => $row['B'], // Insert data nis dari kolom B di excel
                    'line' => $row['C'],
                    'tstart' => $row['D'],
                    'tfinish' => $row['E'],
                    'duration' => $row['F'],
                    'type' => $row['G'],
                    'eqp' => $row['H'],
                    'item' => $row['I'],
                    'model' => $row['J'],
                    'file' => $row['K'],
                    'problem' => $row['L'],
                    'cause' => $row['M'],
                    'action' => $row['N'],
                    'note' => $row['O'],
                    'pic' => $row['P'],

                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->M_report->insert_multiple($data);

        redirect('data_report'); // Redirect ke halaman awal (ke controller siswa fungsi index)


    }
}
