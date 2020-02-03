<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userpage extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
	}

	public function index()
	{
		//cek session username
		if ($this->session->userdata('email') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/logindirect'));
		} else {
			$content = array('content' => $this->load->view('userpage', '', true));
			$this->load->view('v_userpage', $content);
		}
	}

	public function beranda(){
		$content = $this->load->view('userpage', '', true);
		$this->output->set_output($content);
	}

	public function daftarworkshop(){
		$content = $this->load->view('daftarworkshop', '', true);
		$this->output->set_output($content);
	}
}
