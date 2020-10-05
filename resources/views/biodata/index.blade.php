<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
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
        <td><a href="/biodata/{{$biodata->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
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
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
