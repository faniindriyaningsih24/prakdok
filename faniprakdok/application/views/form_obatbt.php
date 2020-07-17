<html>
<head>
	<title>Form||DataObatBebasTerbatas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/template/obatbt1_css.css">
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
		<h1>~ Form Input Data Obat Bebas Terbatas ~</h1>

		<form action="" method="post" align="left">
			<h3>Kode Obat</h3>
			<input type="text" name="txt_kodeobt" value="">

			<h3>Nama</h3>
			<input type="text" name="txt_namaobt" value="">
			
			<h3>Indikasi</h3>
			<textarea rows="5" name="txt_indikasiobt"></textarea>

			<h3>Stok</h3>
			<input type="text" name="txt_stokobt" value="">

			<h3>Harga</h3>
			<input type="text" name="txt_hargaobt" value="">

			<h3>Tanggal Kadarluarsa</h3>
			<input type="date" name="txt_tglkadarobt" value="">


			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			<a href="<?php echo site_url('Reportobt/index');?>"><h1>Report</h1></a>
		</form>
	</div>
	<div id="box-view">
		<h1>~ Tampilan Data Obat Bebas Terbatas ~</h1>
			<div class="th"><strong>Kode Obat</strong></div>
			<div class="th"><strong>Nama</strong></div>
			<div class="th"><strong>Indikasi</strong></div>
			<div class="th"><strong>Stok</strong></div>
			<div class="th"><strong>Harga</strong></div>
			<div class="th"><strong>Tanggal Kadarluarsa</strong></div>

			<?php
				if (!empty($obt)) 
				{
					foreach ($obt as $dataobt) 
						{
							?>

			<div class="td"><?php echo $dataobt->kd_obt; ?></div>
			<div class="td"><?php echo $dataobt->nama_obt; ?></div>
			<div class="td"><?php echo $dataobt->indikasi_obt; ?></div>
			<div class="td"><?php echo $dataobt->stok_obt; ?></div>
			<div class="td"><?php echo $dataobt->harga_obt; ?></div>
			<div class="td"><?php echo $dataobt->tglkadar_obt; ?></div>
			
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
