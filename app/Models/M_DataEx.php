<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_DataEx extends Model
{
    protected $table = 'data_catalog';
    protected $primaryKey = 'id_berkas';
    protected $allowedFields = ['id_berkas', 'label', 'judul_dokumen', 'judul_proyek', 
    'penyedia', 'tanggal', 'reff_kontrak'];
 
    public function getAllData()
    {
        return $this->findAll();
    }
 
    public function search($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('label', $keyword);
        $builder->orLike('judul_dokumen', $keyword);
        $builder->orLike('judul_proyek', $keyword);
        $builder->orLike('penyedia', $keyword);
        $builder->orLike('tanggal', $keyword); 
        $builder->orLike('reff_kontrak', $keyword);
        // $query = $builder->getWhere['label' => $keyword];
        return $builder;
    }
}