<?php

namespace App\Models;

use App\Controllers\Peserta;
use CodeIgniter\Model;

class PesertaModel extends Model
{
    public function get_peserta()
    {
        return $this->db->table('rekapitulasi')
            ->join('peserta', 'peserta.peserta_id = rekapitulasi.pst_nama')
            ->join('lembaga', 'lembaga.lembaga_id = rekapitulasi.lbg_nama')
            ->join('event', 'event.event_id = rekapitulasi.event_judul')
            ->get()->getResultArray();
    }
}
