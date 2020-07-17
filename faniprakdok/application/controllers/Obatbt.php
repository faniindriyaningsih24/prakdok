<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatbt extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_prakdok');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodeobt = $_POST['txt_kodeobt'];
			$Namaobt = $_POST['txt_namaobt'];
			$Indikasiobt = $_POST['txt_indikasiobt'];
			$Stokobt = $_POST['txt_stokobt'];
			$Hargaobt = $_POST['txt_hargaobt'];
			$Tglkadarobt = $_POST['txt_tglkadarobt'];
			$data = array('kd_obt'=>$Kodeobt,  
				'nama_obt'=>$Namaobt,
				'indikasi_obt'=>$Indikasiobt,
				'stok_obt'=>$Stokobt,
				'harga_obt'=>$Hargaobt,
				'tglkadar_obt'=>$Tglkadarobt
				);
			$this->mdl_prakdok->Insertobt($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodeobt = $_POST['txt_kodeobt'];
			$Namaobt = $_POST['txt_namaobt'];
			$Indikasiobt = $_POST['txt_indikasiobt'];
			$Stokobt = $_POST['txt_stokobt'];
			$Hargaobt = $_POST['txt_hargaobt'];
			$Tglkadarobt = $_POST['txt_tglkadarobt'];
			$data = array('nama_obt'=>$Namaobt,
				'indikasi_obt'=>$Indikasiobt,
				'stok_obt'=>$Stokobt,
				'harga_obt'=>$Hargaobt,
				'tglkadar_obt'=>$Tglkadarobt
				);
			$this->mdl_prakdok->Updateobt($Kodeobt,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodeobt = $_POST['txt_kodeobt'];
			$this->mdl_prakdok->Deleteobt($Kodeobt);			
		}

		$this->load->model('mdl_prakdok');
		$data['obt'] = $this->mdl_prakdok->selectobt();
		$this->load->view('form_obatbt',$data);
	}

}
