<?php

class M_user extends CI_Model
{
    public function buat_kode()
    {

        $this->db->select('RIGHT(akun_user.kode,4) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('akun_user');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodeuser = "USR-MYREPORT-" . $kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodeuser;
    }

    public function tampilkan_detail()
    {
        $query = $this->db->get_where('akun_user');

        return $query->row_array();
    }

    public function tampilkan_semua()
    {
        return $this->db->get('akun_user')->result();
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete($id)
    {
        $this->db->where('id_akun', $id);
        $this->db->delete('akun_user');
    }

    public function edit_user($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
