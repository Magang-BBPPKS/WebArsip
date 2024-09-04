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
        "tempat_tgllahir",
        "jnsklmn",
        "statuskpg",
        "gol_tmtcpns",
        "gol_tmt",
        "agama",
        "pendidikan",
        "jabatan",
        "tmt",
        "eselon",
        "diklat_jabatan"


    ];
}

?>