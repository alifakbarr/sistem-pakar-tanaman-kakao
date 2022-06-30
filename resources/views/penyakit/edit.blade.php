@extends('layouts.template')
@section('title','Edit Penyakit')
@section('content')
<div class="container mt-3">
  <div class="card mb-4 border border-primary">
    <div class="card-body">
      <form action="{{ route('penyakit.update', $penyakit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p class="fw-bold">Edit Penyakit</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Penyakit</label>
            <input type="text" name="kode_penyakit" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan kode" value="{{ ucwords($penyakit->kode_penyakit) }}">
          </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Penyakit</label>
          <input type="text" class="form-control" name="nama_penyakit" id="exampleFormControlInput1" placeholder="Masukkan nama penyakit" value="{{ old('nama_penyakit')?? $penyakit->nama_penyakit }}">
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