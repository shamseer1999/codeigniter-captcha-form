<?php

class Captcha_model extends CI_Model
{
	function insert($data)
	{
		$this->db->insert('user_data', $data);
	}
}