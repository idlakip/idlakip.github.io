<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadsModel extends Model
{
    protected $table = 'tbl_uploads';
    // protected $useTimestamps = true;

    public function insert_upload($data)
    {
        return $this->db->table('tbl_uploads')->insert($data);
    }

    public function insert_galeries($data)
    {
        return $this->db->table('tbl_galeries')->insert($data);
    }

    // public function get_upload()
    // {
    //     return $this->db->table('tbl_uploads')->get()->getResultArray();
    // }


    // public function edit_upload($id)
    // {
    //     return $this->db->table('tbl_uploads')->where('id', $id)->get()->getRowArray();
    // }

    // public function update_upload($data, $id)
    // {
    //     return $this->db->table('tbl_uploads')->update($data, array('id' => $id));
    // }
}
