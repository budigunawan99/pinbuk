<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKegiatan extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
	}

	public function index()
	{
		$this->load->view('home/DaftarKegiatan');
	}


}