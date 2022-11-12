<?php 
 /**
 * 
 */
 class member_tambah extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Member/Member_model');
 	}

 	function index()
 	{
 		$data['member']=$this->Member_model->ambil_data();
 		$this->load->view('Project/Member/Form_member',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Member/Member_tambah/tambah_aksi'),
 			'password_member' => set_value('password_member'),
 			'nama_member' => set_value('nama_member'),
 			'alamat_member' => set_value('alamat_member'),
 			'username_member' => set_value('username_member'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Project/Member/Form_registMember',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'username_member' => $this->input->post('username_member'),
 			'password_member' => $this->input->post('password_member'),
 			'nama_member' => $this->input->post('nama_member'),
 			'alamat_member' => $this->input->post('alamat_member'),
 		);
 		$this->Member_model->tambah_member($data);
 		redirect(site_url('Control_loginMember'));
 	}

        function pembayaran()
 	{
 		$this->load->view("Project/Pembayaran/Pembayaran");
 	}
 }

 ?>