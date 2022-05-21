<?php
namespace App\Controllers;
use App\Models\m_aspirasi;

class dataaspirasi extends BaseController
{
   public function index()
   {
      if(session()->get('logged_in')==true){
         $dataaspirasi = new m_aspirasi();
         $data = $dataaspirasi->getallaspriasi();
         return view('dataaspirasi/home', compact('data'));
         
      }else{
         session()->setFlashdata('gagal','Anda belum login');
         return redirect()->to(base_url('login'));
      }
     
      
   }
   public function delete($kode_unik){
      $dataaspirasi = new m_aspirasi();
      $del = $dataaspirasi->delete($kode_unik);
      $session = session();
      $session->setFlashdata("success", "Member berhasil di hapus");
      return redirect()->to(base_url('dataaspirasi'));
 
   }
   public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}