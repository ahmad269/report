<?php

class M_ur extends CI_Model
{

    // FUNGSI COUNT
    public function jumlah_ur()
    {
        $query = $this->db->get_where('tbl_ur');

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // FUNGSI APP
    public function tampilkan_ur()
    {
        return $this->db->get('tbl_ur');
    }

    public function tambah_data($data)
    {
        $this->db->insert('tbl_ur', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete($id)
    {
        $this->db->where('id_ur', $id);
        $this->db->delete('tbl_ur');
    }

    // FILE UR
    public function tampilkan_file_ur()
    {
        return $this->db->get('file_ur')->result();
    }

    public function tambah_file_ur($data)
    {
        $this->db->insert('file_ur', $data);
    }

    public function hapus_file_ur($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function delete_fileur($id)
    {
        $this->db->where('id_fileur', $id);
        $this->db->delete('file_ur');
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
        $this->db->insert_batch('file_ur', $data);
    }

    public function edit_ur($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_ur($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function edit_fileur($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_fileur($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
