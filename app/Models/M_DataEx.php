<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_DataEx extends Model
{
    protected $table = 'data_catalog';
    protected $primaryKey = 'ID_BERKAS';
    protected $allowedFields = ['ID_BERKAS', 'LABEL', 'JUDUL_DOKUMEN', 'JUDUL_PROYEK', 
    'PENYEDIA', 'TANGGAL', 'REFF_KONTRAK', 'FILE'];
 
    public function getAllData()
    {
        return $this->findAll();
        // $builder = $db->table('data_catalog');
        // $builder->select('*');
        // $builder->join('data_catalog', 'data_catalog.ID_BERKAS = data_catalog.ID_BERKAS', 'left');
        // $query = $builder->get();
    }
 
    // public function search($keyword){
    //     $builder = $this->table('data_catalog');
    //     $builder->Like('LABEL', $keyword);
    //     $builder->orLike('JUDUL_DOKUMEN', $keyword);
    //     $builder->orLike('JUDUL_PROYEK', $keyword);
    //     $builder->orLike('PENYEDIA', $keyword);
    //     $builder->orLike('TANGGAL', $keyword); 
    //     $builder->orLike('REFF_KONTRAK', $keyword);
    //     // $query = $builder->getWhere['label' => $keyword];

    //     return $builder;
    // }

    public function search_label($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('LABEL', $keyword);

        return $builder;
    }

    public function search_jDokumen($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('JUDUL_DOKUMEN', $keyword);

        return $builder;
    }

    public function search_jProyek($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('JUDUL_PROYEK', $keyword);

        return $builder;
    }

    public function search_tanggal($keyword){
        $builder = $this->table('data_catalog');
        $builder->Like('TANGGAL', $keyword);

        return $builder;
    }
}