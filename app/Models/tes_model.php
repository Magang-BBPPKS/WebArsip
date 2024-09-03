<?php

namespace App\Models;

use CodeIgniter\Model;

class tes_model extends Model
{
    protected $table = "user";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $allowedFields = [
        "username",
        "password",
        "nama",
        "jabatan"
    ];
}

?>