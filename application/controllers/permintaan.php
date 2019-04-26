<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function index()
	{
		$data['ruangan']	 = $this->db->query('select * from m_ruangan')->result();
		$data['pptk'] 		 = $this->db->query('select * from m_pptk')->result();
		$data['barang'] 	 = $this->db->query('select * from m_barang')->result();
		$data['permintaan'] = $this->db->query('select * from m_barang')->result();
		$this->load->view('permintaan/vPermintaan', $data);
	}
}