<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('layanan_model');
        $this->load->model('barang_model');
    }

	public function index()
	{
		$id = $this->uri->segment(3);
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN"')->result_array();
		$data['identitas'] = $this->db->query('select * from kunjungan where id ='.$id.' ')->row_array();
		$data['allrincian'] = $this->db->query('select * from kunjungan_detil_layanan where id_kunjungan = '.$id.'')->result_array();
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();
		$data['diagnosa'] =  $this->db->query('select * from kunjungan_diagnosa where id_kunjungan = '.$id.'')->row_array();


		$this->load->view('rincian/vRincian', $data);
	}

	public function headerRincian() 
	{
		$id = $this->uri->segment(3);
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		$data['identitas'] = $this->db->query('select * from kunjungan where id ='.$id.' ')->row_array();
		$data['allrincian'] = $this->db->query('select * from kunjungan_detil_layanan where id_kunjungan = '.$id.'')->result_array();
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();
		$data['tagihan_br'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_barang
												where id_kunjungan = '.$id.'')->row_array();

		$data['diagnosa'] =  $this->db->query('select * from kunjungan_diagnosa where id_kunjungan = '.$id.'')->row_array();
		$data['layanan'] =  $this->db->query('select * from m_layanan')->result_array();
		$data['obat'] =  $this->db->query('select * from m_barang')->result_array();
		$this->load->view('rincian/vRincian', $data);
	}

	public function load_data_layanan()
	{
		$id = $this->uri->segment(3);
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		
		$this->load->view('rincian/load_layanan', $data);
	}

	public function load_total()
	{
		$id = $this->uri->segment(3);
		//$id = 5;
		$data['layanan'] =  $this->db->query('select sum(total) as totala
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();
		$data['barang']=  $this->db->query('select sum(total) as totalb
												from kunjungan_detil_barang
												where id_kunjungan = '.$id.'')->row_array();
		$this->load->view('rincian/total', $data);

	}

	public function load_data_barang()
	{
		$id = $this->uri->segment(3);
		$data['det_barang'] =  $this->db->query('select a.* , b.satuan_besar
								from kunjungan_detil_barang as a
								inner join m_barang as b on a.kode_barang = b.id
								where a.status = "OPEN" and a.id_kunjungan = '.$id.'')->result_array();
		$data['tagihan_barang'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_barang
												where id_kunjungan = '.$id.'')->row_array();
		
		$this->load->view('rincian/load_barang',$data);
	}

	

	public function addDiagnosa()
	{
		$id_kunjungan 	 = $this->input->post('idkunjungan');
		$diagnosa_awal	 = $this->input->post('diagnosa_awal');
		$tindakan		 = $this->input->post('tindakan');
		$diagnosa_akhir	 = $this->input->post('diagnosa_akhir');

		

		$cek = $this->db->query('select * from kunjungan_diagnosa where id_kunjungan = '.$id_kunjungan.' ')->row_array();
		if ($cek > 0)
		{
			$data =array( 
					'diagnosa_awal' => $diagnosa_awal,
					'tindakan' 		=> $tindakan,
					'diagnosa_akhir'=> $diagnosa_akhir
					);
			$this->db->where('id_kunjungan', $id_kunjungan);
			$this->db->update('kunjungan_diagnosa', $data);

			echo "<script>"	;
			echo "alert('data telah disimpan');history.go(-1);";	
			echo "</script>"	;
		}else
		{
			$data =array( 
					'id_kunjungan' 	=> $id_kunjungan,
					'diagnosa_awal' => $diagnosa_awal,
					'tindakan' 		=> $tindakan,
					'diagnosa_akhir'=> $diagnosa_akhir
					);
			$this->db->insert('kunjungan_diagnosa', $data);	
			echo "<script>"	;
			echo "alert('data telah disimpan'); history.go(-1);";	
			echo "</script>"	;
		}
		
		
	}


	public function rincian_pdf()
	{
		ob_start();
		$id = $this->uri->segment(3);
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		$data['identitas'] = $this->db->query('select a.* , b.nama_dokter
												from kunjungan as a
												inner join m_dokter as b on a.dokter = b.id
												 where a.id ='.$id.' ')->row_array();	
		$data['allrincian'] = $this->db->query('select * from kunjungan_detil_layanan where id_kunjungan = '.$id.'')->result_array();
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();

		$this->load->view('rincian/vTes', $data);
		
		$html = ob_get_contents();
        ob_end_clean();
		require_once('./assets/html2pdf/html2pdf.class.php');
	   $pdf = new HTML2PDF('P','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Rincian-'.$id.'.pdf', 'D');
    	
	}

	public function rincian_ku()
	{
		$id = $this->uri->segment(3);
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		$data['identitas'] = $this->db->query('select * from kunjungan where id ='.$id.' ')->row_array();
		$data['allrincian'] = $this->db->query('select * from kunjungan_detil_layanan where id_kunjungan = '.$id.'')->result_array();
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();

		$this->load->view('rincian/vPreview', $data);
		
		
	}

	public function tes_rincian()
	{
		$id = $this->uri->segment(3);
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		$data['identitas'] = $this->db->query('select a.* , b.nama_dokter
												from kunjungan as a
												inner join m_dokter as b on a.dokter = b.id
												 where a.id ='.$id.' ')->row_array();
		$data['allrincian'] = $this->db->query('select * from kunjungan_detil_layanan where id_kunjungan = '.$id.'')->result_array();
		$data['tagihan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();

		$this->load->view('rincian/vTes', $data);
		
		
	}

	public function ajax()
	{
		$this->load->view('rincian/vtes');

	}

	

	public function searchlayanan()
	{
	if (isset($_GET['term'])) {
	            $result = $this->layanan_model->search_layanan($_GET['term']);
	            if (count($result) > 0) {
	            foreach ($result as $row)
	                $result_array[] = array(
	                    'label'         => $row->nama_layanan,
	                    'id'         	=> $row->id,
	                    'nama'   		=> $row->nama_layanan,
	                    'tarif'   		=> $row->tarif,
	             );
	                echo json_encode($result_array);
	            }
	        }
	}

	public function searchBarang()
	{
	if (isset($_GET['term'])) {
	            $result = $this->barang_model->search_barang($_GET['term']);
	            if (count($result) > 0) {
	            foreach ($result as $row)
	                $result_array[] = array(
	                    'label'         => $row->nama_barang,
	                    'id'         	=> $row->id,
	                    'nama'   		=> $row->nama_barang,
	                    'harga'   		=> $row->harga_jual,
	             );
	                echo json_encode($result_array);
	            }
	        }
	}


	public function save_layanan()
	{
		$id_kunjungan 	= $this->input->post('id_kunjungan');
		$id_layanan 	= $this->input->post('id_layanan');
		$nama_layanan 	= $this->input->post('nama_layanan');
		$qty	 		= $this->input->post('qty');
		$harga 	 		= $this->input->post('harga_layanan');
		$total 	 		= $this->input->post('total');

		$data =array(
				'id_kunjungan' => $id_kunjungan,
				'kode_layanan' => $id_layanan,
				'nama_layanan' => $nama_layanan,
				'qty' 		   => $qty,
				'harga'		   => $harga,
				'total'		   => $total,
				'status'	   => "OPEN"
				);
		$result = $this->db->insert('kunjungan_detil_layanan', $data);

		echo $result;
	}


	public function delete_layanan()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$result = $this->db->delete('kunjungan_detil_layanan');
		echo $result;
	}

	public function delete_barang()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$result = $this->db->delete('kunjungan_detil_barang');
		echo $result;
	}

	public function save_barang()
	{
		$id_kunjungan 	= $this->input->post('id_kunjungan');
		$id_barang	 	= $this->input->post('id_barang');
		$nama_barang 	= $this->input->post('nama_barang');
		$qty_barang		= $this->input->post('qty_barang');
		$harga_barang	= $this->input->post('harga_barang');
		$total_barang	= $this->input->post('total_barang');

		$data =array(
				'id_kunjungan'  => $id_kunjungan,
				'kode_barang'	=> $id_barang,
				'nama_barang' 	=> $nama_barang,
				'qty' 		   => $qty_barang,
				'harga'		   => $harga_barang,
				'total'		   => $total_barang,
				'status'	   => "OPEN"
				);
		$result = $this->db->insert('kunjungan_detil_barang', $data);

		echo $result;
	}

	public function print_preview()
	{
		$id = $this->uri->segment(3);
		$data['identitas'] = $this->db->query('select a.* , b.nama_dokter
												from kunjungan as a
												inner join m_dokter as b on a.dokter = b.id
												 where a.id ='.$id.' ')->row_array();
		$data['det_layanan'] =  $this->db->query('select * from kunjungan_detil_layanan where status = "OPEN" and id_kunjungan = '.$id.'')->result_array();
		$data['det_barang'] =  $this->db->query('select a.* , b.satuan_besar
													from kunjungan_detil_barang as a
													inner join m_barang as b on a.kode_barang = b.id
													where a.status = "OPEN" and a.id_kunjungan = '.$id.'')->result_array();
		$data['tagihan_layanan'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_layanan
												where id_kunjungan = '.$id.'')->row_array();
		$data['tagihan_barang'] =  $this->db->query('select sum(total) as total
												from kunjungan_detil_barang
												where id_kunjungan = '.$id.'')->row_array();
		$this->load->view('rincian/vPreview',$data);
	}
}
