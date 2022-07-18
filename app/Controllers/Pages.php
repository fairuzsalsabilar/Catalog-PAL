<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('pages/home');
    }

    public function home()
    {
        echo view('pages/input');
    }

    public function input(){
        // echo view('pages/input');
    }

    public function caripengguna(){
        
    }
    
    public function login(){

    }

    public function crud(){

    }
}
