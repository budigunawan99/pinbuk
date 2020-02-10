<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
	}

	public function index()
	{
		$content = array('content' => $this->load->view('home', '', true));
        $this->load->view('v_home', $content);
	}


}
