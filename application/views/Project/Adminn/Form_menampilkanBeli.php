<?php  $this->load->view('templates/Admin/Header_admin');?>

<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Data Penjualan</h1></div>
<?=$this->session->flashdata('pesan')?>

	<div class="container-fluid">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					
					<th>Pembeli</th>
                                        <th>Judul Buku</th>
					<th>Tanggal Transaksi</th>
                                        <th>Status Pembayaran</th>
                                        <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($coba as $key => $value) {?>
					<tr>
						
						<th><?php echo $value->username_member; ?></th>	
                                                <th><?php echo $value->judul_buku; ?></th>
						<th><?php echo $value->tanggal_beli; ?></th>
                                                <th><?php echo $value->status_beli; ?></th>
                                                <th>
                                                       <a href="<?php echo site_url('Admin/Beli_control/delete/'.$value->id_beli); ?>" class="btn btn-danger"><i class="fa fa-trash"></i>
							</a>
                                                       <a href="<?php echo site_url('Admin/Beli_control/update/'.$value->id_beli); ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>
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