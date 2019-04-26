<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$this->load->view('report/vReportHarian');
	}

	public function reportHarian()
	{
		$this->load->view('report/vReportHarian');
	}

	public function reportPeriodik()
	{
		if(isset($_GET['submit']))
		{
			$id_ruangan = $this->session->userdata('room');
			$tgl_mulai = $this->input->get('tgl_mulai');
			$tgl_akhir = $this->input->get('tgl_akhir');
			$categori_menu = $this->session->userdata('role_menu');

			$data['record'] = $this->db->query('
				select a.*, b.indikator , a.id_penilaian, sum(c.nilai) as jumlah, c.date, c.ruangan,  d.nama_ruangan
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date between "'.$tgl_mulai.'" and "'.$tgl_akhir.'" and c.ruangan = "'.$id_ruangan.'" 
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="'.$categori_menu.'" group by a.id_penilaian  order by a.id_penilaian asc')->result_array();

			$data['tgl_mulai']        = (isset($_GET['tanggal1']))? $_GET['tanggal1'] : '0';
			$data['tgl_akhir']        = (isset($_GET['tanggal2']))? $_GET['tanggal2'] : '0';
			$this->load->view('report/vReportPeriodik', $data);

		}else
		{
			$data['tgl_mulai']        = (isset($_GET['tanggal1']))? $_GET['tanggal1'] : '0';
			$data['tgl_akhir']        = (isset($_GET['tanggal2']))? $_GET['tanggal2'] : '0';
			$data['record'] = '';
			$this->load->view('report/vReportPeriodik', $data);
		}
		
	}

	public function export_reportPeriodik()
	{
			$id_ruangan = $this->session->userdata('room');
			$tgl_mulai = $this->input->get('tanggal1');
			$tgl_akhir = $this->input->get('tanggal2');
			$categori_menu = $this->session->userdata('role_menu');

			$data['record'] = $this->db->query('
				select a.*, b.indikator , a.id_penilaian, sum(c.nilai) as jumlah, c.date, c.ruangan, d.nama_ruangan
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date between "'.$tgl_mulai.'" and "'.$tgl_akhir.'" and c.ruangan = "'.$id_ruangan.'" 
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="'.$categori_menu.'" group by a.id_penilaian  order by a.id_penilaian asc')->result_array();
			
			header("Content-type=application/vnd.ms-excel");
			header("content-disposition:attachment;filename=laporanPeroidikSilamut.xls");
			$data['tgl_mulai'] = $tgl_mulai;
			$data['tgl_akhir'] = $tgl_akhir;
			$this->load->view('report/vExportReportPeriodik', $data);
	}

	public function reportHarianAdmin()
	{
		if(isset($_GET['submit']))
		{
			$tanggal 	= $this->input->get('tanggal');
			$id_ruangan = $this->input->get('ruangan');

			$data['record'] = $this->db->query('select a.*, b.indikator , a.id_penilaian, c.nilai, 		c.date, c.ruangan, d.nama_ruangan
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date = "'.$tanggal.'" and c.ruangan = "'.$id_ruangan.'"
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="RANAP" order by a.id_penilaian asc	')->result_array();
			$data['ruangan'] = $this->db->query('select * from m_ruangan where id ="'.$id_ruangan.'"')->row_array();
			$data['listruangan'] = $this->db->query('select * from m_ruangan where id != 0')->result();
			$this->load->view('report/vReportHarianAdmin', $data);
		}
		else
		{

			$data['record'] = "";
			$data['ruangan'] = "";
			$data['listruangan'] = $this->db->query('select * from m_ruangan where id != 0')->result();
			$this->load->view('report/vReportHarianAdmin', $data);
		}
	}

	public function reportByRole()
	{
		if(isset($_GET['submit']))
		{
			$tgl_mulai = $this->input->get('tgl_mulai');
			$tgl_akhir = $this->input->get('tgl_akhir');
			$role_menu = $this->input->get('role_menu');

			$data['record'] = $this->db->query('
				select a.*, b.indikator , a.id_penilaian, sum(c.nilai) as jumlah, c.date, c.ruangan, d.nama_ruangan
		       from m_indikator_penilaian as a
		       inner join m_indikator as b on a.id_indikator = b.id
		       left join modul_penilaian as c on a.id_penilaian = c.indikator_id 
		       and c.date between "'.$tgl_mulai.'" and "'.$tgl_akhir.'" 
		       left join m_ruangan as d on c.ruangan = d.id
		       where b.role="'.$role_menu.'" group by a.id_penilaian  order by a.id_penilaian asc')->result_array();
			$data['role_menu'] = $this->db->query('select * from m_role')->result_array();
			$this->load->view('report/vReportByRole', $data);
		}else
		{
			$data['record'] = '';
			$data['role_menu'] = $this->db->query('select * from m_role')->result_array();
			$this->load->view('report/vReportByRole', $data);
		}
	}

}
