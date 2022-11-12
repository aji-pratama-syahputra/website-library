<?php 
/**
* 

*/
class admin_model extends CI_Model
{

	public $nama_table 	= 'admin';
	public $id 			= 'username_admin';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();

	}

	function cek_login($username,$password) //isinya adalah query
	{
		$this->db->where('username_admin',$username); // membuat nama_prodi menjadi username
		$this->db->where('password_admin',$password); // membuat jurusan_prodi sebagai password 
		return $this->db->get($this->nama_table)->row();
	}

}
 ?>