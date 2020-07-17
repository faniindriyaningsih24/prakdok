<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Reportobt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_prakdok');
	}
	public function index()
	{
		$this->load->library('Pdfdok');
		$this->load->model('mdl_prakdok');
		$data['obt']=$this->mdl_prakdok->Selectobt();
		$this->load->view('reportobt',$data);
	}
}
