@extends('layouts.template')
@section('title','Tambah ciri penyakit')
@section('content')
<div class="container mt-3">
  
  <div class="card mb-4 border border-primary">
    <div class="card-body">
      <form action="{{ route('ciri.store') }}" method="POST">
        @csrf
        <p class="fw-bold">Tambah Ciri Penyakit</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode_ciri" id="exampleFormControlInput1" placeholder="Masukkan kode">
          </div>
        @error('kode_ciri')
            {{ $message }}
        @enderror
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ciri penyakit</label>
          <input type="text" class="form-control" name="ciri_penyakit" id="exampleFormControlInput1" placeholder="Masukkan ciri penyakit">
        </div>
        @error('ciri_penyakit')
            {{ $message }}
        @enderror
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection