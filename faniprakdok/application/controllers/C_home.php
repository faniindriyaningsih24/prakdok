<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		redirect('login/index');
	}
}
