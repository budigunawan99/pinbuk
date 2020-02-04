<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}
	
	public function login_aksi()
	{
		$user = $this->input->post('username', true);
		$pass = $this->input->post('password', true);

		//rule validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != FALSE) {
			$where = array(
				'username' => $user,
				'password' => md5($pass)
			);
			
			$cekLogin = $this->m_login->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data = array(
					'username' => $user,
					'login' => "OK"
				);

				$this->session->set_userdata($sess_data);
				redirect(site_url('admin'));

			}else{
			
				redirect(site_url('Admin/Login'));

			}

		}else{
			$this->load->view('v_login');
		
		}

	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('Admin/Login'));
	
	}

	

}
?>
