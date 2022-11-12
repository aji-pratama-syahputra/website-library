<?php 
/**
* 

*/
class loginMember_model extends CI_Model
{

	public $nama_table 	= 'member';
	public $id 			= 'username_member';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();

	}

	function cek_login($username,$password) //isinya adalah query
	{
		$this->db->where('username_member',$username); // membuat nama_prodi menjadi username
		$this->db->where('password_member',$password); // membuat jurusan_prodi sebagai password 
		return $this->db->get($this->nama_table)->row();
	}


}
 ?>