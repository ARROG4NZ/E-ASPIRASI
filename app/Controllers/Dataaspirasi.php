<?php

namespace App\Controllers;

use App\Models\m_aspirasi;

class dataaspirasi extends BaseController
{
   public function index()
   {
      if(session()->get('username')==''){
         session()->setFlashdata('gagal','Anda belum login');
         return redirect()->to(base_url('login'));
      }
      $dataaspirasi = new m_aspirasi();
      $data = $dataaspirasi->getallaspriasi();
       return view('dataaspirasi/home', compact('data'));
   }

}