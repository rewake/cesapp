<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index()
	{
		$data['users'] = $this->Users_model->read();
		
		$this->load->view('user_list', $data);
	}
	
	public function create()
	{
		
	}
	
	public function detail($u = null)
	{
		if (!isset($u) || empty($u))
		{
			$data['user'] = false;
		}
		else
		{
			$data['user'] = $this->db->get_where('user_info', array('uid' => $u));
		}
		
		$this->load->view('user_detail', $data);
	}
	
	public function update()
	{
		
	}
	
	public function delete($u = null)
	{
		
	}
}