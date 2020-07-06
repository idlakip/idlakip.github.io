<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'tbl_peserta';
    // protected $useTimestamps = true;



    public function insert_daftar($data)
    {
        return $this->db->table('tbl_peserta')->insert($data);
    }

    public function edit_daftar($id)
    {
        return $this->db->table('tbl_peserta')->where('id', $id)->get()->getRowArray();
    }

    public function update_daftar($data, $id)
    {
        return $this->db->table('tbl_peserta')->update($data, array('id' => $id));
    }
}
