<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
	}

	public function index()
	{
		$this->load->view('home/landingPage');
	}


}
