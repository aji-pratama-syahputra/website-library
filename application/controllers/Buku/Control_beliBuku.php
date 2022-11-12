<?php 
/**
* 
*/
class control_beliBuku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Buku/Buku_model');
	}

	function index()
	{
		$data['buku']=$this->Buku_model->Ambil_data(); //Membuat array
		$this->load->view('Project/Beli/Form_listBeli',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('Buku/Buku_control/tambah_aksi'),
			'username_member'=> set_value('username_member'),
			'id_buku'=> set_value('id_buku'),
			'tanggal_beli'=>set_value('tanggal_beli'),
			'id_beli'=> set_value('id_beli'),
			'button'=> 'Tambah'
			);
		$this->load->view('Project/Buku/Form_buku',$data);
	}

	function tambah_aksi(){

		$data=array(
			'username_member'=> $this->input->post('username_member'),
			'id_buku'=> $this->input->post('id_buku'),
			'tanggal_beli'=> $this->input->post('tanggal_beli'),
			);
		$this->Buku_model->tambah_data($data);
		redirect(site_url('Home'));	
	}


}
?>