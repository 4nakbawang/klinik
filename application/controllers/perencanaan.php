<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perencanaan extends CI_Controller {

	public function index()
	{
		$data['record'] = $this->db->query('select a.*, b.nama_pptk, c.nama_ruangan from perencanaan as a 
										inner join m_pptk as b on a.pptk = b.id
										inner join m_ruangan as c on a.ruangan = c.id
										order by id desc')->result_array();

		$data['pptk'] = $this->db->query('select * from m_pptk where status ="ACTIVE"')->result_array();
		$data['ruangan'] = $this->db->query('select * from m_ruangan')->result_array();
		$this->load->view('perencanaan/vPerencanaan', $data);
		//$this->load->view('perencanaan/vdt');
	}
 
	public function perencanaanDet()
	{
		if (isset($_POST['submit']))
		{
			$id_perencanaan = $this->input->post('id_per');
			$id_barang 		= $this->input->post('id_barang');
			$nama_barang	= $this->input->post('nama_barang');
			$spesifikasi	= $this->input->post('spesifikasi');
			$satuan			= $this->input->post('satuan');
			$jumlah			= $this->input->post('jumlah');
			$harga			= $this->input->post('harga');
			$total			= $this->input->post('total');

			echo $harga;
			exit;

			$data = array(
						'id_perencanaan' => $id_perencanaan,
						'id_barang'		 => $id_barang,
						'nama_barang'	 => $nama_barang,
						'spesifikasi'	 => $spesifikasi,
						'satuan'		 => $satuan,
						'jumlah'		 => $jumlah,
						'harga'			 => $harga,
						'total'			 => $total,
						'status'		 => "OPEN"	
						);
			$this->db->insert('perencanaan_det', $data);
			$data['perencanaan'] =  $this->db->query('select a.*, b.nama_pptk, c.nama_ruangan 
										from perencanaan as a 
										inner join m_pptk as b on a.pptk = b.id
										inner join m_ruangan as c on a.ruangan = c.id
										where a.id ="'.$id_perencanaan.'"
										order by id desc')->row_array();
			$data['detil'] = $this->db->query('select * from perencanaan_det where id_perencanaan ="'.$id_perencanaan.'"')->result_array();
			$data['pptk'] = $this->db->query('select * from m_pptk where status ="ACTIVE"')->result_array();
			$data['br'] = $this->db->query('select * from m_barang')->result_array();
			$this->load->view('perencanaan/vPerencanaanDet', $data);
		}
		else
		{
			$id_perencanaan = $this->uri->segment(3);
			$data['perencanaan'] =  $this->db->query('select a.*, b.nama_pptk, c.nama_ruangan 
										from perencanaan as a 
										inner join m_pptk as b on a.pptk = b.id
										inner join m_ruangan as c on a.ruangan = c.id
										where a.id ="'.$id_perencanaan.'"
										order by id desc')->row_array();
			$data['detil'] = $this->db->query('select * from perencanaan_det where id_perencanaan ="'.$id_perencanaan.'"')->result_array();
			$data['pptk'] = $this->db->query('select * from m_pptk where status ="ACTIVE"')->result_array();
			$data['ruangan'] = $this->db->query('select * from m_ruangan')->result_array();
			$data['br'] = $this->db->query('select * from m_barang')->result_array();

			$this->load->view('perencanaan/vPerencanaanDet', $data);
		}		
 	}

 	public function addPerencanaan()
 	{
 		$tahun 		= $this->input->post('tahun');
 		$tanggal 	= $this->input->post('tanggal');
 		$pptk 		= $this->input->post('pptk');
 		$ruangan 	= $this->input->post('ruangan');
 		$keterangan = $this->input->post('keterangan');

 		$data = array(
 					'tahun' 	=> $tahun,
 					'tanggal'	=> $tanggal,
 					'pptk'		=> $pptk,
 					'ruangan'	=> $ruangan,
 					'keterangan'=> $keterangan
 				);
 		$this->db->insert('perencanaan', $data);
 		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data baru telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
 		redirect('perencanaan');
 	}

 	public function listPerencanaan()
 	{
 		$this->load->view('perencanaan/vListPerencanaan');
 	}

}