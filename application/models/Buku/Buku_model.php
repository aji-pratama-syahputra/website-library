	<?php  
/**
* 
*/
class buku_model extends CI_Model
{
	public $nama_table	=	'buku';
	public $id			=	'id_buku';
	public $order		=	'ASC';
	function __construct()
	{
		parent::__construct();

	}
	function Ambil_data() //isinya adalah query
	{
		$this->db->order_by($this->id, $this->order); 
		return $this->db->get($this->nama_table)->result(); // memanggil seluruh record didatabase 
	}
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data); // memasukkan record dari form ke database, $data adalah variabe penampung data yang dari form. 
	}

	function get_option(){
		$this->db->select('*');
		$this->db->from('buku');
		$query=$this->db->get();
		return $query->result();
	}

}
?>