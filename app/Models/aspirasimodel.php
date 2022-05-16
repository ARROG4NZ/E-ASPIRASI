<?php 
namespace App\Models;
use CodeIgniter\Model;

class aspirasimodel extends Model{
    protected $table = "table_aspirasi";
    protected $primaryKey = "kode_unik";
    protected $useTimestamps = false;
    protected $allowedFields = ['kode_unik', 'aspirasi','status'];
    public function getlastdata(){
        $this->select('*');
        $this->orderBy("kode_unik","DESC");
        $querry = $this->first();  
        return $querry;
    }
    public function getsearchdata($kode_unik){
        $this->select('*');
        $this->where('kode_unik', $kode_unik);
        $querry = $this->first();
        return $querry;
    }
    public function createcode(){
        // $this->select('kode_unik');
        $this->select('kode_unik');
        $this->orderBy("kode_unik","DESC");
        $querry = $this->first();
        // compact($querry);
        $code = substr($querry['kode_unik'], 4,3);
        $code = $code + 1;
         if($code <= 9){
            $result = "asp-00".$code;
        }
        if($code > 9){
            $result = "asp-0".$code;
        }
        if($code > 99){
            $result = "asp-".$code;
        }
        return $result;
    }
    
}