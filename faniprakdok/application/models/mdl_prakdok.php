<?php
	class mdl_prakdok extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
/*--------------------------DOKTER----------------------------------- */
		function Insertdokter($data)
		{
			$this->db->insert('tbl_dokter',$data);
		}
		function Updatedokter($Kodedok,$data)
		{
			$this->db->where('kd_dokter',$Kodedok);
			$this->db->update('tbl_dokter',$data);
		}
		function Deletedokter($Kodedok)
		{
			$this->db->where('kd_dokter',$Kodedok);
			$this->db->delete('tbl_dokter');
		}
		 function Selectdokter()
		{
		$this->db->select('*');
		$this->db->from('tbl_dokter');
		$this->db->order_by('kd_dokter','ASC');
		$query=$this->db->get();
		return $query->result();
		}
/*--------------------------PASIEN----------------------------------- */
		function Insertpasien($data)
		{
			$this->db->insert('tbl_pasien',$data);
		}
		function Updatepasien($Kodepas,$data)
		{
			$this->db->where('kd_pasien',$Kodepas);
			$this->db->update('tbl_pasien',$data);
		}
		function Deletepasien($Kodepas)
		{
			$this->db->where('kd_pasien',$Kodepas);
			$this->db->delete('tbl_pasien');
		}
		 function Selectpasien()
		{
		$this->db->select('*');
		$this->db->from('tbl_pasien');
		$this->db->order_by('kd_pasien','ASC');
		$query=$this->db->get();
		return $query->result();
		}
/*--------------------------OBAT BEBAS TERBATAS----------------------------------- */
		function Insertobt($data)
		{
			$this->db->insert('tbl_obt',$data);
		}
		function Updateobt($Kodeobt,$data)
		{
			$this->db->where('kd_obt',$Kodeobt);
			$this->db->update('tbl_obt',$data);
		}
		function Deleteobt($Kodeobt)
		{
			$this->db->where('kd_obt',$Kodeobt);
			$this->db->delete('tbl_obt');
		}
		 function Selectobt()
		{
		$this->db->select('*');
		$this->db->from('tbl_obt');
		$this->db->order_by('kd_obt','ASC');
		$query=$this->db->get();
		return $query->result();
		}
/*--------------------------PEMBAYARAN----------------------------------- */
		function Insertpmb($data)
		{
			$this->db->insert('tbl_pembayaran',$data);
		}
		function Updatepmb($Kodepmb,$data)
		{
			$this->db->where('kd_pembayaran ',$Kodepmb);
			$this->db->update('tbl_pembayaran',$data);
		}
		function Deletepmb($Kodeobt)
		{
			$this->db->where('kd_pembayaran',$Kodepmb);
			$this->db->delete('tbl_pembayaran');
		}
		 function Selectpmb() 
		{
			$data = $this->db->query("select * from tbl_pembayaran a,tbl_dokter b, tbl_pasien c, tbl_obt d, tbl_user e where a.kd_dokter=b.kd_dokter and a.kd_pasien=c.kd_pasien and a.kd_obt=d.kd_obt and a.kd_user=e.kd_user order by kd_pembayaran asc ");
			return $data->result();
		}
/*--------------------------USER----------------------------------- */
		function Insertuser($data)
		{
			$this->db->insert('tbl_user',$data);
		}
		function Updateuser($Kodeuser,$data)
		{
			$this->db->where('kd_user ',$Kodeuser);
			$this->db->update('tbl_user',$data);
		}
		function Deleteuser($Kodeuser)
		{
			$this->db->where('kd_user',$Kodeuser);
			$this->db->delete('tbl_user');
		}
		 function Selectuser() 
		{
			$data = $this->db->query("select * from tbl_user a,tbl_status b where a.kd_status=b.kd_status order by kd_user asc ");
			return $data->result();
		}
/*--------------------------LOGIN---------------------------------- */
		function user()
		{
			$data = $this->db->query("select * from tbl_user a, tbl_status b where a.kd_status=b.kd_status order by kd_user asc");
			return $data->result();
		}
	}
?>
