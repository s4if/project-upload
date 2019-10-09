@extends('layouts.upload')

@section('title')
Halaman Login
@endsection

@section('content')
<div class="row justify-content-center">
<div class="col-lg-4 col">
  <div class="card">
    <div class="card-header text-white bg-dark">
      <h3>Form pengumpulan tugas</h3>
    </div>
    <div class="card-body">
      <form class="form" method="post" action="{{ url('upload/upload') }}" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nama: </label>
          <input type="text" required="true" name="nama" class="form-control" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
          <label>Jenis Tugas:</label>
          <select class="form-control" name="jenis_tugas">
            <option value="individu" selected="true">Individu</option>
            <option value="kelompok">Kelompok</option>
          </select>
        </div>
        <div class="form-group">
          <label>File input:</label>
          <input class="form-control-file" type="file" required="true" name="file_upload">
        </div>
        <div class="form-group">
          <label>Password Upload: </label>
          <input type="password" required="true" name="pass_upload" class="form-control" placeholder="Masukkan password upload">
        </div>
        <button formenctype="multipart/form-data" type="submit" class="btn btn-dark">Upload</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
