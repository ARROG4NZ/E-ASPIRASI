<?php namespace App\Models;
use CodeIgniter\Model;

class m_aspirasi extends Model
{
	protected $table = "table_aspirasi";
    protected $primaryKey = "kode_unik";
	protected $allowedFields = ['kode_unik','aspirasi','status','date'];
	
	public function getallaspriasi(){
        return $this->findAll();
    }

}