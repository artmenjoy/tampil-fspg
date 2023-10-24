<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table_kegiatan extends CI_Model
{
	private $table = "kegiatan";

	public function __construct()
	{
		parent::__construct();
	}

	public function get($id)
	{
		$this->db->where($id);
		return $this->db->get($this->table)->row();
	}

	public function update($id, $data)
	{
		$this->db->where($id);
		$this->db->update($this->table, $data);
	}
}
