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

											<a href="<?php echo site_url('Beli/Beli_control/tambah/'.$value->id_buku); ?>" class="btn btn-warning">
												<i class="fa fa-shopping-cart"></i>
											</a>

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
				