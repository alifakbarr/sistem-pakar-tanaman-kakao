@extends('layouts.template')
@section('title','Home')
@section('content')

<div class="container pt-4">
  <div class="card mb-3 p-1 border border-primary">
    <div class="row g-0">
      <div class="col-md-1">
        <img src="{{ asset('icon/cek.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-11">
        <div class="card-body text-light bg-primary rounded">
          <h5 class="card-title">Diagnosa</h5>
          <p class="card-text ">Diagnosa penyakit pada tanaman kakao mu sekarang !</p>
        </div>
        <div class="card-body">
          <form action="{{ route('home.diagnosa') }}" method="post">
            @csrf
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <select class="form-select" aria-label="Default select example" name="ciri1">
                      <option selected>Ciri Penyakit 1</option>
                      @foreach ($ciris as $ciri)
                      <option value="{{ $ciri->kode_ciri }}">{{ ucwords($ciri->kode_ciri) }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <select class="form-select" aria-label="Default select example" name="ciri2">
                      <option selected>Ciri Penyakit 2</option>
                      @foreach ($ciris as $ciri)
                      <option value="{{ $ciri->kode_ciri }}">{{ ucwords($ciri->kode_ciri) }}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <select class="form-select" aria-label="Default select example" name="ciri3">
                      <option selected>Ciri Penyakit 3</option>
                      @foreach ($ciris as $ciri)
                      <option value="{{ $ciri->kode_ciri }}">{{ ucwords($ciri->kode_ciri) }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <select class="form-select" aria-label="Default select example" name="ciri4">
                      <option selected>Ciri Penyakit 4</option>
                      @foreach ($ciris as $ciri)
                      <option value="{{ $ciri->kode_ciri }}">{{ ucwords($ciri->kode_ciri) }}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <select class="form-select" aria-label="Default select example" name="ciri5">
                      <option selected>Ciri Penyakit 5</option>
                      @foreach ($ciris as $ciri)
                      <option value="{{ $ciri->kode_ciri }}">{{ ucwords($ciri->kode_ciri) }}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <button type="submit" class="btn btn-primary">Diagnosa</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
          <div class="alert alert-primary" role="alert">
            Hasil diagnosa : {{ session()->get('diagnosa')?? 'Belum ada' }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 p-1 border border-primary">
    <div class="row g-0">
      <div class="col-md-1">
        <img src="{{ asset('icon/virus.png') }}" class="img-fluid rounded-start " alt="...">
      </div>
      <div class="col-md-11">
        <div class="card-body text-light bg-primary rounded">
          <h5 class="card-title">Manipulasi Ciri</h5>
          <p class="card-text ">Manipulasi ciri penyakit yang diderita tanaman kakao untuk membantu diagnosa kedepannya !</p>
        </div>
        <div class="card-body">
          <a href="{{ route('ciri.create') }}" class="btn btn-success mb-2">Tambah</a>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <table class="table border border-primary table-striped mb-0">
            <thead class="bg-primary text-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Ciri</th>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
              @php ($no=1)
              @foreach ($ciris as $ciri)                  
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ ucwords($ciri->kode_ciri) }}</td>
                <td >{{ $ciri->ciri_penyakit }}</td>
                <td>
                  <a href="{{ route('ciri.edit',$ciri->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ciri{{ $ciri->id }}">
                    Hapus
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 p-1 border border-primary">
    <div class="row g-0">
      <div class="col-md-1">
        <img src="{{ asset('icon/rule.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-11">
        <div class="card-body text-light bg-primary rounded">
          <h5 class="card-title">Manipulasi Aturan</h5>
          <p class="card-text ">Manipulasi aturan diagnosa penyakit tanaman kakao sekarang !</p>
        </div>
        <div class="card-body">
          <a href="{{ route('penyakit.create') }}" class="btn btn-success mb-2">Tambah</a>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table border border-primary table-striped mb-0">
              <thead class="bg-primary text-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode Penyakit</th>
                  <th scope="col">Nama Penyakit</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @php ($no=1)
                @foreach ($penyakits as $penyakit)                  
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ strtoupper($penyakit->kode_penyakit) }}</td>
                  <td >{{ $penyakit->nama_penyakit }}</td>
                  <td>
                    <a href="{{ route('penyakit.edit',$penyakit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#penyakit{{ $penyakit->id }}">
                      Hapus
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@foreach ($ciris as $ciri)    
  <div class="modal fade" id="ciri{{ $ciri->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@foreach ($penyakits as $penyakit)    
  <div class="modal fade" id="penyakit{{ $penyakit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Hapus penyakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus penyakit : <div class="fw-bold">Kode penyakit : {{ ucwords($penyakit->kode_penyakit) }}</div>
          <p><span class="fw-bold">Detail : </span>{{ $penyakit->nama_penyakit }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('penyakit.destroy', $penyakit) }}" method="post">
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