<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Registered_user extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('M_admin'); //call model
		//cek session username
		if ($this->session->userdata('username_admin') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/admin'));
		}
	}

	public function index()
	{
		$data['list'] = $this->M_admin->getAllUserWorkshop();
		$data['partner'] = $this->M_admin->getPartner();
		$content = array('content' => $this->load->view('registered_user', $data, true));
		$this->load->view('v_admin', $content);
	}

	public function update_status()
	{
		$iddaftar = $this->input->post('iddaftar');
		$newstatus = $this->input->post('statusto');
		$iduser = $this->M_admin->getIdUserByIdDaftar($iddaftar);
		$data_status = array(
			'status' => $newstatus
		);
		$this->M_admin->update_status('daftar_workshop', 'id_daftar', $iddaftar, $data_status);
		if($this->M_admin->getPartnerById($iduser)->num_rows() > 0){
			$this->M_admin->update_status('partner_daftar_workshop', 'id_partner', $iduser, $data_status);
		}
		$msg = "Status user berhasil diganti";
		echo json_encode($msg);
	}

	public function export()
	{
		$list = $this->M_admin->getAcceptedUserWorkshop();
		$listpartner = $this->M_admin->getPartner();
		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', 'ID')
			->setCellValue('B1', 'Nama')
			->setCellValue('C1', 'Email')
			->setCellValue('D1', 'No HP')
			->setCellValue('E1', 'Kelas')
			->setCellValue('F1', 'Alamat')
			->setCellValue('G1', 'Bukti Pembayaran')
			->setCellValue('H1', 'Tanggal Register')
			->setCellValue('I1', 'Jam Register')
			->setCellValue('J1', 'Status')
			->setCellValue('K1', 'Nama Partner')
			->setCellValue('L1', 'Email Partner')
			->setCellValue('M1', 'No HP Partner')
			->setCellValue('N1', 'Alamat Partner');

		$kolom = 2;
		$nomor = 1;

		$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(55);
		$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(50);
		$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(40);
		$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(20);

		foreach ($list as $pengguna) {
			$status = 'Diterima';
			foreach ($listpartner as $partner){
				if ($partner->id_partner == $pengguna->id_user){
					$namapartner = $partner->nama;
					$emailpartner = $partner->email;
					$nohppartner = $partner->no_hp;
					$alamatpartner = $partner->alamat;
				}else{
					$namapartner = '-';
					$emailpartner = '-';
					$nohppartner = '-';
					$alamatpartner = '-';
				}
			}
			$spreadsheet->setActiveSheetIndex(0)
				->setCellValue('A' . $kolom, $pengguna->id_daftar)
				->setCellValue('B' . $kolom, $pengguna->namauser)
				->setCellValue('C' . $kolom, $pengguna->email)
				->setCellValue('D' . $kolom, $pengguna->no_hp)
				->setCellValue('E' . $kolom, $pengguna->namaworkshop)
				->setCellValue('F' . $kolom, $pengguna->alamat)
				->setCellValue('G' . $kolom, $pengguna->bukti_pembayaran)
				->setCellValue('H' . $kolom, $pengguna->tanggal_daftar)
				->setCellValue('I' . $kolom, $pengguna->jam_daftar)
				->setCellValue('J' . $kolom, $status)
				->setCellValue('K' . $kolom, $namapartner)
				->setCellValue('L' . $kolom, $emailpartner)
				->setCellValue('M' . $kolom, $nohppartner)				
				->setCellValue('N' . $kolom, $alamatpartner);

			$kolom++;
			$nomor++;
		}

		$writer = new Xlsx($spreadsheet);
		$filename = "List Peserta Milad Pinbuk";

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
