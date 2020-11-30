<?php

class M_report extends CI_Model
{

    public function tampilkan_report()
    {
        return $this->db->get('tbl_report')->result();
    }
    
    public function tampil_w($date1, $date2)
    {
        // $query = null;

        if (!empty($date1) && !empty($date2)){
            $query = $this->db->query("SELECT * FROM tbl_report WHERE date BETWEEN '$date1' AND '$date2'");
        } else {   
            $query = $this->db->query("SELECT * FROM tbl_report");
        }

        return $query->result();
    }

    public function simpan_report($report)
    {
        $this->db->insert('tbl_report', $report);
    }

    public function selisih($tstart, $tfinish)
    {
        list($h, $m, $s) = explode(":", $tstart);
        $dtAwal = mktime($h, $m, $s, "1", "1", "1");
        list($h, $m, $s)  = explode(":", $tfinish);
        $dtAkhir = mktime($h, $m, $s, "1", "1", "1");
        $dtSelisih = $dtAkhir - $dtAwal;

        return gmdate("H:i", $dtSelisih);
    }

    public function data_edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_report($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_report($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_data_akses($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete($id)
    {
        $this->db->where('id_report', $id);
        $this->db->delete('tbl_report');
    }

    // // FUNGSI MODEL IMPORT

    public function upload_file($filename)
    {
        $this->load->library('upload'); // Load librari upload

        $config['upload_path'] = './material/myreport/file_data/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size']  = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
    public function insert_multiple($data)
    {
        $this->db->insert_batch('tbl_report', $data);
    }

    public function backup()
    {
        return $this->db->get('tbl_backup')->result();
    }


    public function jumlah_ur()
    {
        $query = $this->db->get_where('tbl_report', array('eqp' => 'UR'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_vim()
    {
        $query = $this->db->get_where('tbl_report', array('eqp' => 'VIM'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_melva()
    {
        $query = $this->db->get_where('tbl_report', array('eqp' => 'MELVA'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_trouble()
    {
        $query = $this->db->get_where('tbl_report', array('type' => 'TROUBLE'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_improve()
    {
        $query = $this->db->get_where('tbl_report', array('type' => 'IMPROVE'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_maintenance()
    {
        $query = $this->db->get_where('tbl_report', array('type' => 'MAINTENANCE'));

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_report()
    {
        $query = $this->db->get('tbl_report');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function jumlah_user()
    {
        $query = $this->db->get('akun_user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
