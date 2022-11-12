<?php  $this->load->view('templates/Admin/Header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">
	

	<div class="form-group">
		<label>Judul Buku  :</label>
		<input type="text" name="judul" class="form-control"
		placeholder="Inputkan Judul Buku" required value="<?php echo $judul; ?>">
	</div>

	<div class="form-group">
		<label>Tahun terbit :</label>
		<input type="text" name="tahun" class="form-control"
		placeholder="Inputkan tahun terbit" required value="<?php echo $tahun; ?>">
	</div>
	<div class="form-group">
		<label>Harga  :</label>
		<input type="text" name="harga" class="form-control"
		placeholder="Inputkan Harga" required value="<?php echo $harga; ?>">
	</div>
	
	<input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Admin/Footer_admin');?>