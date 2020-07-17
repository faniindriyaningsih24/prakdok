<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Reportpmb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_prakdok');
	}
	public function index()
	{
		$this->load->library('Pdfdok');
		$this->load->model('mdl_prakdok');
		$data['pmb']=$this->mdl_prakdok->Selectpmb();
		$this->load->view('reportpmb',$data);
	}
}
