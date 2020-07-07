<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'tbl_berita';
    // protected $useTimestamps = true;

    public function insert_berita($data)
    {
        return $this->db->table('tbl_berita')->insert($data);
    }

    public function insert_galeries($data)
    {
        return $this->db->table('tbl_galeries')->insert($data);
    }

    // public function get_berita()
    // {
    //     return $this->db->table('tbl_berita')->get()->getResultArray();
    // }


    // public function edit_berita($id)
    // {
    //     return $this->db->table('tbl_berita')->where('id', $id)->get()->getRowArray();
    // }

    // public function update_berita($data, $id)
    // {
    //     return $this->db->table('tbl_berita')->update($data, array('id' => $id));
    // }
}
