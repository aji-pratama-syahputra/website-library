<?php $this->load->view('templates/Admin/Header_admin');?>
<div class="col-lg-12">
<h1 class="page-header">Data Member</h1></div>
<?=$this->session->flashdata('pesan')?>
<div class="container">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Username Member</th>
			<th>Password Member</th>
			<th>Nama Member</th>
			<th>Alamat Member</th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($member as $key => $value) {?>
	<tr>
			<th><?php echo $value->username_member; ?></th>	
			<th><?php echo $value->password_member; ?></th>
			<th><?php echo $value->nama_member; ?></th>
			<th><?php echo $value->alamat_member; ?></th>
			<th>

				<a href="<?php echo site_url('Memberr/Member_list/delete/'.$value->username_member); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a href="<?php echo site_url('Memberr/Member_list/update/'.$value->username_member); ?>" class="btn btn-warning">
					<i class="fa fa-pencil-square"></i>
				</a>
			</th>
		</tr>
		<?php }?>
</tbody>
</table>
 

<?$this->load->view('templates/Admin/Footer_admin');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>