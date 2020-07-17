<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('status')) {
			if ($this->session->userdata('status') == 'login') {
				redirect('/c_home/index');
			}
		}
		$this->load->model('mdl_login');
	}


	public function index()
	{
		$this->load->view('form_login');
	}

	public function aksi_login()
	{
		$username=$this->input->post('txt_user');
		$password=$this->input->post('txt_pass');
		$where = array
			(
				'username' => $username,
				'password' => $password
			);
		$cek = $this->mdl_login->cek_login("tbl_user",$where)->num_rows();
		if($cek > 0)

		 {
		 	$data_session = array
		 	(
		 		'nama' => $username,
		 		'status' =>"login"
		 	);

		 	$this->session->set_userdata($data_session);
		 	redirect(base_url("index.php/c_home/index"));

		 }

		 else
		 {
		 	echo "username dan password salah !!!!";
		 }
	}
}
