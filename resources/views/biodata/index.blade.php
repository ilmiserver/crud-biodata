@extends('layout/master')
@section('content')

  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
  <div class="row">
    <div class="col-6">
      <h1>BIODATA</h1>
    </div>
    <div class="col-6">
      <button type="button" class="btn btn-primary btn btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
        TAMBAH DATA
      </button>
    </div>
    <table class="table table-hover">
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
      @foreach($data_biodata as $biodata )
      <tr>
        <td>{{$biodata->nama}}</td>
        <td>{{$biodata->jenis_kelamin}}</td>
        <td>{{$biodata->agama}}</td>
        <td>{{$biodata->alamat}}</td>
      <td><a href="/biodata/{{$biodata->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
      <a href="/biodata/{{$biodata->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin Data Untuk Dihapus?')">Delete</a></td>
      </tr>
      @endforeach
    </table>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA BIODATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/biodata/create" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Agama" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
    </div>
  </div>
</div>   
@endsection
  