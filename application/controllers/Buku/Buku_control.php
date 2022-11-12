<?php 
/**
* 
*/
class buku_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Buku/Buku_model');
	}

	function index()
	{
		$data['buku']=$this->Buku_model->Ambil_data(); //Membuat array
		$this->load->view('Project/Buku/Form_list_buku',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('Buku/Buku_control/tambah_aksi'),
			'judul_buku'=> set_value('judul_buku'),
			'tahun_buku'=> set_value('tahun_buku'),
			'harga_buku'=>set_value('harga_buku'),
			'id_buku'=> set_value('id_buku'),
			'button'=> 'Tambah'
			);
		$this->load->view('Project/Buku/Form_buku',$data);
	}

	function tambah_aksi(){

		$data=array(
			'judul_buku'=> $this->input->post('judul_buku'),
			'tahun_buku'=> $this->input->post('tahun_buku'),
			'harga_buku'=> $this->input->post('harga_buku'),
			);
		$this->Buku_model->tambah_data($data);
		redirect(site_url('Home'));	
	}
}
?>