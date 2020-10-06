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

    public function create(Request $request)
    {
        \App\Biodata::create($request->all());
        return redirect('/biodata')->with('sukses','Data Berhasil diinput');
    }
    
    public function edit($id)
    {
        $biodata = \App\Biodata::find($id);
        return view ('biodata/edit',['biodata' =>$biodata]);
    }

    public function update(Request $request,$id)
    {
        $biodata = \App\Biodata::find($id);
        $biodata->update($request->all());
        return redirect('/biodata')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
        $biodata = \App\Biodata::find($id);
        $biodata->delete($biodata);
        return redirect('biodata')->with('sukses','Data Berhasil Dihapus');
    }
}
