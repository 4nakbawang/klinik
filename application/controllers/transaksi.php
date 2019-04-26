<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->load->view('transaksi/vPenjualanApotik');
	}

	public function penyesuaian_stok()
	{
		if (isset($_POST['submit']))
		{
			$tanggal = $this->input->post('tanggal');
			$petugas = $this->input->post('petugas');
			$alasan  = $this->input->post('alasan');
		}else
		{
			$this->load->view('transaksi/vPenyesuaianstok');	
		}
	}

	public function load_data_penyesuaian()
	{
		$data['penyesuaian'] = $this->db->query('select * from g_penyesuaian_stok')->result_array();
		$this->load->view('transaksi/vloadpenyesuaianstok', $data);
	}

	public function load_penyesuaian_barang_temp()
	{

		$this->load->view('transaksi/vloadpenyesuaianbarangtemp');
	}


}