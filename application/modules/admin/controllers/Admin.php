<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
	}

	public function index()
	{
		$content = array('content' => $this->load->view('admin', '', true));
        $this->load->view('v_admin', $content);
	}


}
