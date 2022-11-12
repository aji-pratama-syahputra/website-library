<?php  $this->load->view('templates/Admin/Header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">
	
	
	<div class="form-group">
		<label>ID Suplier  :</label>
		<select  name="id_supplier" class="form-control">
		<?php foreach($id_supplier as $row=>$value){
			if($IdSupplier==$value->id_supplier){ ?>
			<option selected value="<?php echo $value->id_supplier;?>"><?php echo $value->nama_supplier?></option>
			<?php }else{?>
				<option value="<?php echo $value->id_supplier;?>"><?php echo $value->nama_supplier?></option>
				<?php }}?>
			</select>
	</div>

	<div class="form-group">
		<label>ID Buku :</label>
		<select name="id_buku" class="form-control">
		<?php foreach($id_buku as $row=>$value){ 
			if($IdBuku==$value->id_buku){?> 
			<option selected value="<?php echo $value->id_buku;?>"><?php echo $value->judul_buku?></option>
			<?php }else{?>
			<option value="<?php echo $value->id_buku;?>"><?php echo $value->judul_buku?></option>
			<?php }}?>
		</select>
	</div>
	<input type="hidden" name="id_supply" value="<?php echo $id_supply; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Admin/Footer_admin');?>