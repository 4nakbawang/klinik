<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['jml_pasien'] = $this->db->query('select count(id) as jml_pasien from m_pasien')->row_array();
		$data['kunjungan'] = $this->db->query('select count(id) as jml_kunjungan from kunjungan where tanggal ="'.date('Y-m-d').'"')->row_array();
		
		$this->load->view('dashboard/vDashboardAdmin', $data);
	}

	public function user()
	{
		
		$this->load->view('dashboard/vDashboarduser');
	}
}
