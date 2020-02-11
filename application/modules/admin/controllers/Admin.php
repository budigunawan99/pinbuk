<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
	}

	public function index()
	{
		//cek session username
		if ($this->session->userdata('username') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/admin'));
		} else {
			$content = array('content' => $this->load->view('admin', '', true));
			$this->load->view('v_admin', $content);
		}
	}
}
