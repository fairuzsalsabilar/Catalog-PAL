<?php namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model{
    protected $table = "login";
    protected $allowedFields = ['USERNAME', 'PASSWORD'];

    public function login($username){
        $builder = $this->table('login');
        $builder->Like('USERNAME', $username);
        // $query = $builder->getWhere['label' => $keyword];
        return $builder;
    }
}