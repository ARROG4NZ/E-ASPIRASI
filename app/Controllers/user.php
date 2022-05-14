<?php
namespace App\Controllers;
class user extends BaseController{
    public function index (){
        return view('user/home');
    }
    public function aspirasi(){
        return view('user/aspirasi');
    }
}
?>