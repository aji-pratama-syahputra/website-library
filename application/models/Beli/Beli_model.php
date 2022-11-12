<?php  
/**
* 
*/
class beli_model extends CI_Model
{
	public $buku			=	'buku';
	public $id_buku			=	'id_buku';
	public $member 			=	'member';
	public $username_member	= 	'username_member';
	public $beli 			=	'beli';
	public $id_beli			=	'id_beli';
	public $order			=	'ASC';

	function __construct()
	{
		parent::__construct();

	}
	function Ambil_data() //isinya adalah query
	{
		$this->db->order_by($this->id_beli, $this->order); 
		return $this->db->get($this->beli)->result();
		 
	}
	function ambil_data_id($id_buku) //Kedua 
	{
		$this->db->where($this->id_buku,$id_buku);
		return $this->db->get($this->buku)->row();
	}

        function ambil_data_id_beli($id_beli) //Kedua 
	{
		$this->db->where($this->id_beli,$id_beli);
		return $this->db->get($this->beli)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->beli,$data);
	}
	function hapus_data($id_beli)
	{
		$this->db->where($this->id_beli,$id_beli); 
		return $this->db->delete($this->beli); 
	}
 
        function edit_data($id_beli,$data){  

		$this->db->where($this->id_beli,$id_beli);  
		return $this->db->update($this->beli,$data); 
	}
   
       function panggil($username_member)
	{
		$this->db->select('beli.*, buku.judul_buku, member.username_member');
		$this->db->from('beli','buku','member');
		$this->db->join('buku', 'buku.id_buku=beli.id_buku');
		$this->db->join('member', 'member.username_member=beli.username_member');
		$this->db->where('member.username_member', $username_member);
		
		$query=$this->db->get();
			if($query->num_rows()>0){
				foreach ($query->result() as $data ) {
					$coba[]=$data;
				}
				return $coba;
			}
	}

	function cekDataRelasi($username_member)
	{
		$this->db->where($this->username_member,$username_member);
		return $this->db->get($this->beli)->row();
	}

	function panggil_admin()
	{
		$this->db->select('beli.*, buku.judul_buku');
		$this->db->from('beli','buku');
		$this->db->join('buku', 'buku.id_buku=beli.id_buku');
		
		
		$query=$this->db->get();
			if($query->num_rows()>0){
				foreach ($query->result() as $data ) {
					$coba[]=$data;
				}
				return $coba;
			}
	}	

	function cekDataRelasi_Admin()
	{
		$this->db->order_by($this->id_beli);
		return $this->db->get($this->beli)->result();
	}	
	}
?>