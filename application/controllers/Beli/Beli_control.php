<?php 
/**
* 
*/
class beli_control extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Beli/Beli_model');
	}

	function index()
	{
		$username_member=$this->session->userdata('username_member');
		$data['coba']=$this->Beli_model->panggil($username_member); //Membuat array
		$this->load->view('Project/Beli/Form_menampilkanBeli',$data);
         }


	function tambah($id_buku)
	{
		$buku=$this->Beli_model->ambil_data_id($id_buku);
		$data=array(
			'aksi'=> site_url('Beli/Beli_control/tambah_aksi'),
			'id_buku'=> set_value('id_buku',$buku->id_buku),
			'judul_buku'=> set_value('judul_buku',$buku->judul_buku),
			'tahun_buku'=> set_value('tahun_buku',$buku->tahun_buku),
			'harga_buku'=> set_value('harga_buku',$buku->harga_buku),
			'button'=> 'Tambah', 

			);
		$this->load->view('Project/Beli/Form_bukuSetelahBeli',$data);
	}

	function tambah_aksi(){

		$data=array(
			'id_buku'=> $this->input->post('id_buku'),
			'username_member'=> $this->input->post('username_member'),
			'tanggal_beli'=> date("Y-m-d"),
                        'status_beli' => $this->input->post('status_beli'),
			);
		$this->Beli_model->tambah_data($data);
		redirect(site_url('Home'));	
	}


	function pesanan($username_member)
	{
		$data['tampil']=$this->Beli_model->tampil($username_member); //Membuat array
		$this->load->view('Project/Beli/Form_menampilkanBeli',$data);
	}

        function data_kosong_member()
        {
               $this->load->view('Home');
        }
        public function pembelian($username_member)
	{
		if(!$this->session->userdata('logined')||$this->session->userdata('logined')!=true)
			{
				redirect('/');
	}

		$cekDataRelasi=$this->Beli_model->cekDataRelasi($username_member);
		if(!empty($cekDataRelasi))
		{
			$data['coba']=$this->Beli_model->panggil($username_member); //Membuat array
			$this->load->view('Project/Beli/Form_menampilkanBeli',$data);
		}
		else{
                        $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Anda belum memesan, silahkan pesan terlebih dahulu</div></div>");
			redirect('Beli/Beli_control/data_kosong_member');
		}

}

}
?>		