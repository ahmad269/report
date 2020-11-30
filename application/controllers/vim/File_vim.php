<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_vim extends CI_Controller
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
            'jdl'   => 'FIle VIM - Admin Panel',
            'sub'   => 'FIle VIM - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'FIle VIM'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $data['file_vim'] = $this->M_vim->tampilkan_file_vim();

        $this->load->view('base/header', $data);
        $this->load->view('vim/file_vim', $data);
        $this->load->view('base/footer');
    }

    public function tambah_file_vim()
    {


        $data = array(
            'line'      => $this->input->post('line'),
            'model'      => $this->input->post('model'),
            'file'      => $this->input->post('file'),

        );

        $this->M_vim->tambah_file_vim($data);
        redirect('file_vim');
    }

    public function hapus_file_vim($id)
    {
        $where = array('id_filevim' => $id);
        $this->M_vim->hapus_file_vim($where, 'file_vim');
        redirect('file_vim');
    }

    public function remove()
    {
        foreach ($_POST['id_filevim'] as $id) {
            $this->M_vim->delete_filevim($id);
        }
        redirect('file_vim');
    }

    public function export_excel()
    {

        $data['data'] = $this->M_vim->tampilkan_file_vim();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator('Ahmad Zaenudin');
        $object->getProperties()->setLastModifiedBy('Ahmad Zaenudin');
        $object->getProperties()->setTitle('Master Data MYReport');
        $object->getProperties()->setDescription('File ini adalah hasil export dari aplikasi MYReport');

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'Line');
        $object->getActiveSheet()->setCellValue('C1', 'Model');
        $object->getActiveSheet()->setCellValue('D1', 'File');


        $baris = 2;
        $no = 1;

        foreach ($data['data'] as $dt) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dt->line);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dt->model);
            $object->getActiveSheet()->setCellValue('D' . $baris, $dt->file);



            $baris++;
        }

        date_default_timezone_set('Asia/Jakarta');
        $filename = "Laporan Data File VIM " . date('d F Y') . '.xlsx';

        $object->getActiveSheet()->setTitle("Master Data");

        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function form_vim()
    {

        $data = array();

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $upload = $this->M_vim->upload_file($this->filename);

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
        $data['jdl'] = 'Form Import Data File VIM';
        $this->load->view('vim/form_preview_vim', $data);
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
                    'line' => $row['B'], // Insert data nis dari kolom B di excel
                    'model' => $row['C'],
                    'file' => $row['D'],


                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->M_vim->insert_multiple($data);

        redirect('file_vim'); // Redirect ke halaman awal (ke controller siswa fungsi index)


    }

    public function edit_file_vim($id)
    {

        $data = [
            'jdl'   => 'EDIT FILE VIM - Admin Panel',
            'sub'   => 'EDIT FILE VIM - MY REPORT',
            'navmenu' => 'AUTOMATION ' . date('Y'),
            'navigasi'  => 'EDIT FILE VIM'
        ];

        $data['akun'] = $this->M_user->tampilkan_detail();

        $where = array('id_filevim' => $id);
        $data['data'] = $this->M_vim->edit_filevim($where, 'file_vim')->result();
        $data['user'] = $this->db->get_where('akun_user', ['jabatan' => $this->session->userdata('jabatan')])->row_array();

        $this->load->view('base/header', $data);
        $this->load->view('vim/edit_file_vim', $data);
        $this->load->view('base/footer');
    }

    public function updated()
    {
        $id     = $this->input->post('id');

        $data = array(

            'line'      => $this->input->post('line'),
            'model'       => $this->input->post('model'),
            'file'      => $this->input->post('file'),


        );

        $where = array(
            'id_filevim'        => $id
        );

        $this->M_vim->update_filevim($where, $data, 'file_vim');
        redirect('file_vim');
    }
}
