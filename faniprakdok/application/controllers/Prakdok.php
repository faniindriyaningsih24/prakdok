<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prakdok extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_prakdok');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodedok = $_POST['txt_kodedok'];
			$Namadok = $_POST['txt_namadok'];
			$Jkdok = $_POST['cmb_jkdok'];
			$Tlpdok = $_POST['txt_tlpdok'];
			$Haridok = $_POST['cmb_haridok'];
			$Jamdok = $_POST['cmb_jamdok'];
			$data = array('kd_dokter'=>$Kodedok,  
				'nama_dokter'=>$Namadok,
				'jk_dokter'=>$Jkdok,
				'tlp_dokter'=>$Tlpdok,
				'hari_dokter'=>$Haridok,
				'jam_dokter'=>$Jamdok
				);
			$this->mdl_prakdok->Insertdokter($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodedok = $_POST['txt_kodedok'];
			$Namadok = $_POST['txt_namadok'];
			$Jkdok = $_POST['cmb_jkdok'];
			$Tlpdok = $_POST['txt_tlpdok'];
			$Haridok = $_POST['cmb_haridok'];
			$Jamdok = $_POST['cmb_jamdok'];
			$data = array('nama_dokter'=>$Namadok,
				'jk_dokter'=>$Jkdok,
				'tlp_dokter'=>$Tlpdok,
				'hari_dokter'=>$Haridok,
				'jam_dokter'=>$Jamdok
				);
			$this->mdl_prakdok->Updatedokter($Kodedok,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodedok = $_POST['txt_kodedok'];
			$this->mdl_prakdok->Deletedokter($Kodedok);			
		}

		$this->load->model('mdl_prakdok');
		$data['dokter'] = $this->mdl_prakdok->selectdokter();
		$this->load->view('form_dokter',$data);
	}

}
