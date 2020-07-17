<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_prakdok');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodepas = $_POST['txt_kodepas'];
			$Namapas = $_POST['txt_namapas'];
			$Jkpas = $_POST['cmb_jkpas'];
			$Usiapas = $_POST['txt_usiapas'];
			$Alamatpas = $_POST['txt_alamatpas'];
			$Tlppas = $_POST['txt_tlppas'];
			$data = array('kd_pasien'=>$Kodepas,  
				'nama_pasien'=>$Namapas,
				'jk_pasien'=>$Jkpas,
				'usia_pasien'=>$Usiapas,
				'alamat_pasien'=>$Alamatpas,
				'tlp_pasien'=>$Tlppas
				);
			$this->mdl_prakdok->Insertpasien($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodepas = $_POST['txt_kodepas'];
			$Namapas = $_POST['txt_namapas'];
			$Jkpas = $_POST['cmb_jkpas'];
			$Usiapas = $_POST['txt_usiapas'];
			$Alamatpas = $_POST['txt_alamatpas'];
			$Tlppas = $_POST['txt_tlppas'];
			$data = array('nama_pasien'=>$Namapas,
				'jk_pasien'=>$Jkpas,
				'usia_pasien'=>$Usiapas,
				'alamat_pasien'=>$Alamatpas,
				'tlp_pasien'=>$Tlppas
				);
			$this->mdl_prakdok->Updatepasien($Kodepas,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodepas = $_POST['txt_kodepas'];
			$this->mdl_prakdok->Deletepasien($Kodepas);			
		}

		$this->load->model('mdl_prakdok');
		$data['pasien'] = $this->mdl_prakdok->selectpasien();
		$this->load->view('form_pasien',$data);
	}

}
