<?php
namespace App\Controllers;

use App\Models\aspirasimodel;

class user extends BaseController{
    public function index (){
        return view('user/home');
    }
    public function aspirasi(){
        return view('user/aspirasi_awal');
    }
    public function aspirasi_proses(){
        //mencari aspirasi
        $aspirasimodel = new aspirasimodel();
        //mendapatkan kode unik dari view
        $kode_unik = $this->request->getVar('cari_keywoard');
       
        $data = $aspirasimodel->getsearchdata($kode_unik);
        // var_dump($data);
        return view('/user/aspirasi',compact('data'));
        
    }
    public function membuat_aspirasi(){
        return view('user/membuat_aspirasi');
    }
    public function membuat_aspirasi_proses(){
        //mendapat aspirasi
        $asp = $this->request->getVar('aspirasi');

        $aspirasi = new aspirasimodel();
        //generate kodee unik
        $code = $aspirasi->createcode();
        $boo = 'salah';
        var_dump($aspirasi->insert([ 
            'kode_unik' => $code,
            'aspirasi'  => $asp,
            'status'  => $boo,
        ]));
        return redirect()->to(base_url('user/setelah_membuat'));        
    }
    public function setelah_membuat(){
        $aspirasi = new aspirasimodel();
        $new_data = $aspirasi->getlastdata();
        return view('user/setelah_membuat',compact('new_data'));
    }
}
?>