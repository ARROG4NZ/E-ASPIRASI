<?php namespace App\Controllers;

use App\Models\m_admin;

class Login extends BaseController{
    public function index(){
     return view('login/index');
    } 
    
    public function process()
    {
        $madmin = new m_admin();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $madmin->get_data($username, $password);

        if ((isset($cek['username']) == $username) && (isset($cek['password']) == $password))
        {
            session()->set('username', $cek['username']);
            session()->set('nama', $cek['nama']);
            return redirect()->to(base_url('dataaspirasi'));
        } 
        else{
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->back();
        }
    }

    public function logout() 
    {
       session()->destroy();
       return redirect()->to(base_url('login'));
    }
}
?>
