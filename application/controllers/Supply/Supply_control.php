<?php 
/**
* 
*/
class supply_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supply/Supply_model');
		$this->load->model('Supplier/Supplier_model');
		$this->load->model('Bukuu/Buku_model');
	}

	function index()
	{
		$data['tampil']=$this->Supply_model->tampil(); //Membuat array
		$this->load->view('Project/Supply/Form_list_supply',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('Supply/Supply_control/tambah_aksi'),
			'id_supplier'=> $this->Supplier_model->option_supplier(),
			'id_buku'=> $this->Buku_model->option_buku(),
			'id_supply'=> set_value('id_supply'),
			'button'=> 'Tambah',
			);
		$this->load->view('Project/Supply/Form_supply',$data);
	}

	function tambah_aksi(){

		$data=array(
			'id_supplier'=> $this->input->post('id_supplier'),
			'id_buku'=> $this->input->post('id_buku'),
			'tanggal_supply'=> date("Y-m-d"),
			);
		$this->Supply_model->tambah_data($data);
		$this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Ditambah</div></div>");
		redirect(site_url('Supply/supply_control'));		
	}
	function delete($id){
		
		$this->Supply_model->hapus_data($id);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Berhasil Dihapus</div></div>");
		redirect(site_url('Supply/Supply_control'));
	}

        function update($id, $id_supplier, $nama_supplier, $id_buku, $judul_buku){

		$supply=$this->Supply_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('Supply/Supply_control/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'id_supply'=> set_value('id_supply', $supply->id_supply),
			'id_supplier'=> $this->Supplier_model->option_supplier(), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data 
			'id_buku'=> $this->Buku_model->option_buku(),
			'judul_buku'=> $this->Buku_model->option_buku(),
			'IdSupplier'=> $id_supplier,
			'namaSupplier'=> $nama_supplier,
			'IdBuku' => $id_buku,
			'judulBuku' => $judul_buku,
			'button'=> 'Edit',
			);
		$this->load->view('Project/Supply/Form_supply',$data); 
	}
	function update_aksi(){

		$data=array( 
			'id_supplier'=> $this->input->post('id_supplier'),
			'id_buku'=> $this->input->post('id_buku'),
			'judul_buku'=> $this->input->post('judul_buku'),
			'id_supply'=> $this->input->post('id_supply'),
			);
		
		$id_supply=$this->input->post('id_supply'); 
		
		$this->Supply_model->edit_data($id_supply,$data);
		redirect(site_url('Supply/Supply_control'));
	}
}
?>