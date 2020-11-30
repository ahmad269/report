<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller
{

	// APP MY REPORT
	// PRESENT TO
	// PT JVC ELECTRONICS INDONESIA

	public function index()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('jabatan') == 1) {
				redirect('dashboard');
			} else if ($this->session->userdata('jabatan') == 2) {
				redirect('dashboard');
			}
		}

		$data['jdl'] = 'Portal Login';
		$data['kodeuser'] = $this->M_user->buat_kode();

		$this->load->view('portal', $data);
	}

	public function daftar()
	{
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$email  = $this->input->post('email');
		$password = $this->input->post('pass1');


		$data = [
			'kode'      => $kode,
			'foto_profil'   => 'default.jpg',
			'nama'      => htmlspecialchars($nama, true),
			'username'  => htmlspecialchars($username, true),
			'email'     => htmlspecialchars($email, true),
			'password'  => password_hash($password, PASSWORD_DEFAULT),
			'jabatan'   => 2,
			'aktif'    => 1,
			'tgl_daftar' => time()
		];

		$this->db->insert('akun_user', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil ditambahkan. Silahkan Login!</div>');
		redirect('portal');
	}

	public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$akun = $this->db->get_where('akun_user', ['username' => $username])->row_array();

		if ($akun) {
			// jika usernya aktif
			if ($akun['aktif'] == 1) {
				// cek password
				if (password_verify($password, $akun['password'])) {
					$data = [
						'status'	=> $akun['kode'],
						'jabatan' => $akun['jabatan'],
					];
					$this->session->set_userdata($data);
					switch ($akun['jabatan']) {
						case 1:
							redirect('dashboard');
							break;
						case 2:
							redirect('dashboard');
							break;

						default:
							break;
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah !	</div>');
					redirect('portal');
				}
			} else {
				// Jika Email Belum Active
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username salah !	</div>');
				redirect('portal');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username salah !	</div>');
			redirect('portal');
		}
	}


	public function logout()
	{

		$this->session->unset_userdata('status');
		$this->session->unset_userdata('jabatan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah berhasil logout!</div>');

		redirect('portal');
	}

	public function block()
	{

		if (!$this->session->userdata('status')) {
			redirect('portal');
		} else {
			$this->load->view('block');
		}
	}
}
