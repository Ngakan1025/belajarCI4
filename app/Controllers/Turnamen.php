<?php

namespace App\Controllers;

use App\Models\TurnamenModel;

class Turnamen extends BaseController
{
    protected $turnamenModel;
    public function __construct()
    {
        $this->turnamenModel = new TurnamenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Klasemen Turnamen',
            'turnamen' => $this->turnamenModel->getTurnamen(),
            'total' => $this->turnamenModel->getTotal(),
            // 'max' => $this->turnamenModel->select_max(),
            // 'min' => $this->turnamenModel->select_min(),
            // 'avg' => $this->turnamenModel->select_avg(),
            // 'sum' => $this->turnamenModel->select_sum(),
            'isi' => 'turnamen/index'
        ];

        return view('layout/v_wrapper', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Klasemen Turnamen',
            'turnamen' => $this->turnamenModel->getTurnamen($slug),
            'isi' => 'turnamen/detail'
        ];

        // jika turnamen tidak ada di tabel
        if (empty($data['turnamen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('team ' . $slug . ' tidak ditemukan.');
        }

        return view('layout/v_wrapper', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Turnamen',
            'validation' => \Config\Services::validation(),
            'isi' => 'turnamen/create'
        ];

        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'team' => 'required|is_unique[turnamen.team]'
        ])) {
            return redirect()->to('layout/v_wrapper')->withInput();
        }

        $slug = url_title($this->request->getVar('poin'), '-', true);
        $this->turnamenModel->save([
            'team' => $this->request->getVar('team'),
            'slug' => $slug,
            'menang' => $this->request->getVar('menang'),
            'kalah' => $this->request->getVar('kalah'),
            'poin' => $this->request->getVar('poin')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/turnamen');
    }

    public function delete($id)
    {
        $this->turnamenModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/turnamen');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Data Turnamen',
            'validation' => \Config\Services::validation(),
            'turnamen' => $this->turnamenModel->getTurnamen($slug),
            'isi' => 'turnamen/edit'
        ];

        return view('layout/v_wrapper', $data);
    }

    public function update($id)
    {
        // cek team
        $turnamenLama = $this->turnamenModel->getTurnamen($this->request->getVar('slug'));
        if ($turnamenLama['team'] == $this->request->getVar('team')) {
            $rule_team = 'required';
        } else {
            $rule_team = 'required|is_unique[turnamen.team]';
        }

        if (!$this->validate([
            'team' => //'required|is_unique[turnamen.team]'
            [
                'rules' => $rule_team,
                'errors' => [
                    'required' => '{field} turnamen harus diisi.',
                    'is_unique' => '{field} turnamen sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/layout/v_wrapper/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('team'), '-', true);
        $this->turnamenModel->save([
            'id' => $id,
            'team' => $this->request->getVar('team'),
            'slug' => $slug,
            'menang' => $this->request->getVar('menang'),
            'kalah' => $this->request->getVar('kalah'),
            'poin' => $this->request->getVar('poin')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/turnamen');
    }
}