<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table = 'tbl_upload';
    protected $useTimestamps = true;

    public function get_upload()
    {
        return $this->db->table('tbl_upload')->get()->getResultArray();
    }

    public function insert_gambar($data)
    {
        return $this->db->table('tbl_upload')->insert($data);
    }
}
