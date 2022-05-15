<?php
namespace App\Controllers;
class user extends BaseController{
    public function index (){
        return view('user/home');
    }
    public function aspirasi(){
        return view('user/aspirasi');
    }
    public function membuat_aspirasi(){
        return view('user/membuat_aspirasi');
    }
    public function setelah_membuat(){
        return view('user/setelah_membuat');
    }
}
?>