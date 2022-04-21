<?php

/**
 * 
 */
class User_model extends CI_Model
{	
	function __construct()
	{
		parent::__construct();
	}

	public function getUsers()
	{
		return $this->db->get('users')->result();
	}
}

?>