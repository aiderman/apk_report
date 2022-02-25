<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_regist extends CI_Controller
{
	public function index()
	{
		$this->load->view("wizard");
	}
	public function wizard()
	{
		$this->load->view("wizard");
	}

	public function cek_data()
	{

		$data['nama'] = $this->input->post('nama_lengkap');
		$data['ttl'] = $this->input->post('tanggal_lahir');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['kel'] = $this->input->post('kelurahan');
		$data['desa'] = $this->input->post('desa');
		$data['email'] = $this->input->post('email');
		$data['pass'] = $this->input->post('password1');
		$data['foto'] = $this->input->post('foto');
		$data['long'] = $this->input->post('long');
		$data['lat'] = $this->input->post('lat');
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}
