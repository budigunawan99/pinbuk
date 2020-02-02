<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_account');
    }

    public function index()
    {
        $content = array('content' => $this->load->view('v_register', '', true));
        $this->load->view('v_form', $content);
    }

    public function logindirect()
    {
        $content = array('content' => $this->load->view('v_login', '', true));
        $this->load->view('v_form', $content);
    }

    public function registrasi_view()
    {
        $content = $this->load->view('v_register', '', true);
        $this->output->set_output($content);
    }

    public function login_view()
    {
        $content = $this->load->view('v_login', '', true);
        $this->output->set_output($content);
    }

    public function registrasi()
    {
        //  $this->form_validation->set_rules('name', 'NAME','required');
        $this->form_validation->set_rules('name', 'NAME', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required|min_length[5]');
        $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('password') != $this->input->post('password_conf')) {
                $this->session->set_flashdata('unregistered', 'Password confirmation is not valid');
                $msg = "Password confirmation is not valid";
            }
            $msg = "Fill the form again !";
            // redirect(site_url('registrasi'));
        } else {
            $nama = $this->input->post('name');
            $email = $this->input->post('email');
            $password = hash('SHA256', $this->input->post('password'));
            // $data['nama']   =    $this->input->post('name');
            $data['nama'] = $nama;
            $data['email']  = $email;
            $data['password'] = $password;

            // $user_check =  $this->db->query("SELECT * FROM user where email='" . $this->input->post('email') . "'")->num_rows();
            $user_check = $this->M_account->checkemail('user', $email);

            if ($user_check > 0) {
                //set notifikasi
                $this->session->set_flashdata('unregistered', 'Duplicate email occured');
                $msg = "Duplicate email occured";
                //alihkan ke halaman login
                // redirect(site_url('registrasi'));
            } else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
                // set random code
                $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = substr(str_shuffle($set), 0, 12);

                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'fordercompany@gmail.com', // change it to yours
                    'smtp_pass' => 'black&whites', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
                $data['code'] = $code;
                $data['active'] = false;

                $id = $this->M_account->daftar('user', $data);

                $message =     "
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>" . $nama . "</p>
							<p>Please click the link below to activate your account .</p>
							<h4><a href='" . site_url() . "account/activate/" . $id . "/" . $code . "'>Activate My Account</a></h4>
						</body>
						</html>
                        ";

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from($config['smtp_user']);
                $this->email->to($email);
                $this->email->subject('Account Activation Email');
                $this->email->message($message);

                if ($this->email->send()) {
                    // $this->session->set_flashdata('message', "Send Email");
                    // $this->session->set_flashdata('sukses', 'Pendaftaran berhasil. Silahkan login!');
                    $msg = "Email berhasil terkirim. Silahkan aktivasi akun untuk melanjutkan login !";
                    // redirect(site_url('home'));
                } else {
                    $msg = "Email tidak berhasil terkirim. Silahkan coba lagi !";
                }
            }
        }
        echo json_encode($msg);
    }

    public function activate()
    {
        $id =  $this->uri->segment(3);
        $code = $this->uri->segment(4);

        $userinfo = $this->M_account->getUserById('user', $id);
        if ($userinfo['code'] == $code) {
            $data = array(
                'active' => true
            );
            $query = $this->M_account->updateUser($data, $id);

            if ($query) {
                // echo "berhasil";

                $this->session->set_flashdata('sukses', 'User activated successfully');
                redirect(site_url('account/logindirect'));
            } else {
                $this->session->set_flashdata('gagal', 'Something went wrong in activating account');
                redirect(site_url('account'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'Cannot activate account. Code didnt match');
            redirect(site_url('account'));
        }
    }

    public function login()
    {
        $valid = $this->form_validation;
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $valid->set_rules('email', 'EMAIL', 'required|valid_email');
        $valid->set_rules('password', 'Password', 'required');

        if ($valid->run()) {
            $user = $this->M_account->masuk($email, $password);
            if ($user == 1) {
                $status = $this->M_account->checkActivate($email);
                if ($status == true) {
                    $id   =  $this->M_account->getIdByEmail($email);

                    //set session user
                    $this->session->set_userdata('email', $email);
                    $this->session->set_userdata('id_login_cache', uniqid(rand()));
                    $this->session->set_userdata('id', $id);
                    $msg = "Anda berhasil login !";
                    //redirect ke halaman dashboard
                    // redirect(site_url('home'));
                } else {
                    $msg = "Akun anda belum teraktivasi. Silahkan periksa email anda untuk melakukan aktivasi";
                }
            } else {

                //jika tidak ada, set notifikasi dalam flashdata.
                // $this->session->set_flashdata('sukses', 'WRONG USERNAME/PASSWORD. TRY AGAIN ... ');
                $msg = "Email atau password salah. Silahkan coba lagi !";
                //redirect ke halaman login
                // redirect(site_url('warkop/login'));
            }
            echo json_encode($msg);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_login_cache');
        $this->session->unset_userdata('id');
        $msg = "Anda berhasil logout";
        echo json_encode($msg);
    }
}
