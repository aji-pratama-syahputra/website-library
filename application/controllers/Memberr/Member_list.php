<?php 
 /**
 * 
 */
 class member_list extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Memberr/Member_model');
 	}

 	function index()
 	{
 		$data['member']=$this->Member_model->ambil_data();
 		$this->load->view('Project/Memberr/Form_list',$data);

 	}

 	function delete($id)
 	{
		
		$this->Member_model->hapus_data($id);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Berhasil Dihapus</div></div>");
		redirect(site_url('Memberr/Member_list'));
	}

	function update($id){

		$member=$this->Member_model->ambil_data_id($id);
		$data=array(
			'aksi'=> site_url('Memberr/Member_list/update_aksi'), 
			'password_member'=> set_value('password_member', $member->password_member),
			'nama_member'=>set_value('nama_member', $member->nama_member),
			'alamat_member'=>set_value('alamat_member', $member->alamat_member),
			'username_member'=> set_value('username_member', $member->username_member),
			'button'=> 'Edit',
			);
		$this->load->view('Project/Memberr/Form_member',$data); 
	}

	function update_aksi(){

		$data=array( 
			'username_member'=> $this->input->post('username_member'), //mengisikan database sesuai dengan yang diinputkan di form
			'password_member'=> $this->input->post('password_member'),
			'nama_member'=> $this->input->post('nama_member'),
			'alamat_member'=> $this->input->post('alamat_member'),
			);
		
		$id_member=$this->input->post('username_member'); 
		
		$this->Member_model->edit_data($id_member,$data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Diubah</div></div>");
		redirect(site_url('Memberr/Member_list'));
	}

	
 }
 ?>