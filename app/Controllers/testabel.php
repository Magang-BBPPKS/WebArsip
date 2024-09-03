<?php


namespace App\Controllers;
use App\Libraries\DataTables;
use App\Models\User_model;

class testabel extends BaseController
{
    public function index()
    {
        return view('v_tabeltes');
    }

    public function grid()
    {
        $query = "SELECT * FROM user";

        $where = null;

        $isWhere = null;

        $search = array('username', 'nama', 'password', 'jabatan');
        echo $this->DataTables->BuildDatatables($query, $where, $isWhere, $search);
    }
}

