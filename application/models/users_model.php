<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	
	public function create()
	{
		
	}
	
	public function read($u = null)
	{
		$this->db
			->select('*')
			->from('user_info');
		
		if (isset($u) && !empty($u))
		{
			// FYI: I tend to change id field names when they'll be visible
			// in URLs for added security - so the actual field name won't 
			// be readily given out to the world. 
			$this->db->where(array('uid' => $u));
		}
		
		$qry = $this->db->get();
		
		return $qry->row_array();
	}
	
	public function update()
	{
		
	}
	
	public function delete()
	{
		
	}
}