<html>
<head>
	<title>Form||DataUser</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/template/user1_css.css">
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
		<h1>~ Form Input Data User ~</h1>

		<form action="" method="post" align="left">
			<h3>Kode User</h3>
			<input type="text" name="txt_kodeuser" value="" placeholder="Kode Otomatis">

			<h3>Nama User</h3>
			<input type="text" name="txt_namauser" value="">

			<h3>Username</h3>
			<input type="text" name="txt_username" value="">

			<h3>Password</h3>
			<input type="text" name="txt_password" value="">

			<?php
				$query = $this->db->get('tbl_status');
				$data = $query->result();
			?>
			<h3>Status</h3>
			<select name='cmb_status'>
				<option value=''>----Pilih Status----</option>
			<?php
				foreach($data as $row){?>
				<option value='<?php echo $row->kd_status;?>'><?php echo $row->status;?></option>
			<?php } ?>
			</select>
		
			<input type="submit" name="btn_save" value="SAVE">
			<input type="submit" name="btn_update" value="UPDATE">
			<input type="submit" name="btn_delete" value="DELETE">
			
		</form>
	</div>
	<div id="box-view">
		<h1>~ Tampilan Data User~</h1>
			<div class="th"><strong>Kode Userr</strong></div>
			<div class="th"><strong>Nama user</strong></div>
			<div class="th"><strong>Username</strong></div>
			<div class="th"><strong>Password</strong></div>
			<div class="th"><strong>Status</strong></div>

			<?php
				if (!empty($user)) 
				{
					foreach ($user as $datauser) 
						{
							?>

			<div class="td"><?php echo $datauser->kd_user; ?></div>
			<div class="td"><?php echo $datauser->nama; ?></div>
			<div class="td"><?php echo $datauser->username; ?></div>
			<div class="td"><?php echo $datauser->password; ?></div>
			<div class="td"><?php echo $datauser->status; ?></div>

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
