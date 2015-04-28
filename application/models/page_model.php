<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model
{
	public function insert($tabla, $params)
	{
		$this->db->insert($tabla, $params);
	}
}