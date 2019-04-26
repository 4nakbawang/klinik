<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compilation extends CI_Controller {

	public function index()
	{
		if(isset($_GET['submit']))
		{
			$tanggal= $this->input->get('tanggal');
			$id_ruangan= $this->input->get('ruangan');
					

			$data['record'] = $this->db->query('select a.*, b.indikator , a.id_penilaian, c.nilai, 		c.date, c.ruangan, d.nama_ruangan
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date = "'.$tanggal.'" and c.ruangan = "'.$id_ruangan.'"
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="RANAP" order by a.id_penilaian asc	')->result_array();

			$data['room'] = $this->db->query('select nama_ruangan  from m_ruangan where id ="'.$id_ruangan.'"')->row_array();
			$data['ruangan'] = $this->db->query('select * from m_ruangan where id != 0')->result_array();
			$this->load->view('compilation/vCompilation', $data);
		}
		else
		{
			$date =date('Y-m-d');
			$id_ruangan= "1";
			/*
			$data['record'] = $this->db->query('select a.*, b.indikator , a.id_penilaian, c.nilai, 		c.date, c.ruangan , d.nama_ruangan	
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date = "'.$date.'" and c.ruangan = "'.$id_ruangan.'"
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="RANAP" order by a.id_penilaian asc ')->result_array();
			*/
			$data['room'] = 0;
			$data['record'] = 0;
			$data['ruangan'] = $this->db->query('select * from m_ruangan where id != 0')->result_array();
			$this->load->view('compilation/vCompilation', $data);
		}
		
	}

	public function updateRecord()
	{
		
		$indikator_id	= $this->input->post('id');
		$id_ruangan 	= $this->input->post('id_ruangan');
		$tanggal		= $this->input->post('tanggal');
		$nilaiku 		= $this->input->post('nilaiku');

		$data = array(
			'indikator_id' 	=> $indikator_id,
			'ruangan' 		=> $id_ruangan,
			'date' 			=> $tanggal,
			'nilai' 		=> $nilaiku,
		);

		$cek = $this->db->query('select * from modul_penilaian where date = "'.$tanggal.'" and ruangan = "'.$id_ruangan.'" and indikator_id ="'.$indikator_id.'"')->num_rows();
		if($cek > 0)
		{
			$this->db->query('update modul_penilaian set nilai = "'.$nilaiku.'" where date = "'.$tanggal.'" and ruangan = "'.$id_ruangan.'" and indikator_id ="'.$indikator_id.'"');
		}else
		{
			$this->db->insert('modul_penilaian', $data);
						
		}
	}


	public function compRuangan()
	{
		if(isset($_GET['submit']))
		{

		$tanggal= $this->input->get('tanggal');
		$id_ruangan= $this->session->userdata('room');
		$categori_menu = $this->session->userdata('role_menu');
				

		$data['record'] = $this->db->query('select a.*, b.indikator , a.id_penilaian, c.nilai, 		c.date, c.ruangan, d.nama_ruangan
	       from m_indikator_penilaian as a
	       inner join m_indikator as b on a.id_indikator = b.id
	       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
	       and c.date = "'.$tanggal.'" and c.ruangan = "'.$id_ruangan.'"
	       left join m_ruangan as d on c.ruangan = d.id
	       where b.role="'.$categori_menu.'" order by a.id_penilaian asc	')->result_array();

		$data['ruangan'] = $this->db->query('select * from m_ruangan where id = "'.$id_ruangan.'"')->row_array();
		$this->load->view('compilation/vCompRoom', $data);
		}
		else
		{
		$date =date('Y-m-d');
		$id_ruangan= $this->session->userdata('room');
		$categori_menu= $this->session->userdata('role_menu');
			
		$data['record'] = $this->db->query('select a.*, b.indikator , a.id_penilaian, c.nilai, 		c.date, c.ruangan , d.nama_ruangan	
	       from m_indikator_penilaian as a
	       inner join m_indikator as b on a.id_indikator = b.id
	       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
	       and c.date = "'.$date.'" and c.ruangan = "'.$id_ruangan.'"
	       left join m_ruangan as d on c.ruangan = d.id
	       where b.role="'.$categori_menu.'" order by a.id_penilaian asc ')->result_array();			
		
		$data['ruangan'] = $this->db->query('select * from m_ruangan where id = "'.$id_ruangan.'"')->row_array();
		$this->load->view('compilation/vCompRoom', $data);
		}
		
	}

	
}
