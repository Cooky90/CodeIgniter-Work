<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Model

{
	public function __construct()
	{
		parent::__construct();
	}


	public function create($data)
	{
		if($this->db->insert('posts', $this->db->escape_str($data)))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_posts()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('posts');
		return $query->result_array();
	}

	public function view_post($id)
	{
		$query = $this->db->get_where('posts',array('id'=>$id));
		return $query->row_array();
	}
}

