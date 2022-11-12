<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<li>
		<a href="'.site_url('Buku/control_beliBuku').'"><i class="fa fa-list fa-fw"></i> Penjualan </a>
	</li><li>
		<a href="'.site_url('Beli/beli_control').'"><i class="fa fa-list fa-fw"></i> Pesanan</a>
	</li>';
	}

	function generate_sidemenu2()
	{
		return '<li>
		<li>
		<a href="'.site_url('Memberr/Member_list').'"><i class="fa fa-users"></i> Data Member</a>
	</li><li>
		<a href="'.site_url('Bukuu/Buku_control').'"><i class="fa fa-book"></i> Data Buku </a>
	</li><li>
		<a href="'.site_url('Admin/Beli_control/pembelian').'"><i class="fa fa-list-alt"></i> Data Penjualan </a>
	</li><li>
		<a href="'.site_url('Supplier/Control_supplier').'"><i class="fa fa-list-alt"></i> Data Supplier </a>
	</li><li>
		<a href="'.site_url('Supply/Supply_control').'"><i class="fa fa-list-alt"></i> Data Supply </a>
	</li>';
	}