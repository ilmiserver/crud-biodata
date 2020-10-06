@extends('layout/master')
@section('content')  
  <h1>Edit Data Biodata</h1>
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
    <form action="/biodata/{{$biodata->id}}/update" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" aria-describedby="emailHelp" value="{{$biodata->nama}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
          <option value="L" @if($biodata->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
          <option value="P" @if($biodata->jenis_kelamin == 'P') selected @endif>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>
        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Agama" aria-describedby="emailHelp" value="{{$biodata->agama}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" id="exampleFormControlTextarea1" rows="3">{{$biodata->alamat}}</textarea>
      </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>
  </div>
@endsection