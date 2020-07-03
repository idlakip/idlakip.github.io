<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{

    public function get_product()
    {
        return $this->db->table('komik')->get()->getResultArray();
    }
}
