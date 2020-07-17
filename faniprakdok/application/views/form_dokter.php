<html>
<head>
	<title>Form||DataDokter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/template/dokter1_css.css">
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
		<h1>~ Form Input Data Dokter ~</h1>

		<form action="" method="post" align="left">
			<h3>Kode Dokter</h3>
			<input type="text" name="txt_kodedok" value="">

			<h3>Nama</h3>
			<input type="text" name="txt_namadok" value="">

			<h3>Jenis Kelamin</h3>
			<select name="cmb_jkdok" value="">
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>

			<h3>No. Telp</h3>
			<input type="text" name="txt_tlpdok" value="">

			<h3>Hari Praktek</h3>
			<select name="cmb_haridok" value="">
				<option>Senin-Rabu</option>
				<option>Kamis-Sabtu</option>
				<option>Sabtu-Senin</option>
			</select>

			<h3>Jam Praktek</h3>
			<select name="cmb_jamdok" value="">
				<option>09:00 - 14:00</option>
				<option>15:00 - 20:00</option>
			</select>
			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			<a href="<?php echo site_url('Reportdok/index');?>"><h1>Report</h1></a>
			
		</form>
	</div>
	<div id="box-view">
		<h1>~ Tampilan Data Dokter ~</h1>
			<div class="th"><strong>Kode Dokter</strong></div>
			<div class="th"><strong>Nama</strong></div>
			<div class="th"><strong>Jenis Kelamin</strong></div>
			<div class="th"><strong>No. Telp</strong></div>
			<div class="th"><strong>Hari Praktek</strong></div>
			<div class="th"><strong>Jam Praktek</strong></div>

			<?php
				if (!empty($dokter)) 
				{
					foreach ($dokter as $datadokter) 
						{
							?>

			<div class="td"><?php echo $datadokter->kd_dokter; ?></div>
			<div class="td"><?php echo $datadokter->nama_dokter; ?></div>
			<div class="td"><?php echo $datadokter->jk_dokter; ?></div>
			<div class="td"><?php echo $datadokter->tlp_dokter; ?></div>
			<div class="td"><?php echo $datadokter->hari_dokter; ?></div>
			<div class="td"><?php echo $datadokter->jam_dokter; ?></div>
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
