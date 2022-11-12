<?php  $this->load->view('templates/Admin/Header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class="form-group">
		<label>Nama Supplier  :</label>
		<input type="text" name="nama_supplier" class="form-control"
		placeholder="Inputkan Nama Supplier" required value="<?php echo $nama_supplier; ?>">
	</div>

	<div class="form-group">
		<label>Alamat Supplier :</label>
		<input type="text" name="alamat_supplier" class="form-control"
		placeholder="Inputkan Alamat Supplier" required value="<?php echo $alamat_supplier; ?>">
	</div>
	
	
	<input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Admin/Footer_admin');?>