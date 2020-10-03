<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $data_biodata = \App\Biodata::all();
        return view ('biodata.index',['data_biodata' => $data_biodata]);
    }
}
