@extends('layouts.template')
@section('title','Manipulasi ciri penyakit')
@section('content')
<div class="container mt-3">
  <a href="{{ route('ciri.create') }}" class="btn btn-primary mb-2">Tambah</a>
  <table class="table border border-primary">
    <thead>
      <tr class="table-primary">
        <th scope="col">No</th>
        <th scope="col">Kode</th>
        <th scope="col">Ciri Penyakit</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      @php ($no = 1)
      @foreach ($ciris as $ciri)
      <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{ $ciri->kode_ciri }}</td>
        <td>{{ $ciri->ciri_penyakit }}</td>
        <td>
          <a href="{{ route('ciri.edit', $ciri->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $ciri->id }}">
            Delete
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@foreach ($ciris as $ciri)    
  <div class="modal fade" id="exampleModal{{ $ciri->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Hapus Ciri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus ciri : <div class="fw-bold">Kode Ciri : {{ ucwords($ciri->kode_ciri) }}</div>
          <p><span class="fw-bold">Detail : </span>{{ $ciri->ciri_penyakit }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('ciri.destroy', $ciri) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" onclick="return true">Hapus</button>
          </form>
        </div>
      </div>
      {{-- <a href="{{ route('item.delete',$item->id) }}" class="btn btn-primary ">Hapus</a> --}}
    </div>
  </div>
@endforeach
@endsection
