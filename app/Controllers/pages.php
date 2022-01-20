<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | halaman pertama'
        ];
        // echo view('layout/header', $data);
        return view('pages/beranda', $data);
        // echo view('layout/footer');

        // echo "hello world $this->nama";
    }


    public function about()
    {
        $data = [
            'title' => 'About | halaman kedua'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact | halaman ketiga',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => "lapang barat",
                    'kota' => 'lhoksemawe'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => "lapang hjklt",
                    'kota' => 'gvbjko[e'
                ]
            ]
        ];

        return view('/pages/contact', $data);
    }
}
