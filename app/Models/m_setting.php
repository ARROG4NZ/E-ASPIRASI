<?php namespace App\Models;
use CodeIgniter\Model;

class m_setting extends Model
{
	protected $table = "admin";
    protected $primaryKey = "username";
	protected $allowedFields = ['password','nama'];

    // //function buat ambil user
    // public function getuser($username){
    //     $this->db->where('username',$username);
    //     return $this->db->get('admin')->row();
    // }

    //function ngeset value row password database dari form password baru

}