<?php 
/**
* 
*/
class buku_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Bukuu/Buku_model');
	}

	function index()
	{
		$data['buku']=$this->Buku_model->Ambil_data(); //Membuat array
		$this->load->view('Project/Bukuu/Form_list_buku',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('Bukuu/Buku_control/tambah_aksi'),
			'judul'=> set_value('judul'),
			'tahun'=> set_value('tahun'),
			'harga'=>set_value('harga'),
			'id_buku'=> set_value('id_buku'),
			'button'=> 'Tambah',
			);
		$this->load->view('Project/Bukuu/Form_buku',$data);
	}

	function tambah_aksi(){

		$data=array(
			'judul_buku'=> $this->input->post('judul'),
			'tahun_buku'=> $this->input->post('tahun'),
			'harga_buku'=> $this->input->post('harga'),
			);
		$this->Buku_model->tambah_data($data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Ditambah</div></div>");
		redirect(site_url('Bukuu/Buku_control'));	
	}

	function delete($id){
		
		$this->Buku_model->hapus_data($id);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Berhasil Dihapus</div></div>");
		redirect(site_url('Bukuu/Buku_control'));
	}

	function update($id){

		$buku=$this->Buku_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('Bukuu/Buku_control/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'judul'=> set_value('judul', $buku->judul_buku), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'tahun'=> set_value('tahun', $buku->tahun_buku),
			'harga'=> set_value('harga', $buku->harga_buku),
			'id_buku'=> set_value('id_buku', $buku->id_buku),
			'button'=> 'Edit',
			);
		$this->load->view('Project/Bukuu/Form_buku',$data); 
	}
	function update_aksi(){

		$data=array( 
			'judul_buku'=> $this->input->post('judul'), //mengisikan database sesuai dengan yang diinputkan di form
			'tahun_buku'=> $this->input->post('tahun'),
			'harga_buku'=> $this->input->post('harga'),
			);
		
		$id_buku=$this->input->post('id_buku'); 
		
		$this->Buku_model->edit_data($id_buku,$data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Diubah</div></div>");
		redirect(site_url('Bukuu/Buku_control'));
	}

}
?>