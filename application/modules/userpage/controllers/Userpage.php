<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userpage extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('M_userpage'); //call model
		//cek session username
		if ($this->session->userdata('email_user') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/logindirect'));
		}
	}

	public function index()
	{
		$id = $this->session->userdata('id_user');
		$data['registered'] = $this->M_userpage->check_db("daftar_workshop", "id_user", $id, "status", "0,1");
		$data['namaworkshop'] = $this->M_userpage->get_workshop();
		$content = array('content' => $this->load->view('daftarworkshop', $data, true));
		$this->load->view('v_userpage', $content);
	}

	public function aktivitas()
	{
		$id = $this->session->userdata('id_user');
		$data['av_activity'] = $this->M_userpage->check_db_a("daftar_workshop", "id_user", $id);
		$data['activity'] = $this->M_userpage->getUserWorkshop($id);
		$data['partner'] = $this->M_userpage->get_partner($id);
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
		$id = $this->session->userdata('id_user');
		$data['registered'] = $this->M_userpage->check_db("daftar_workshop", "id_user", $id, "status", "0,1");
		$data['namaworkshop'] = $this->M_userpage->get_workshop();
		$content = $this->load->view('daftarworkshop', $data, true);
		$this->output->set_output($content);
	}

	public function download($filename = NULL)
	{
		$data = file_get_contents(base_url('/modul/' . $filename));
		force_download($filename, $data);
	}

	
	public function check_price()
	{
		$length = $this->input->post('jmlpeserta');

		$earlybird = number_format(1700000)." (Anda termasuk dalam 50 pendaftar pertama)";
		$normal = number_format(2000000);
		$couplepromo = number_format(3000000)." (Anda termasuk dalam 25 pasangan pertama)";
		$coupleprice = number_format(4000000);

		if ($length > 1) {
			$couple = $this->M_userpage->get_registered_couple()->num_rows();
			if ($couple <= 25) {
				$harga = $couplepromo;
			} else {
				$harga = $coupleprice;
			}
		} else {

			$participants = $this->M_userpage->get_registered()->num_rows();
			if ($participants <= 50) {
				$harga = $earlybird;
			} else {
				$harga = $normal;
			}
		}
		echo json_encode($harga);
	}

	public function input()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$jenis_workshop = $this->input->post('jenis_workshop');
		$id_user = $this->M_userpage->getIdByEmail($email[0]);

		$length = sizeof($nama);
		$data_regis = array();

		$earlybird = number_format(1700000);
		$normal = number_format(2000000);
		$couplepromo = number_format(3000000);
		$coupleprice = number_format(4000000);

		if ($length > 1) {
			$couple = $this->M_userpage->get_registered_couple()->num_rows();
			if ($couple <= 25) {
				$harga = $couplepromo;
			} else {
				$harga = $coupleprice;
			}
		} else {

			$participants = $this->M_userpage->get_registered()->num_rows();
			if ($participants <= 50) {
				$harga = $earlybird;
			} else {
				$harga = $normal;
			}
		}
		// if ($this->M_userpage->check_db("daftar_workshop", "id_user", $id_user, "status", "0,1") == true) {
		// 	$msg = "Anda hanya dapat mengikuti satu workshop saja";
		// } else {
		$config['upload_path'] = './uploads/payment';
		$config['allowed_types'] = 'pdf|jpeg|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size'] = 1000;

		$this->load->library('upload', $config);
		if (!($this->upload->do_upload("dokumen0"))) {
			$error = array('error' => $this->upload->display_errors());
			$msg = $error;
		} else {
			for ($i = 0; $i < $length; $i++) {
				if ($i == 1) {
					$data_regis[$i] = array(
						'id_partner' => $id_user,
						'nama' => $nama[$i],
						'email' => $email[$i],
						'alamat' => $alamat[$i],
						'no_hp' => $no_hp[$i]
					);
					break;
				}
				$data_regis[$i] = array(
					'id_user' => $id_user,
					'id_workshop' => $jenis_workshop,
					'alamat' => $alamat[$i],
					'no_hp' => $no_hp[$i],
					'harga' => $harga,
					'bukti_pembayaran' => $this->upload->data('file_name')
				);
			}

			$status = array();

			for ($i = 0; $i < $length; $i++) {
				if ($i == 1) {
					$status[$i] = $this->M_userpage->insert_data('partner_daftar_workshop', $data_regis[$i]);
					break;
				}
				$status[$i] = $this->M_userpage->insert_data('daftar_workshop', $data_regis[$i]);
			}

			if ($length > 1) {
				if ($status[0] !== "failed" && $status[1] !== "failed") {
					$msg = "Data berhasil dimasukkan";
				}
			} else {
				if ($status[0] !== "failed") {
					$msg = "Data berhasil dimasukkan";
				}
			}
		}
		// }
		echo json_encode($msg);
	}
}
