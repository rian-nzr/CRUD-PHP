<?php

namespace App\Controllers;

use App\Models\KomikModel;

class komik extends Basecontroller
{
    protected $KomikModel;
    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }

    public function index()
    {
        // $komik = $this->KomikModel->findAll();
        $data = [
            'title' => 'Home | halaman pertama',
            'komik' => $this->KomikModel->getKomik()
        ];
        //cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }
        return view('komik/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Home | halaman pertama',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul ini ' . $slug . ' tidak ada');
        }

        return view('komik/detail', $data);

        // $komik = $this->KomikModel->getKomik($slug);
        // dd($komik);
    }
    // public function coba()
    // {
    //     $data = [
    //         'title' => 'from'
    //     ];

    //     return view('komik/coba', $data);
    // }

    public function save()
    {

        if (!$this->validate([
            'judul' => 'required|is_unique[komik.judul]'
        ])) {
            return redirect()->to('/');
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'berhasil di simpang');

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        $this->KomikModel->delete($id);
        session()->setFlashdata('pesan', 'berhasil di hapus');

        return redirect()->to('/komik');
    }
}
