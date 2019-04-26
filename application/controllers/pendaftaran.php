<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('pasien_model');
    }

	public function index() 
	{
		$search = $this->input->get('date');
		if ($search >1){
			$data['record'] = $this->db->query('select a.*, b.nama_dokter nd
											from kunjungan as a
											inner join m_dokter as b on a.dokter = b.id
											where a.status ="ACTIVE" and a.tanggal ="'.$search.'"')->result_array();
		}else
		{
			$data['record'] = $this->db->query('select a.*, b.nama_dokter nd
											from kunjungan as a
											inner join m_dokter as b on a.dokter = b.id
											where a.status ="ACTIVE" and a.tanggal ="'.date('Y-m-d').'"')->result_array();
		}


		
		$data['dokter'] = $this->db->query('select * from m_dokter where status ="OPEN"')->result_array();
		$data['pasien'] = $this->db->query('select * from m_pasien where status ="ACTIVE" order by id desc')->result_array();
		$this->load->view('pendaftaran/vPendaftaran', $data);
	}

	
	public function addPendaftaran()
	{
		$tanggal		 = $this->input->post('tanggal');
		$id_pasien   	 = $this->input->post('id_pasien'); 
		$nama_pasien 	 = $this->input->post('nama_pasien');
		$alamat 	 	 = $this->input->post('alamat');
		$jenis_pasien 	 = $this->input->post('jenis_pasien');
		$dokter 		 = $this->input->post('dokter');

		$data = array(
			'tanggal' 		=> $tanggal,
			'id_pasien' 	=> $id_pasien,
			'nama_pasien' 	=> $nama_pasien,
			'alamat' 		=> $alamat,
			'jenis_pasien'	=> $jenis_pasien,
			'dokter' 		=> $dokter,
			'status' 		=> "ACTIVE"
			);
		$this->db->insert('kunjungan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>pasien telah di daftarkan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('pendaftaran');
	}

	public function batalrawat()
	{
		$id = $this->uri->segment(3);
		$data = array(
		        'status' => "CANCEL"
				);

		$this->db->where('id', $id);
		$this->db->update('kunjungan', $data);
		redirect('pendaftaran');
	}

	public function searchpasien()
	{
	if (isset($_GET['term'])) {
            $result = $this->pasien_model->search_pasien($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                	'label' => $row->no_rm,
                	'id_pasien' => $row->no_rm,
                	'nama_pasien' => $row->nama_pasien,
                	'alamat' => $row->alamat,
                );
                echo json_encode($arr_result); 
            }
        }
	}

	public function laporan_kunjungan()
	{
		if (isset($_GET['submit']))
		{
			$tglmulai = $this->input->get('tglmulai');
			$tglakhir = $this->input->get('tglakhir');
			$data['record'] = $this->db->query('
							select a.*,
								(select sum(b.total) from kunjungan_detil_layanan as b where a.id =b.id_kunjungan) as layanan,
								(select sum(c.total) from kunjungan_detil_barang as c where a.id = c.id_kunjungan) as barang
							from kunjungan as a
							where a.tanggal between "'.$tglmulai.'" and "'.$tglakhir.'" and a.status != "CANCEL"
							group by a.id
							')->result_array();
						
			$this->load->view('pendaftaran/vlaporan_kunjungan', $data);
			
		}
			else
		{
			$now = date('Y-m-d');
			$data['record'] = $this->db->query('
				select a.*,
					(select sum(b.total) from kunjungan_detil_layanan as b where a.id =b.id_kunjungan) as layanan,
					(select sum(c.total) from kunjungan_detil_barang as c where a.id = c.id_kunjungan) as barang
				from kunjungan as a
				where a.tanggal between "'.$now.'" and "'.$now.'" and a.status != "CANCEL"
				group by a.id
				')->result_array();
			
			$this->load->view('pendaftaran/vlaporan_kunjungan', $data);

		}
		
	}
}