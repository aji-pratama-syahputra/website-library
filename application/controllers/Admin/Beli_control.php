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
		$data['coba']=$this->Beli_model->panggil_admin(); //Membuat array
		$this->load->view('Project/Adminn/Form_menampilkanBeli',$data);
	}


		function delete($id){
		
		$this->Beli_model->hapus_data($id);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Berhasil Dihapus</div></div>");
		redirect(site_url('Admin/Beli_control/pembelian'));
	}
        
        function update($id_beli){

		$beli=$this->Beli_model->ambil_data_id_beli($id_beli); 
		$data=array(
			'aksi'=> site_url('Admin/Beli_control/update_aksi'), 
			'status_beli'=> set_value('status_beli', $beli->status_beli),
			'id_beli'=> set_value('id_beli', $beli->id_beli), 
			
			'button'=> 'Edit',
			);
		$this->load->view('Project/Adminn/Form_beli',$data); 
	}
	function update_aksi(){

		$data=array( 
			'id_beli'=> $this->input->post('id_beli'), 
			'status_beli'=>$this->input->post('status_beli'),

			);
		
		$id_beli=$this->input->post('id_beli'); 
		
		$this->Beli_model->edit_data($id_beli,$data);
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Diubah</div></div>");
		redirect(site_url('Admin/Beli_control/pembelian'));
	}
  
        function data_kosong()
        {
        $this->load->view('templates/Admin/Home_admin');
        }

        public function pembelian()
	{

		$cekDataRelasi_Admin=$this->Beli_model->cekDataRelasi_Admin();
		if(!empty($cekDataRelasi_Admin))
		{
			$data['coba']=$this->Beli_model->panggil_admin(); //Membuat array
			$this->load->view('Project/Adminn/Form_menampilkanBeli',$data);
		}
		else{
                         $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Tidak ada data penjualan</div></div>");
			redirect('Admin/Beli_control/data_kosong');
		}

}


}
?>	