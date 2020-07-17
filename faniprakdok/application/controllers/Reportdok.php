<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Reportdok extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_prakdok');
	}
	public function index()
	{
		$this->load->library('Pdfdok');
		$this->load->model('mdl_prakdok');
		$data['dokter']=$this->mdl_prakdok->Selectdokter();
		$this->load->view('reportdok',$data);
	}
}
