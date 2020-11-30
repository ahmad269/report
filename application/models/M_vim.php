<?php

class M_vim extends CI_Model
{

    // FUNGSI TOTAL
    public function jumlah_vim()
    {
        $query = $this->db->get_where('tbl_vim');

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // FUNGSI APP
    public function tampilkan_vim()
    {
        return $this->db->get('tbl_vim');
    }

    public function tambah_data($data)
    {
        $this->db->insert('tbl_vim', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete($id)
    {
        $this->db->where('id_vim', $id);
        $this->db->delete('tbl_vim');
    }

    // FILE VIM
    public function tampilkan_file_vim()
    {
        return $this->db->get('file_vim')->result();
    }

    public function tambah_file_vim($data)
    {
        $this->db->insert('file_vim', $data);
    }

    public function hapus_file_vim($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function delete_filevim($id)
    {
        $this->db->where('id_filevim', $id);
        $this->db->delete('file_vim');
    }

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
        $this->db->insert_batch('file_vim', $data);
    }

    public function edit_vim($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_vim($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function edit_filevim($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_filevim($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
