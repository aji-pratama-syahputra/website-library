<?php  $this->load->view('templates/Member/Header_template');?>


<section id="main-content">
	<section class="wrapper">

		<div class="row">
			<div class="col-lg-12 main-chart">   

				<div class="row">
					<div class="col-md-9 mb">


						<form action="<?php echo $aksi; ?>" method="POST">

							<div class="container-fluid">
								<div class="form-group">
									<label>Judul Buku  :</label>
									<input type="text" name="judul_buku" class="form-control"
									placeholder="Inputkan Judul Buku" required value="<?php echo $judul_buku; ?>" readonly>
								</div>

								<div class="form-group">
									<label>Tahun terbit :</label>
									<input type="text" name="tahun_buku" class="form-control"
									placeholder="Inputkan tahun terbit" required value="<?php echo $tahun_buku; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Harga  :</label>
									<input type="text" name="harga_buku" class="form-control"
									placeholder="Inputkan Harga" required value="<?php echo $harga_buku; ?>" readonly>
								</div>
                                                                <div class="form-group">
									<label>Status Pembayaran  :</label>
									<input type="text" name="status_beli" class="form-control"
									 required value="Belum Bayar" readonly>
								</div>

								<input type="hidden" name="id_buku" value="<?php echo $id_buku ?>">
								<input type="hidden" name="username_member" value="<?php echo $this->session->userdata('username_member'); ?>">
								<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>

							</form>
						</div>
					</div>
				</div>
				<?php  $this->load->view('templates/Member/Footer_template');?>
			</div>



