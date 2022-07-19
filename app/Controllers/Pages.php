<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('pages/crud');
    }

    public function home()
    {
        echo view('pages/home');
    }

    public function input(){
        echo view('pages/input');
    }

    public function caripengguna(){
        echo view('pages/caripengguna');
    }
    
    public function login(){
        echo view('pages/login');
    }

    public function crud(){
        echo view('pages/crud');

    }
}
