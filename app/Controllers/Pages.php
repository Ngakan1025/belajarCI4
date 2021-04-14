<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua', 'tiga'],
            'isi' => 'pages/home'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'nama' => 'Ngakan Made Krisna Sedana',
            'nim' => '1915101025',
            'kelas' => 'Ilmu Komputer 4A',
            'isi' => 'pages/about'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Merpati No. 3',
                    'kota' => 'Gianyar'
                ],
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'Jl. Udayana No. 11',
                    'kota' => 'Buleleng'
                ]
            ],
            'isi' => 'pages/contact'
        ];
        return view('layout/v_wrapper', $data);
    }
}