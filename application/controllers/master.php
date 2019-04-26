<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$this->load->view('permission/vLogin');
	}

	public function ruangan()
	{
		$data['record'] = $this->db->query('select * from m_ruangan')->result_array();
		$this->load->view('ruangan/vRuangan', $data);
	}

	public function addRuangan()
	{
		$ruangan 	= $this->input->post('ruangan');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama_ruangan'  => $ruangan,
			'keterangan' 	=> $keterangan,
			'status' 		=> "ACTIVE"
			);

		$this->db->insert('m_ruangan', $data);
		redirect('master/ruangan'); 
	}

	public function pasien()
	{
		$cek_rm = $this->db->query('select max(no_rm) as no FROM m_pasien order by no_rm')->row();
		$data['new_number'] = intval($cek_rm->no) + 1; 
		$data['kecamatan'] = $this->db->query('select * from m_kecamatan')->result_array(); 
		$data['pasien'] = $this->db->query('select * from m_pasien order by no_rm desc')->result_array(); 

		$this->load->view('pasien/vPasien', $data);
	}

	public function addPasien()
	{
		$nomor_bpjs 	= $this->input->post('nomor_bpjs');
		$nokk 			= $this->input->post('nokk');
		$nik 			= $this->input->post('nik');
		$no_rm_fix		= $this->input->post('no_rm_fix');
		$tglLahir 		= $this->input->post('tglLahir');
		$agama	 		= $this->input->post('agama');
		$nama 			= $this->input->post('nama');
		$alamat 		= $this->input->post('alamat');
		$gender 		= $this->input->post('gender');
		$kec 			= $this->input->post('kec');
		$kab 			= $this->input->post('kab');
		$prov		    = $this->input->post('prov');
		$telpon1		= $this->input->post('telpon1');
		$telpon2		= $this->input->post('telpon2');
		$email			= $this->input->post('email');

		//cek duplikasi no rekam medik
		//$cek = $this->db->query('select no_rm from m_pasien where no_rm = "'.$no_rm_fix.'"')->row_array();
		
		$cek = $this->db->query('select no_rm from m_pasien where no_rm = "'.$no_rm_fix.'"')->result_array();
		$hsl = intval($cek);

		if($hsl == "")
		{
			$data = array(
			'no_rm' 		    => $no_rm_fix,
			'nama_pasien' 		=> $nama,
			'alamat'			=> $alamat,
			'gender'			=> $gender,
			'tgl_lahir'			=> $tglLahir,
			'no_bpjs'			=> $nomor_bpjs,
			'no_kk'				=> $nokk,
			'nik'				=> $nik,
			'agama'				=> $agama,
			'telpon1'			=> $telpon1,
			'telpon2'			=> $telpon2,
			'email'				=> $email,
			'status'			=> "ACTIVE"
			);

		$this->db->insert('m_pasien', $data);
		redirect('pendaftaran');
			
		}else
		{
			echo "<script>alert('no RM sudah dipakai!! gunakan nomor lain..');history.go(-1);</script>";
		}
		
		
	}

	public function laporandatapasien()
	{
		$this->load->view('pasien/vlaporandatapasien');
	}

	public function users()
	{
		$data['record'] = $this->db->query('select a.*, b.nama_ruangan as nr from m_users as a left join m_ruangan as b on a.room = b.id')->result_array();
		$data['ruangan'] = $this->db->query('select * from m_ruangan')->result_array();
		$data['role'] = $this->db->query('select * from m_role')->result_array();
		$this->load->view('user/vUser', $data);
	}

	public function addUser()
	{
		$name	 	= $this->input->post('name');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$role		= $this->input->post('role_menu');
		$ruangan	= $this->input->post('ruangan');

		$data = array(
			'name' 		=> $name,
			'username' 	=> $username,
			'password' 	=> $password,
			'role_menu'	=> $role,
			'room'		=> $ruangan,
			'status' 	=> "ACTIVE"
			);

		$this->db->insert('m_users', $data);
		redirect('master/users');
	}

	public function indikator()
	{
		$data['record'] = $this->db->query('select a.*, b.indikator 
							from m_indikator_penilaian as a
							inner join m_indikator as b 
							on a.id_indikator = b.id')->result_array();
		$this->load->view('indikator/vIndikator', $data);
	}

	public function role()
	{
		$data['record'] = $this->db->query('select * from m_role')->result_array();
		$this->load->view('role/vRole', $data);
	}

	public function addRole()
	{
		$name_role	 	= $this->input->post('role_name');		

		$data = array(
			'role_name' => $name_role
			
			);

		$this->db->insert('m_role', $data);
		redirect('master/role');
	}

	public function categoriMenu()
	{
		if (isset($_GET['submit']))
		{
			$role_menu = $this->input->get('role_menu');
			$data['menu'] = $this->db->query('select * from m_role')->result_array();
			$data['record'] = $this->db->query('select b.id, b.indikator, a.*
				from m_indikator_penilaian as a 
				inner join m_indikator as b on a.id_indikator = b.id
				where b.role = "'.$role_menu.'" ')->result_array();
			$this->load->view('kategoriMenu/vCategoriMenu', $data);
		}
		else
		{
			$data['menu'] = $this->db->query('select * from m_role')->result_array();

			$data['record'] = '';
			$this->load->view('kategoriMenu/vCategoriMenu', $data);
		}
	}


	public function pejabat()
	{
		$data['record']= $this->db->query('select * from m_pejabat where status="ACTIVE"  order by id desc')->result_array();
		
		$this->load->view('pejabat/vPejabat', $data);
	}

	public function addPejabat()
	{
		$pejabat = $this->input->post('pejabat');
		$jenis_jabatan = $this->input->post('jenis_jabatan');
		$status = $this->input->post('status');
		$data = array(
			'nama_pejabat' => $pejabat,
			'jenis_jabatan'=> $jenis_jabatan,
			'status'=> $status
		);
		$this->db->insert('m_pejabat', $data);
		redirect('master/pejabat');
	}

	public function updatePejabat()
	{
		if(isset($_POST['submit']))
		{
			$id = $this->uri->segment(3);
			$data = array(
					        'status' => "NON ACTIVE"				        
						);

			$this->db->where('id', $id);
			$this->db->update('m_pejabat', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-warning">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button></button><b>data telah dihapus <i class="glyphicon glyphicon-ok"></i> </b></div>');
			redirect('master/pejabat');
		}else
		{
			$uri = $this->uri->segment(3);
			$data['records'] =$this->db->query('select * from m_pejabat where id = "'.$uri.'"')->row_array();

			$this->load->view('pejabat/vUpdatePejabat', $data);
		}
		
	}

	public function deletePejabat()
	{
		$id = $this->uri->segment(3);
		$data = array(
				        'status' => "NON ACTIVE"				        
					);

		$this->db->where('id', $id);
		$this->db->update('m_pejabat', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data telah dihapus <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/pejabat');
	}

	public function barang()
	{
		
		$data['record'] = $this->db->query('select * from m_barang')->result_array();
		$this->load->view('barang/vBarang', $data);
	}

	public function cari_barang()
	{
		 $hasil=$this->db->query("SELECT * FROM m_barang");
         return $data = $hasil->result();
         echo json_encode($data);
	}

	public function addBarang()
	{
		$merk		 	 = $this->input->post('merk');
		$nama_barang 	 = $this->input->post('nama_barang');
		$satuan_besar	 = $this->input->post('satuan_besar');
		$satuan_kecil 	 = $this->input->post('satuan_kecil');
		$harga_beli 	 = $this->input->post('harga_beli');
		$margin		 	 = $this->input->post('margin');
		$harga_jual 	 = $this->input->post('harga_jual');
		$generik_status	 = $this->input->post('generik_status');
		$stok			 = $this->input->post('stok');

		$data = array(
				'merk' 		=> $merk,
				'nama_barang' 		=> $nama_barang,
				'satuan_besar'		=> $satuan_besar,
				'satuan_kecil'		=> $satuan_kecil,
				'harga_beli'		=> $harga_beli,
				'margin'			=> $margin,
				'harga_jual'		=> $harga_jual,
				'generik_status'	=> $generik_status,
				'stok'				=> $stok,
				'status'			=> "ACTIVE"
		);	

		$this->db->insert('m_barang', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data baru telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/barang');
	}


	public function pptk()
	{
		$data['record'] = $this->db->query('select * from m_pptk')->result_array();	
		$this->load->view('pptk/vPptk', $data);
	}

	public function addPptk()
	{
		$nama_pptk	= $this->input->post('nama_pptk');

		$data = array(
				'nama_pptk' => $nama_pptk,
				'status'	=> "ACTIVE"
				);
		$this->db->insert('m_pptk', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/pptk');
	}


	public function kegiatan()
	{
		$data['record'] = $this->db->query('select * from m_kegiatan')->result_array();	
		$this->load->view('kegiatan/vKegiatan', $data);
	}

	public function addKegiatan()
	{
		$nama_kegiatan		= $this->input->post('nama_kegiatan');
		$satuan 			= $this->input->post('satuan');
		$perkiraan_harga	= $this->input->post('perkiraan_harga');
		$data = array(
				'nama_kegiatan' 	=> $nama_kegiatan,
				'satuan' 			=> $satuan,
				'perkiraan_harga'	=> $perkiraan_harga,
				'status'			=> "OPEN"
		);	

		$this->db->insert('m_kegiatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data baru telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/kegiatan');
	}

	public function dokter()
	{
		$data['record'] = $this->db->query('select * from m_dokter where status = "OPEN"')->result_array();
		$this->load->view('dokter/vDokter', $data);
	}

	public function addDokter()
	{
		$nama_dokter = $this->input->post('nama_dokter');
		$status = $this->input->post('status');

		$data = array(
			'nama_dokter' => $nama_dokter,
			'status' 	  => $status
		);
		$this->db->insert('m_dokter', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data baru telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/dokter');
	}

	public function delDokter()
	{
		$id = $this->uri->segment(3);
		$data = array(
		        'status' => "CLOSE"
				);

		$this->db->where('id', $id);
		$this->db->update('m_dokter', $data);
		redirect('master/dokter');

	}

	public function kategoriBarang()
	{
		$data['record'] = $this->db->query('select * from m_kategoriBarang')->result_array();
		
		$this->load->view('kategoriBarang/vKategoriBarang', $data);
	}

	public function addKategoriBarang()
	{
		$kategoriBarang = $this->input->post('kategori_barang');
		$data = array(
			'kategori_barang' => $kategoriBarang
		);
		$this->db->insert('m_kategoriBarang', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button></button><b>data baru telah disimpan <i class="glyphicon glyphicon-ok"></i> </b></div>');
		redirect('master/kategoriBarang');
	}


	public function layanan()
	{
		$data['record'] = $this->db->query('select * from m_layanan where status = "ACTIVE" order by id desc')->result_array();

		$this->load->view('layanan/vLayanan', $data);
	}

	public function addLayanan()
	{
		$nama_layanan 	= $this->input->post('nama_layanan');
		$jenis 			= $this->input->post('jenis');
		$tarif 			= $this->input->post('tarif');

		$data = array(
			'nama_layanan'  => $nama_layanan,
			'jenis'		 	=> $jenis,
			'tarif'		 	=> $tarif,
			'status' 		=> "ACTIVE"
			);

		$this->db->insert('m_layanan', $data);
		redirect('master/layanan');
	}

	public function delLayanan()
	{
		$id = $this->uri->segment(3);
		$data = array('status'=>"DELETE");

		$this->db->where('id', $id);
		$this->db->update('m_layanan', $data);
		redirect('master/layanan');
	}
	
}
