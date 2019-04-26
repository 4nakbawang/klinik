<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		
		$data['barang'] = $this->db->query('select * from m_barang')->result_array();
		$this->load->view('test/vTest', $data);
	}
	public function testDT()
	{
		$data['br'] = $this->db->query('select * from m_barang')->result_array();
		$this->load->view('test/vDatatable', $data);
	}

	public function search()
	{
		$search = $this->input->post('search');
		$r = $this->db->query('select * from m_barang where  nama_barang like "%'.$search.'%"')->result_array();
		print_r($r);
	}
}
