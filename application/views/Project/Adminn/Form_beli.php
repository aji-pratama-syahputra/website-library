<?php  $this->load->view('templates/Admin/Header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class="form-group">
		<label>Status   :</label>
		<input type="text" name="status_beli" class="form-control"
		placeholder="Ubah Status Sudah Bayar/Belum Bayar" required value="<?php echo $status_beli; ?>">
	</div>
	
	<input type="hidden" name="id_beli" value="<?php echo $id_beli; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Admin/Footer_admin');?>