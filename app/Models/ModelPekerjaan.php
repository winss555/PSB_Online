<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPekerjaan extends Model
{
    public function getAllData()
    {
        return $this->db->table('tbl_pekerjaan')
        ->orderBy('id_pekerjaan', 'ASC')
        ->get()
        ->getResultArray();

    }

    public function insertData($data)
    {
        $this->db->table('tbl_pekerjaan')->insert($data);
    }
}
