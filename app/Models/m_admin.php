<?php namespace App\Models;
use CodeIgniter\Model;

class m_admin extends Model
{
	protected $table = "admin";
    protected $primaryKey = "username";
	protected $allowedFields = ['password','nama'];
	
	public function get_data($username, $password)
	{
      return $this->db->table('admin')
      ->where(array('username' => $username, 'password' => $password))
      ->get()->getRowArray();
	}

}