<?php namespace App\Controllers;

class Login extends BaseController{

    public function login(){
        $user = new ModelLogin();
        $username = $this-> request->getVar('username');
        $password = $this-> request->getVar('password');
        $login = $ModelLogin -> $login($username);
        
        if(!empty($this->request->getPost())){
            if($login['username']==$username && $login['password']){
                echo view('pages/login');
            }else{
                echo view('pages/crud');
            }
        }
    }

    public function save(){
        // validasi login
        if(!$this -> validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect() -> to('pages/home') -> withInput() -> with('validation'. $validation);
        }
    }
    // public function index() {
    //     $ModelLogin = new \App\Models\ModelLogin();
    //     $login = $this->request->getVar('login');
    //     if ($login){
    //         $username = $this->request->getVar('username');
    //         $password = $this->request->getVar('password');
            
    //         $data = $ModelLogin->login($username);
    //         if ($username == $data['username'] && $password == $data['password']){
    //             return view ('/pages/crud');
    //         }

    //         if ($username == '' or $password == '') {
    //             $err = "Silahkan masukkan username dan password anda";
    //         }

    //         if ($err){
    //             session()->setFlashdata('error', $err);
    //             return redirect()->to("login");
    //         }
    //     }
    //     return view('/pages/crud');
    // }
}