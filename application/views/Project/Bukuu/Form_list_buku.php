<?php $this->load->view('templates/Admin/Header_admin');?>
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Data Buku</h1></div>
<?=$this->session->flashdata('pesan')?>
<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Bukuu/Buku_control/tambah') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>

<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul Buku</th>
			<th>Tahun terbit </th>
			<th>Harga Buku</th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($buku as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_buku; ?></th>
			<th><?php echo $value->judul_buku; ?></th>	
			<th><?php echo $value->tahun_buku; ?></th>
			<th><?php echo $value->harga_buku; ?></th>
			<th>

				<a href="<?php echo site_url('Bukuu/Buku_control/delete/'.$value->id_buku); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a href="<?php echo site_url('Bukuu/Buku_control/update/'.$value->id_buku); ?>" class="btn btn-warning">
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