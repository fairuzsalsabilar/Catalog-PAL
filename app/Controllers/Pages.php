<?php namespace App\Controllers;

use App\Models\M_DataEx;

class Pages extends BaseController
{
    protected $Model_DataEX;

    public function __construct()
    {
        $this->Model_DataEX = new M_DataEx();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_dataex') ? $this->request->getVar('page_dataex') : 
        1;

        $keyword = $this->request->getVar('keyword');
        
        $kategori = $this->request->getVar('keyword');
        $proyek = $this->request->getVar('proyek');
        $tahun = $this->request->getVar('tahun');
        if($keyword){
            
            $dt_catalog = $this->Model_DataEX->search($keyword);
            
        } else {
            $dt_catalog = $this->Model_DataEX;
        }

        $data = [
            'title' => 'CRUD Admin',
            'data' => $dt_catalog->paginate(10, 'dataex'),
            'pager' => $this->Model_DataEX->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/crud', $data);
    }

    public function home()
    {
        return view('pages/home');
    }

    public function input()
    {
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pages/input', $data);
    }

    // Proses input data
    public function save(){

        //Validasi Form
        if (!$this->validate([
            // 'label' => 'required|is_unique[dataex.label]',
            'label' => [
                'rules' => 'required|is_unique[dataex.label]',
                'errors' => [
                    'required' => '{field} Label Harus Terisi!',
                    'is_unique' => '{field} Label Sudah Tersimpan'
                ]
            ],
            'reff_kontrak' => [
                'rules' => 'required|is_unique[dataex.reff_kontrak]',
                'errors' => [
                    'required' => '{field} Reff Kontrak Harus Terisi!',
                    'is_unique' => '{field} Reff Kontrak Sudah Tersimpan'
                ]
            ],
            'judul_dokumen' => [
                'rules' => 'required|is_unique[dataex.judul_dokumen]',
                'errors' => [
                    'required' => '{field} Judul Dokumen Harus Terisi!',
                    'is_unique' => '{field} Judul Dokumen Sudah Tersimpan'
                ]
            ],
            'judul_proyek' => [
                'rules' => 'required|is_unique[dataex.judul_proyek]',
                'errors' => [
                    'required' => '{field} Judul Proyek Harus Terisi!',
                    'is_unique' => '{field} Judul Proyek Sudah Tersimpan'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/input')->withInput()->with('validation', $validation);
        }
        
        $this->Model_DataEX->save([
            'label' => $this->request->getVar('label'),
            'reff_kontrak' => $this->request->getVar('reff_kontrak'),
            'tanggal' => $this->request->getVar('tanggal'),
            'penyedia' => $this->request->getVar('penyedia'),
            'judul_dokumen' => $this->request->getVar('judul_dokumen'),
            'judul_proyek' => $this->request->getVar('judul_proyek')
        ]);

        session()->setFlashdata('pesan', 'Data Telah Tersimpan.');
        return redirect()->to('/');
    }

    public function editBerkas($id)
    {
        // session();
        $dt_catalog = $this->Model_DataEX;
        $data = [
            'validation' => \Config\Services::validation(),
            'berkas' => $dt_catalog->where('id_berkas', $id)->first()
        ];

        return view('pages/editBerkas', $data);
    }

    // Proses Update Berkas
    public function update($id){

        $this->Model_DataEX->save([
            'id_berkas' => $id,
            'label' => $this->request->getVar('label'),
            'reff_kontrak' => $this->request->getVar('reff_kontrak'),
            'tanggal' => $this->request->getVar('tanggal'),
            'penyedia' => $this->request->getVar('penyedia'),
            'judul_dokumen' => $this->request->getVar('judul_dokumen'),
            'judul_proyek' => $this->request->getVar('judul_proyek')
        ]);

        session()->setFlashdata('pesan', 'Edit Data Berkas Berhasil.');
        return redirect()->to('/');
    }

    public function delete($id){
        $this->Model_DataEX->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/');
    }

    public function caripengguna(){
        return view('pages/caripengguna');
    }
    
    public function login(){
        return view('pages/login');
    }

    public function crud(){
        return view('pages/crud');

    }
}
