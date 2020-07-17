<html>
<head>
	<title>Form||DataPasien</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/template/pasien1_css.css">
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
		<h1>~ Form Input Data Pasien ~</h1>

		<form action="" method="post" align="left">
			<h3>Kode Pasien</h3>
			<input type="text" name="txt_kodepas" value="">

			<h3>Nama</h3>
			<input type="text" name="txt_namapas" value="">

			<h3>Jenis Kelamin</h3>
			<select name="cmb_jkpas" value="">
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
			
			<h3>Usia</h3>
			<input type="text" name="txt_usiapas" value="">

			<h3>Alamat</h3>
			<textarea rows="5" name="txt_alamatpas"></textarea>

			<h3>No. Telp</h3>
			<input type="text" name="txt_tlppas" value="">


			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			<a href="<?php echo site_url('Reportpas/index');?>"><h1>Report</h1></a>
		</form>
	</div>
	<div id="box-view">
		<h1>~ Tampilan Data Pasien ~</h1>
			<div class="th"><strong>Kode Pasien</strong></div>
			<div class="th"><strong>Nama</strong></div>
			<div class="th"><strong>Jenis Kelamin</strong></div>
			<div class="th"><strong>Usia</strong></div>
			<div class="th"><strong>Alamat</strong></div>
			<div class="th"><strong>No. Telp</strong></div>

			<?php
				if (!empty($pasien)) 
				{
					foreach ($pasien as $datapasien) 
						{
							?>

			<div class="td"><?php echo $datapasien->kd_pasien; ?></div>
			<div class="td"><?php echo $datapasien->nama_pasien; ?></div>
			<div class="td"><?php echo $datapasien->jk_pasien; ?></div>
			<div class="td"><?php echo $datapasien->usia_pasien; ?></div>
			<div class="td"><?php echo $datapasien->alamat_pasien; ?></div>
			<div class="td"><?php echo $datapasien->tlp_pasien; ?></div>
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
