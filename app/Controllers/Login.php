<?php namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController{

    protected $Model_ModelLogin;

    public function __construct()
    {
        $this->Model_ModelLogin = new ModelLogin();
    }
    
    public function index(){
        return view('pages/home');
    }

    public function login(){
        $user = new ModelLogin();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $user->get_data($username, $password);

        if(!empty($cek)){
            if($cek[0]['USERNAME']==$username && $cek[0]['PASSWORD']==$password){
            session()->set('USERNAME', $cek[0]['USERNAME']);
            session()->set('PASSWORD', $cek[0]['PASSWORD']);
            return redirect()->to('/crud');
        } else {
            $this->session()->setFlashdata('gagal', 'Username atau Password yang anda masukkan salah');
            return redirect()->to('/login');
        }
    }

        return view('pages/home');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        $session->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to('/');
    }
}