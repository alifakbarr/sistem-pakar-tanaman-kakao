@extends('layouts.template')
@section('title','Tambah penyakit')
@section('content')
<div class="container mt-3">
  
  <div class="card mb-4 border border-primary">
    <div class="card-body">
      <form action="{{ route('penyakit.store') }}" method="POST">
        @csrf
        <p class="fw-bold">Tambah Penyakit</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Penyakit</label>
            <input type="text" class="form-control" name="kode_penyakit" id="exampleFormControlInput1" placeholder="Masukkan kode">
          </div>
        @error('kode_penyakit')
            {{ $message }}
        @enderror
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama penyakit</label>
          <input type="text" class="form-control" name="nama_penyakit" id="exampleFormControlInput1" placeholder="Masukkan nama penyakit">
        </div>
        @error('nama_penyakit')
            {{ $message }}
        @enderror
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection