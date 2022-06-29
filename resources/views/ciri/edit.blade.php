@extends('layouts.template')
@section('title','Edit ciri penyakit')
@section('content')
<div class="container mt-3">
  <div class="card mb-4 border border-primary">
    <div class="card-body">
      <form action="{{ route('ciri.update', $ciri->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p class="fw-bold">Edit Ciri Penyakit</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode</label>
            <input type="text" disabled class="form-control" id="exampleFormControlInput1" placeholder="Masukkan kode" value="{{ $ciri->kode_ciri }}">
          </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ciri penyakit</label>
          <input type="text" class="form-control" name="ciri_penyakit" id="exampleFormControlInput1" placeholder="Masukkan ciri penyakit" value="{{ old('ciri_penyakit')?? $ciri->ciri_penyakit }}">
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