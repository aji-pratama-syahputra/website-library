<?php $this->load->view('templates/Admin/Header_admin');?>
<div class="col-lg-12">
<h1 class="page-header">Data Supplier</h1></div>
<?=$this->session->flashdata('pesan')?>
<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Supplier/Control_supplier/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Supplier</th>
			<th>Alamat Supplier </th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($supplier as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_supplier; ?></th>
			<th><?php echo $value->nama_supplier; ?></th>	
			<th><?php echo $value->alamat_supplier; ?></th>
			<th>

				<a href="<?php echo site_url('Supplier/Control_supplier/delete/'.$value->id_supplier); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a href="<?php echo site_url('Supplier/Control_supplier/update/'.$value->id_supplier); ?>" class="btn btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
			</th>
		</tr>
		<?php }?>
</tbody>
</table>
</div>

<?$this->load->view('templates/Admin/Footer_admin');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>