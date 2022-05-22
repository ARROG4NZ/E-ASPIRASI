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
        $change = $m_setting->getuser($this->session->userdata('username'));
        
        if($this->input->post('password_lama') == $change->password){
            if($this->$m_setting->changepass()){
                $this->session->set_flashdata('msg', 'password berhasil diganti');
            }
            else{$this->session->set_flashdata('msg', 'password gagal diganti');}
        }
        else{$this->session->set_flashdata('msg', 'password lama salah');}
    }
}
