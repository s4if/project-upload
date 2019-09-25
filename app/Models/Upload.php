<?php namespace App\Models;

class Upload
{
	protected $db;

	function __construct()
	{
		$this->db = \Config\Database::connect();
	}

	public function simpan($data)
	{
		$builder = $this->db->table('upload_data');
		$builder->insert($data);
		return ($this->db->affectedRows() > 0);
	}

	public function getTugas($id_tugas)
	{
		$builder = $this->db->table('upload_data');
	}
}
