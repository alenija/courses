<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class users_model extends CI_Model 
	{

        public function get_users()
		{
            $query = $this->db->get('users');
            return $query->result_array();
		}
	}
