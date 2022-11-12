<?php $this->load->view('templates/Admin/Header_admin');?>
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Data Supply</h1></div>
<?=$this->session->flashdata('pesan')?>
<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Supply/Supply_control/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>

<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Supplier</th>
			<th>Judul Buku</th>
			<th>Tanggal Supply </th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($tampil as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_supply; ?></th>
			<th><?php echo $value->nama_supplier; ?></th>
			<th><?php echo $value->judul_buku; ?></th>	
			<th><?php echo $value->tanggal_supply; ?></th>
			<th>

				<a href="<?php echo site_url('Supply/Supply_control/delete/'.$value->id_supply); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
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