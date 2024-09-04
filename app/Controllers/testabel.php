<?php


namespace App\Controllers;
use App\Libraries\DataTables;
use App\Models\tes_model;

class testabel extends BaseController
{
    public function __construct()
    {
        $this->DataTables = new DataTables();
    }

    public function index()
    {
        return view('v_tabeltes');
    }
    
    public function grid()
    {
        $query = "SELECT * FROM pegawai_bbppks";

        $where = null;

        $isWhere = null;

        $search = array('nama', 'nip', 'tempat/tgllahir', 'jnsklmn', 'statuskpg', 'gol/tmtcpns', 'gol/tmt', 'agama', 'pendidikan', 'jabatan', 'tmt', 'eselon', 'diklat/jabatan');
        echo $this->DataTables->BuildDatatables($query, $where, $isWhere, $search);
    }
}

