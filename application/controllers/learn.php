<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('layanan_model');
    }

	public function index()
	{
		
		$this->load->view('vLearn');
	}

	public function cek()
	{
		// $_POST['email'];
		$email = $this->input->post('email');
		echo '<br/>';
		$password = $this->input->post('password');

		echo $email.'<br/>'.$password;

		$data = array(
			'username' => $email,
			'password' => $password
		);

		$this->db->insert('m_users', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Login! </div>');
		redirect('learn');

	}

	public function autocomplete()
	{
		$this->load->view('test/vAutocomplete');
	}

	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->layanan_model->search_layanan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $result_array[] = array(
                    'label'     => $row->nama_layanan,
                    'nama'   		=> $row->nama_layanan,
                    'tarif'   		=> $row->tarif,
             );
                echo json_encode($result_array);
            }
        }
    }

}
