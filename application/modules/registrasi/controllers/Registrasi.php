<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_registrasi');
    }

    public function index()
    {
		$this->load->view('registrasi');
    }
}
