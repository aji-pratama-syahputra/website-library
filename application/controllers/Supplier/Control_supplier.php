<?php 
/**
* 
*/
class control_supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier/Supplier_model');
	}

	function index()
	{
		$data['supplier']=$this->Supplier_model->Ambil_data(); //Membuat array
		$this->load->view('Project/Supplier/Form_list_supplier',$data);
	}

	function tambah(){

		$data=array(
			'aksi'=> site_url('Supplier/Control_supplier/tambah_aksi'),
			'nama_supplier'=> set_value('nama_supplier'),
			'alamat_supplier'=> set_value('alamat_supplier'),
			'id_supplier'=> set_value('id_supplier'),
			'button'=> 'Tambah',
			);
		$this->load->view('Project/Supplier/Form_supplier',$data);
	}

	function tambah_aksi(){

		$data=array(
			'nama_supplier'=> $this->input->post('nama_supplier'),
			'alamat_supplier'=> $this->input->post('alamat_supplier'),
			);
		$this->Supplier_model->tambah_data($data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Ditambah</div></div>");
		redirect(site_url('Supplier/Control_supplier'));	
	}

	function delete($id){
		
		$this->Supplier_model->hapus_data($id);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Berhasil Dihapus</div></div>");
		redirect(site_url('Supplier/Control_supplier'));
	}

	function update($id){

		$supplier=$this->Supplier_model->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('Supplier/Control_supplier/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'nama_supplier'=> set_value('nama_supplier', $supplier->nama_supplier), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'alamat_supplier'=> set_value('alamat_supplier', $supplier->alamat_supplier),
			'id_supplier'=> set_value('id_supplier', $supplier->id_supplier),
			'button'=> 'Edit',
			);
		$this->load->view('Project/Supplier/Form_supplier',$data); 
	}
	function update_aksi(){

		$data=array( 
			'nama_supplier'=> $this->input->post('nama_supplier'), //mengisikan database sesuai dengan yang diinputkan di form
			'alamat_supplier'=> $this->input->post('alamat_supplier'),
			);
		
		$id_supplier=$this->input->post('id_supplier'); 
		
		$this->Supplier_model->edit_data($id_supplier,$data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Diubah</div></div>");
		redirect(site_url('Supplier/Control_supplier'));
	}

}
?>