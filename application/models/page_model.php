<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model
{
	public function insert($tabla, $params)
	{
		$this->db->insert($tabla, $params);
	}

	public function recent_post()
	{
		$this->db->from('diario_blog');
		$this->db->order_by('id_post','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	public function recent_post_five()
	{	
		$this->db->select('id_post, titulo, short_title');
		$this->db->from('diario_blog');
		$this->db->order_by('id_post','desc');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}

	public function indice_post()
	{
		$this->db->from('diario_blog');
		$this->db->order_by('id_post','desc');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();
	}

	public function read_post($table, $params)
	{
		$this->db->from($table);
		$this->db->where($params);
		$query = $this->db->get();
		return $query->row();
	}
}