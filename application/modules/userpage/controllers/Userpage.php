<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userpage extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('M_userpage'); //call model
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
			$id = $this->session->userdata('id');
			$data['av_activity'] = $this->M_userpage->check_db_a("daftar_workshop", "id_user", $id);
			$data['activity'] = $this->M_userpage->getUserWorkshop($id);
			$content = array('content' => $this->load->view('aktivitas', $data, true));
			$this->load->view('v_userpage', $content);
		}
	}

	public function aktivitas()
	{
		$id = $this->session->userdata('id');
		$data['av_activity'] = $this->M_userpage->check_db_a("daftar_workshop", "id_user", $id);
		$data['activity'] = $this->M_userpage->getUserWorkshop($id);
		$content = $this->load->view('aktivitas', $data, true);
		$this->output->set_output($content);
	}

	public function modul()
	{
		$content = $this->load->view('v_modul', '', true);
		$this->output->set_output($content);
	}

	public function daftarworkshop()
	{
		$data['namaworkshop'] = $this->M_userpage->get_workshop();
		$content = $this->load->view('daftarworkshop', $data, true);
		$this->output->set_output($content);
	}

	public function download($filename = NULL)
	{
		$data = file_get_contents(base_url('/modul/' . $filename));
		force_download($filename, $data);
	}

	public function input()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$jenis_workshop = $this->input->post('jenis_workshop');
		$id_user = $this->M_userpage->getIdByEmail($email);
		if ($this->M_userpage->check_db("daftar_workshop", "id_user", $id_user, "id_workshop", $jenis_workshop) == true) {
			$msg = "Duplikat email untuk program yang sama";
		} else {
			$config['upload_path'] = './uploads/payment';
			$config['allowed_types'] = 'pdf|jpeg|jpg|png';
			$config['encrypt_name'] = TRUE;
			$config['max_size'] = 1000;

			for ($i = 0; $i < 1; $i++) {
				$_FILES['doc']['name'] = $_FILES['dokumen' . $i]['name'];
				$_FILES['doc']['type'] = $_FILES['dokumen' . $i]['type'];
				$_FILES['doc']['tmp_name'] = $_FILES['dokumen' . $i]['tmp_name'];
				$_FILES['doc']['error'] = $_FILES['dokumen' . $i]['error'];
				$_FILES['doc']['size'] = $_FILES['dokumen' . $i]['size'];

				$this->load->library('upload', $config);
				if (!($this->upload->do_upload("doc"))) {
					$error = array('error' => $this->upload->display_errors());
					$msg = $error;
				} else {
					$data_regis = array(
						'id_user' => $id_user,
						'id_workshop' => $jenis_workshop,
						'alamat' => $alamat,
						'bukti_pembayaran' => $this->upload->data('file_name')
					);
					$status = $this->M_userpage->insert_data('daftar_workshop', $data_regis);
					if ($status !== "failed") {
						$msg = "Data berhasil dimasukkan";
					}
				}
			}
		}
		echo json_encode($msg);
	}
}
