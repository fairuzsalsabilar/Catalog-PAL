<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_DataEx extends Model
{
    protected $table = 'data_catalog';
    protected $primaryKey = 'ID_BERKAS';
    protected $allowedFields = ['ID_BERKAS', 'LABEL', 'JUDUL_DOKUMEN', 'JUDUL_PROYEK', 
    'PENYEDIA', 'TANGGAL', 'REFF_KONTRAK'];
 
    public function getAllData()
    {
        return $this->findAll();
    }
 
    public function search($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('LABEL', $keyword);
        $builder->orLike('JUDUL_DOKUMEN', $keyword);
        $builder->orLike('JUDUL_PROYEK', $keyword);
        $builder->orLike('PENYEDIA', $keyword);
        $builder->orLike('TANGGAL', $keyword); 
        $builder->orLike('REFF_KONTRAK', $keyword);
        // $query = $builder->getWhere['label' => $keyword];

        return $builder;
    }
}
