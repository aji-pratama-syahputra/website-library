<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class control_loginMember extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Member/LoginMember_model');
    }

    public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('Home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('LoginMember');
		}
		else
		{
				$cek_login=$this->LoginMember_model->cek_login( 
				$this->input->post('username'), 
				$this->input->post('password')
				);

			if(!empty($cek_login))
				
			{
				$this->session->set_userdata('username_member', $cek_login -> username_member);
				
				$this->session->set_userdata('logined',true);
				redirect("Home");
			}
			else 
			{
				redirect("/");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
		redirect("/Control_loginMember");
    } 
    public function login()
    {
        $this->load->view('LoginMember');
        
    }
}