<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller {

	public function index()
	{
		$this->load->view('permission/vLogin');
	}

	public function login()
	{
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$cek = $this->db->query('select * from m_users where username="'.$username.'" and password = "'.$password.'"')->row_array();
		
		
		if($cek > 1)
		{	

			$mySession = $this->db->query('select a.*, b.nama_ruangan from m_users as a
				inner join m_ruangan as b on a.room=b.id
			 where a.username="'.$username.'" and a.password = "'.$password.'" ')->row_array();
			$this->session->set_userdata($mySession);


			$access = $this->session->userdata('access');
			
			if ($access == 'ADMIN'){
				$this->load->view('dashboard/vDashboardAdmin');
			}
			else
			{
				$this->load->view('dashboard/vDashboardUser');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Username dan Password Tidak Sesuai! </div>');
			redirect('permission');
		}

	}

	public function logout()
	{
		session_destroy();
		redirect('permission');
	}
}
