@extends('layouts.template2')
@section('title','Edit Ciri Penyakit')
@section('content')
<div class="container">
  <div class="card mb-4 border border-primary">
    <div class="card-body">
      <form action="{{ route('ciri.update', $ciri->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p class="fw-bold">Edit Ciri Penyakit</p>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Kode</label>
          <input type="text" disabled class="form-control" id="exampleFormControlInput1" placeholder="Masukkan kode" value="{{ ucwords($ciri->kode_ciri) }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ciri Penyakit</label>
          <input type="text" class="form-control" name="ciri_penyakit" id="exampleFormControlInput1" placeholder="Masukkan ciri penyakit" value="{{ old('ciri_penyakit')?? $ciri->ciri_penyakit }}">
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