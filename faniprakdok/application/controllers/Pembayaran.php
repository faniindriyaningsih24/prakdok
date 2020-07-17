<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_prakdok');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodepmb = $_POST['txt_kodepmb'];
			$Kodeuser = $_POST['txt_kduser'];
			$Kodedok = $_POST['cmb_dokter'];
			$Kodepas = $_POST['cmb_pasien'];
			$Kodeobat = $_POST['cmb_obt'];
			$Jmlobat = $_POST['txt_jml'];
			$Diagnosa = $_POST['txt_diagnosa'];
			$Tgl_pembayaran = $_POST['txt_tglpmb'];
			$data = array('kd_pembayaran'=>$Kodepmb,  
				'kd_user'=>$Kodeuser,
				'kd_dokter'=>$Kodedok,
				'kd_pasien'=>$Kodepas,
				'kd_obt'=>$Kodeobat,
				'jml_obt'=>$Jmlobat,
				'diagnosa'=>$Diagnosa,
				'tgl_pembayaran'=>$Tgl_pembayaran
				);
			$this->mdl_prakdok->Insertpmb($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodepmb = $_POST['txt_kodepmb'];
			$Kodeuser = $_POST['txt_kduser'];
			$Kodedok = $_POST['cmb_dokter'];
			$Kodepas = $_POST['cmb_pasien'];
			$Kodeobat = $_POST['cmb_obt'];
			$Jmlobat = $_POST['txt_jml'];
			$Diagnosa = $_POST['txt_diagnosa'];
			$Tgl_pembayaran = $_POST['txt_tglpmb'];
			$data = array('kd_user'=>$Kodeuser,
				'kd_dokter'=>$Kodedok,
				'kd_pasien'=>$Kodepas,
				'kd_obt'=>$Kodeobat,
				'jml_obt'=>$Jmlobat,
				'diagnosa'=>$Diagnosa,
				'tgl_pembayaran'=>$Tgl_pembayaran
				);
			$this->mdl_prakdok->Updatepmb($Kodepmb,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodepmb = $_POST['txt_kodepmb'];
			$this->mdl_prakdok->Deletepmb($Kodepmb);			
		}

		$this->load->model('mdl_prakdok');
		$data['pmb'] = $this->mdl_prakdok->selectpmb();
		$this->load->view('form_pembayaran',$data);
	}

}
