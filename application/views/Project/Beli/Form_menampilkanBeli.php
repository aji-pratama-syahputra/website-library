<?php $this->load->view('templates/Member/Header_template');?>

<section id="main-content">
	<section class="wrapper">

		<div class="row">
			<div class="col-lg-12 main-chart">   

				<div class="row">
					<div class="col-md-9 mb">

<div class="container-fluid">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Pembeli</th>
			
                        <th>Judul Buku </th>
			<th>Tanggal Transaksi</th>
                        <th>Status Pembayaran</th>
			
			
</tr>
</thead>
<tbody>
	<?php foreach ($coba as $key => $value) {?>
	<tr>
			
			<th><?php echo $value->username_member; ?></th>	
			
                        <th><?php echo $value->judul_buku; ?></th>
			<th><?php echo $value->tanggal_beli; ?></th>
                        <th><?php echo $value->status_beli; ?></th>
			
			</th>
		</tr>
		<?php }?>
</tbody>
</table>
</div>
</div>

<?$this->load->view('templates/Member/Footer_template');?>

<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
</div>
</div>