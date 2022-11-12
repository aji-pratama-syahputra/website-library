<?php  $this->load->view('templates/Admin/Header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class="form-group">
		<label>Username :</label>
		<input type="text" name="username_member" class="form-control"
		placeholder="Inputkan Username" required value="<?php echo $username_member; ?>">
	</div>

	<div class="form-group">
		<label>Password :</label>
		<input type="text" name="password_member" class="form-control"
		placeholder="Inputkan Password" required value="<?php echo $password_member; ?>">
	</div>
	<div class="form-group">
		<label>Nama :</label>
		<input type="text" name="nama_member" class="form-control"
		placeholder="Inputkan Nama" required value="<?php echo $nama_member; ?>">
	</div>
	<div class="form-group">
		<label>Alamat :</label>
		<input type="text" name="alamat_member" class="form-control"
		placeholder="Inputkan Alamat"  value="<?php echo $alamat_member; ?>">
	</div>
	
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Admin/Footer_admin');?>