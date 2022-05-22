<?php

namespace App\Controllers;

use App\Models\m_setting;

class setting extends BaseController
{
    public function index()
    {
        return view('setting/setting');
    }
    
    public function changepass(){
        $m_setting = new m_setting();
        $username = session()->get('username');
        $password = session()->get('password');
        if($this->request->getPost('password_lama') == session()->get('password')){
             $m_setting->update(session()->get('username'),[
               'password' => $this->request->getPost('password_baru')
            ]); 
            session()->set([
                    'username' => $username,
                    'password' => $this->request->getPost('password_baru'),
                    'logged_in' => TRUE
                ]); 
        }
        else{
        session()->setFlashdata('msg', 'password lama salah');
        }
        return redirect()->to(base_url(('setting')));
    }
}