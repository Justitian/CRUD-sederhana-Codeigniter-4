<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('mahasiswa')->get();
    }

    function simpan($data)
    {
        return $this->db->table('mahasiswa')->insert($data);
    }

    function hapusdata($npm) 
    {
        return $this->db->table('mahasiswa')->delete(['jurusan' => $npm]);
    }

    function ambildata($npm) 
    {
        return $this->db->table('mahasiswa')->delete(['npm' => $npm]);
    }

}
