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
        return view('pages/home');
    }
    
    public function caripengguna(){
        $currentPage = $this->request->getVar('page_data_catalog') ? $this->request->getVar('page_data_catalog') : 
        1;

        $keyword = $this->request->getVar('keyword');
        
        $kategori = $this->request->getVar('kategori');
        $proyek = $this->request->getVar('proyek');
        $tahun = $this->request->getVar('tahun');

        if($kategori === 'LABEL'){
        
            $dt_catalog = $this->Model_DataEX->search_label($keyword);
            
        } elseif ($kategori === 'JUDUL_DOKUMEN'){

            $dt_catalog = $this->Model_DataEX->search_jDokumen($keyword);
            
        } elseif ($kategori === 'JUDUL_PROYEK'){

            $dt_catalog = $this->Model_DataEX->search_jProyek($keyword);

        } elseif ($kategori === 'TANGGAL'){

            $dt_catalog = $this->Model_DataEX->search_tanggal($keyword);

        } else {

            $dt_catalog = $this->Model_DataEX;
        }

        $data = [
            'title' => 'Cari Pengguna',
            'data' => $dt_catalog->paginate(10, 'data_catalog'),
            'pager' => $dt_catalog->pager,
            'currentPage' => $currentPage
        ];

        return view('pages/caripengguna', $data);
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
            // 'label' => 'required|is_unique[data_catalog.label]',
            'label' => [
                'rules' => 'required|is_unique[data_catalog.LABEL]',
                'errors' => [
                    'required' => '{field} Label Harus Terisi!',
                    'is_unique' => '{field} Label Sudah Tersimpan'
                ]
            ],
            'reff_kontrak' => [
                'rules' => 'required|is_unique[data_catalog.REFF_KONTRAK]',
                'errors' => [
                    'required' => '{field} Reff Kontrak Harus Terisi!',
                    'is_unique' => '{field} Reff Kontrak Sudah Tersimpan'
                ]
            ],
            'judul_dokumen' => [
                'rules' => 'required|is_unique[data_catalog.JUDUL_DOKUMEN]',
                'errors' => [
                    'required' => '{field} Judul Dokumen Harus Terisi!',
                    'is_unique' => '{field} Judul Dokumen Sudah Tersimpan'
                ]
            ],
            'judul_proyek' => [
                'rules' => 'required|is_unique[data_catalog.JUDUL_PROYEK]',
                'errors' => [
                    'required' => '{field} Judul Proyek Harus Terisi!',
                    'is_unique' => '{field} Judul Proyek Sudah Tersimpan'
                ]
            ]
            // 'file' => [
            //     'rules' => 'max_size[data_catalog.FILE,10024]|is_unique[data_catalog.FILE]|ext_in[data_catalog.FILE,pdf,docx]',
            //     'errors' => [
            //         'is_unique' => '{field} FILE Sudah Tersimpan',
            //         'ext_in' => "Format tidak didukung",
            //         'max_size' => 'Ukuran File Maksimal 10 MB'
            //     ]    
            // ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/input')->withInput()->with('validation', $validation);
        }
        $file = $this->request->getFile('file');
        $nama = $this->upload($file, $this->request->getVar('judul_dokumen'));
        if($nama!=null){
            $this->Model_DataEX->save([
                'LABEL' => $this->request->getVar('label'),
                'REFF_KONTRAK' => $this->request->getVar('reff_kontrak'),
                'TANGGAL' => $this->request->getVar('tanggal'),
                'PENYEDIA' => $this->request->getVar('penyedia'),
                'JUDUL_DOKUMEN' => $this->request->getVar('judul_dokumen'),
                'JUDUL_PROYEK' => $this->request->getVar('judul_proyek'),
                'FILE' => $nama
            ]);

            session()->setFlashdata('pesan', 'Data Telah Tersimpan.');
            return redirect()->to('/crud');
            }
        else{
            session()->setFlashdata('pesan', 'Data Gagal Tersimpan.');
            return redirect()->to('/crud');
        }
    }

    public function upload($files, $nama)
    {
        $file = $files;
        $ext = $file->getClientExtension();// Mengetahui extensi File
        
        helper('filesystem'); // Load Helper File System
        $direktori = ROOTPATH.'public/upload'; //definisikan direktori upload
        $namabaru = $nama.'.'.$ext; //definisikan nama fiel yang baru
        $map = directory_map($direktori, FALSE, TRUE); // List direktori

        /* Cek File apakah ada */
        foreach ($map as $key) {
            if ($key == $namabaru){
                delete_files($direktori,$namabaru);
            }
        } //Hapus terlebih dahulu jika file ada
        $path = $file->move($direktori, $namabaru);
        if ($path) {
            return $namabaru;
        }
    }

    public function editBerkas($id)
    {
        // session();
        
        $dt_catalog = $this->Model_DataEX;
        $data = [
            'validation' => \Config\Services::validation(),
            'berkas' => $dt_catalog->where('ID_BERKAS', $id)->first(),

        ];

        return view('pages/editBerkas', $data);
    }

    // Proses Update Berkas
    public function update($id){
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'label' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Label Harus Terisi!'
                ]
            ],
            'reff_kontrak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Reff Kontrak Harus Terisi!'
                ]
            ],
            'judul_dokumen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Judul Dokumen Harus Terisi!'
                ]
            ],
            'judul_proyek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Judul Proyek Harus Terisi!'
                ]
            ]
        ]);

        if(!$validation) {

            //model initialize
            $dt_catalog = $this->Model_DataEX;

            //render view with error validation message
            return view('pages/editBerkas', [
                'berkas' => $dt_catalog->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            // $postModel = new PostModel();
            
            //insert data into database
            if($this->request->getFile('file')==NULL){
                $this->Model_DataEX->update($id, [
                    'LABEL' => $this->request->getPost('label'),
                    'REFF_KONTRAK' => $this->request->getPost('reff_kontrak'),
                    'TANGGAL' => $this->request->getPost('tanggal'),
                    'PENYEDIA' => $this->request->getPost('penyedia'),
                    'JUDUL_DOKUMEN' => $this->request->getPost('judul_dokumen'),
                    'JUDUL_PROYEK' => $this->request->getPost('judul_proyek')
                ]);
                session()->setFlashdata('pesan', 'Data Gagal Diubah.');
                return redirect()->to('/crud');
        }
            else{
                $file = $this->request->getFile('file');
                $nama = $this->upload($file, $this->request->getVar('judul_dokumen'));
                if($nama!=null){
                    $this->Model_DataEX->update($id, [
                        'LABEL' => $this->request->getVar('label'),
                        'REFF_KONTRAK' => $this->request->getVar('reff_kontrak'),
                        'TANGGAL' => $this->request->getVar('tanggal'),
                        'PENYEDIA' => $this->request->getVar('penyedia'),
                        'JUDUL_DOKUMEN' => $this->request->getVar('judul_dokumen'),
                        'JUDUL_PROYEK' => $this->request->getVar('judul_proyek'),
                        'FILE' => $nama
                    ]);
                    //flash message        
                    session()->setFlashdata('pesan', 'Data Behasil Diubah.');
                    return redirect()->to('/crud');
                    }
                else{
                    //flash message
                    session()->setFlashdata('pesan', 'Data Gagal Diubah.');
                    return redirect()->to('/crud');
                }
            }
        }

        // $this->Model_DataEX->save([
            // 'id_berkas' => $id,
            // 'label' => $this->request->getPost('label'),
            // 'reff_kontrak' => $this->request->getPost('reff_kontrak'),
            // 'tanggal' => $this->request->getPost('tanggal'),
            // 'penyedia' => $this->request->getPost('penyedia'),
            // 'judul_dokumen' => $this->request->getPost('judul_dokumen'),
            // 'judul_proyek' => $this->request->getPost('judul_proyek')
        // ]);

        // session()->setFlashdata('pesan', 'Edit Data Berkas Berhasil.');
        // return redirect()->to('/');
    }

    public function delete($id){
        $this->Model_DataEX->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/crud');
    }

    // public function caripengguna(){
    //     $currentPage = $this->request->getVar('page_data_catalog') ? $this->request->getVar('page_data_catalog') : 
    //     1;

    //     $keyword = $this->request->getVar('keyword');
        
    //     $kategori = $this->request->getVar('keyword');
    //     $proyek = $this->request->getVar('proyek');
    //     $tahun = $this->request->getVar('tahun');
    //     if($keyword){
        
    //         $dt_catalog = $this->Model_DataEX->search($keyword);
            
    //     } else {
    //         $dt_catalog = $this->Model_DataEX;
    //     }
    //     $data = [
    //         'title' => 'Cari Pengguna',
    //         'data' => $dt_catalog->paginate(10, 'data_catalog'),
    //         'pager' => $dt_catalog->pager,
    //         'currentPage' => $currentPage
    //     ];
    //     return view('pages/caripengguna', $data);
    // }

    public function crud(){
        $currentPage = $this->request->getVar('page_data_catalog') ? $this->request->getVar('page_data_catalog') : 
        1;

        $keyword = $this->request->getVar('keyword');
        $kategori = $this->request->getVar('kategori');
        $proyek = $this->request->getVar('proyek');
        $tahun = $this->request->getVar('tahun');

        if($kategori === 'LABEL'){
        
            $dt_catalog = $this->Model_DataEX->search_label($keyword);
            
        } elseif ($kategori === 'JUDUL_DOKUMEN'){

            $dt_catalog = $this->Model_DataEX->search_jDokumen($keyword);
            
        } elseif ($kategori === 'JUDUL_PROYEK'){

            $dt_catalog = $this->Model_DataEX->search_jProyek($keyword);

        } elseif ($kategori === 'TANGGAL'){

            $dt_catalog = $this->Model_DataEX->search_tanggal($keyword);

        } else {

            $dt_catalog = $this->Model_DataEX;

        }

        $data = [
            'title' => 'CRUD',
            'data' => $dt_catalog->paginate(10, 'data_catalog'),
            'pager' => $dt_catalog->pager,
            'currentPage' => $currentPage
        ];
        
        return view('pages/crud', $data);

    }
}
