<?php

namespace App\Models;

use CodeIgniter\Model;

class tes_model extends Model
{
    protected $table = "pegawai_bbppks";
    protected $primaryKey = "nip";
    protected $returnType = "object";
    protected $allowedFields = [
        "nama",
        "nip",
        "tempat/tgllahir",
        "jnsklmn",
        "statuskpg",
        "gol/tmtcpns",
        "gol/tmt",
        "agama",
        "pendidikan",
        "jabatan",
        "tmt",
        "eselon",
        "diklat/jabatan",


    ];
}

?>