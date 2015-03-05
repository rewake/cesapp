<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	
	public function create()
	{
		
	}
	
	public function read($u = null)
	{
		$this->db
			->select('name_full, email, fav_color')
            ->select('date_format(`dob`, "%W, %M %e, %Y") as `dob`', false)
			->from('user_info');
		
		if (isset($u) && !empty($u))
		{
			// FYI: I tend to change id field names when they'll be visible
			// in URLs for added security - so the actual field name won't 
			// be readily given out to the world. 
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
		
	}
}