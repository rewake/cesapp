<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index()
	{
        $data['page_header'] = "User List";
		$data['users'] = $this->Users_model->read();

		$this->parser->parse('user_list', $data);
	}
	
	public function create()
	{
		$this->Users_model->create();
	}
	
	public function detail($u = null)
	{
		$data['page_header'] = "User Detail";
		
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