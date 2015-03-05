<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	
	public function create()
	{
		$insData = array(
			'name_full'	=> $this->input->post('name_full'),
			'dob'		=> $this->input->post('dob'),
			'email'		=> $this->input->post('email'),
			'fav_color'	=> $this->input->post('fav_color'),
			'date_created' => date("Y-m-d H:i:s")
		);
		
		// TODO: load view / push to new route
		return $this->db->insert('user_info', $insData);
	}
	
	public function read($u = null)
	{
		$this->db
			->select('name_full, email, fav_color')
            ->select('date_format(`dob`, "%W, %M %e, %Y") as `dob`', false)
			->from('user_info');
		
		if (isset($u) && !empty($u))
		{
			$this->db->where(array('uid' => $u));
		}
		
		$qry = $this->db->get();
		
		return $qry->result_array();
	}
	
	public function update()
	{
		
	}
	
	public function delete()
	{
		return $this->db->delete('user_info', array('uid' => $this->input->post('u')));
	}
}