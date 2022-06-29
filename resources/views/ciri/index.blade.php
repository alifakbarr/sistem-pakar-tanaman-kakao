@extends('layouts.template')
@section('title','Tambah Ciri')
@section('content')
<div class="container mt-5">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  
  <form action="{{ route('ciri.store') }}" method="POST">
    @csrf
    <input type="text" name="kode_ciri" placeholder="Masukkan kode ciri">
    @error('kode_ciri')
        {{ $message }}
    @enderror
    
    <input type="text" name="ciri_penyakit" placeholder="Masukkan ciri penyakit">
    @error('ciri_penyakit')
        {{ $message }}
    @enderror
    <button type="submit">Simpan</button>
  </form>

  <br>
  <table >
    <tr>
      <td>Kode</td>
      <td>Ciri Penyakit</td>
      <td>Opsi</td>
    </tr>
    @foreach ($ciris as $ciri)
    <tr>
      <td>{{ $ciri->kode_ciri }}</td>
      <td>{{ $ciri->ciri_penyakit }}</td>
      <td></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
