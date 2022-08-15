<?php namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model{
    protected $table = 'login';
    protected $allowedFields = ['USERNAME', 'PASSWORD'];

    public function get_data($username, $password){
        $this->db->table('login');
        // $this->db->query("select * from login where USERNAME = 'adminkawasan' and where PASSWORD = 'adminkawasan123'");
        $data = $this->select()->where('USERNAME',$username)->where('PASSWORD', $password)->get()->getResultArray();
        return $data;
    }
    
}