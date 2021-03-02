<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelMahasiswa;
use Config\View;

class Mahasiswa extends Controller
{
    public function index()
    {
        $mhs = new ModelMahasiswa();
        $data = [
            'tampildata' => $mhs->tampildata()->getResult()
        ];
        echo View('viewtampilmahasiswa', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo View('viewformtambah');
    }

    public function simpandata()
    {
        $data = [
            'npm' => $this->request->getpost('Npm'),
            'password' => $this->request->getpost('Password'),
            'nama' => $this->request->getpost('Nama'),
            'jurusan' => $this->request->getpost('Jurusan'),
            'ipk' => $this->request->getpost('Ipk'),
        ];

        $mhs = new ModelMahasiswa();
        $simpan = $mhs->simpan($data);

        if ($simpan) {
            return redirect()->to('/mahasiswa/index');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $npm = $uri->getSegment('3');
        $mhs = new ModelMahasiswa();
        $mhs->hapusdata($npm);
        return redirect()->to('/mahasiswa/index');
    }

    public function edit()
    {
        helper('form');
        $uri = service('uri');
        $npm = $uri->getSegment('3');
        $mhs = new ModelMahasiswa();
        $mhs->hapusdata($npm);
        echo View('viewformedit');
    }
}
