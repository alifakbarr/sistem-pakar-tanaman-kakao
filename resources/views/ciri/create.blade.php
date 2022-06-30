@extends('layouts.template2')
@section('title','Tambah Ciri Penyakit')
@section('content')
<div class="container">
  <div class="card border border-primary">
    <div class="card-body">
      <form action="{{ route('ciri.store') }}" method="POST">
        @csrf
        <p class="fw-bold">Tambah Ciri Penyakit</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode_ciri" id="exampleFormControlInput1" placeholder="Masukkan kode">
          </div>
        @error('kode_ciri')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>     
        @enderror
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ciri penyakit</label>
          <input type="text" class="form-control" name="ciri_penyakit" id="exampleFormControlInput1" placeholder="Masukkan ciri penyakit">
        </div>
        @error('ciri_penyakit')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>  
        @enderror
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection