<html>
<head>
	<title>Form||DataPembayaran</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/template/pembayaran1_css.css">
</head>
<body>
	<div id="header">FANI || KLINIK<br>
		"User : <?php echo $this->session->userdata("nama"); ?> " </div>
	<div id="box-menu">
		<div id="menu"><a href="<?= base_url('index.php/C_home/logout') ?>"><b>LOGOUT</b></a></div>
		<div id="menu"><a href='<?php echo site_url('C_home/'); ?>'<span><b>HOME</b></span></a></div>
		<div id="menu"><a href='<?php echo site_url('Prakdok/'); ?>'><b>DOKTER</b></a></div>
		<div id="menu"><a href='<?php echo site_url('Pasien/'); ?>'><b>PASIEN</b></a></div>
		<div id="menu"><a href='<?php echo site_url('Obatbt/'); ?>'><b>OBAT BEBAS TERBATAS</b></a></div>
		<div id="menu"><a href='<?php echo site_url('Pembayaran/'); ?>'><b>PEMBAYARAN</b></a></div>
		<div id="menu"><a href='<?php echo site_url('User/'); ?>'><b>USER</b></a></div>
	</div>
	<div id="box-form">
		<h1>~ Form Input Data Pembayaran ~</h1>

		<form action="" method="post" align="left">
			<h3>Kode Pembayaran</h3>
			<input type="text" name="txt_kodepmb" value="">

			<?php
				$query = $this->db->get('tbl_user');
				$data = $query->result();
			?>
			<h3>Nama User</h3>
			<select name='txt_kduser'>
				<option value=''>----Pilih User----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_user;?>'><?php echo $row->username;?></option>
			<?php } ?>
			</select>


			<?php
				$query = $this->db->get('tbl_dokter');
				$data = $query->result();
			?>
			<h3>Nama Dokter</h3>
			<select name='cmb_dokter'>
				<option value=''>----Pilih Dokter----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_dokter;?>'><?php echo $row->nama_dokter;?></option>
			<?php } ?>
			</select>

			<?php
				$query = $this->db->get('tbl_pasien');
				$data = $query->result();
			?>
			<h3>Nama Pasien</h3>
			<select name='cmb_pasien'>
				<option value=''>----Pilih Pasien----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_pasien;?>'><?php echo $row->nama_pasien;?></option>
			<?php } ?>
			</select>
			

			<?php
				$query = $this->db->get('tbl_obt');
				$data = $query->result();
			?>
			<h3>Nama Obat</h3>
			<select name='cmb_obt'>
				<option value=''>----Pilih Obat----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_obt;?>'><?php echo $row->nama_obt;?></option>
			<?php } ?>
			</select>
			<input type="text" name="txt_jml" value="" placeholder="Jumlah Obat">

			<h3>Diagnosa</h3>
			<input type="text" name="txt_diagnosa" value="">

			<h3>Tanggal Pembayaran</h3>
			<input type="date" name="txt_tglpmb" value="<?php echo date('Y-m-d')?>" readonly="readonly">


			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			<a href="<?php echo site_url('Reportpmb/index');?>"><h1>Report</h1></a>
		</form>
	</div>
	<div id="box-view">
		<h1>~ Tampilan Data Pembayaran ~</h1>
			<div class="th"><strong>Kode Pembayaran</strong></div>
			<div class="th"><strong>Nama User</strong></div>
			<div class="th"><strong>Nama Dokter</strong></div>
			<div class="th"><strong>Nama Pasien</strong></div>
			<div class="th"><strong>Nama Obat</strong></div>
			<div class="th"><strong>Diagnosa</strong></div>
			<div class="th"><strong>Tanggal Pembayaran</strong></div>
			<div class="th"><strong>Total Pembayaran</strong></div>


			<?php
				if (!empty($pmb)) 
				{
					foreach ($pmb as $datapmb) 
						{
							$total = 0;
							$total = $datapmb->jml_obt * $datapmb->harga_obt;
							?>

			<div class="td"><?php echo $datapmb->kd_pembayaran; ?></div>
			<div class="td"><?php echo $datapmb->username; ?></div>
			<div class="td"><?php echo $datapmb->nama_dokter; ?></div>
			<div class="td"><?php echo $datapmb->nama_pasien; ?></div>
			<div class="td"><?php echo $datapmb->nama_obt; ?></div>
			<div class="td"><?php echo $datapmb->diagnosa; ?></div>
			<div class="td"><?php echo $datapmb->tgl_pembayaran; ?></div>
			<div class="td"><?php echo "Rp" . number_format($total, "0",",","."); ?></div>
			
			<?php
						}	
							}
						?>
	</div>
	<div id="footer">
		<strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights reserved.
	</div>
</body>
</html>
