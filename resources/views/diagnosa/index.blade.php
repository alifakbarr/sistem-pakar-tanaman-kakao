@extends('layouts.template')
@section('title','Diagnosa Penyakit')
@section('content')
<div class="d-flex flex-wrap justify-content-evenly mt-5">
  <a href="{{ route('diagnosa.index') }}">  
    <div class="card mb-3 p-2 border border-primary" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('icon/cek.png') }}" style="" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col-md-8 bg-primary rounded">
          <div class="card-body text-light">
            <h5 class="card-title">Diagnosa</h5>
            <p class="card-text">Diagnosa penyakit pada tanaman kakao mu sekarang !</p>
            
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
    </div>
  </a>
  <a href="{{ route('ciri.index') }}">    
    <div class="card mb-3 p-2 border border-primary" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('icon/virus.png') }}" style="" class="img-fluid rounded-start px-1" alt="">
        </div>
        <div class="col-md-8 bg-primary rounded">
          <div class="card-body text-light">
            <h5 class="card-title">Manipulasi Ciri</h5>
            <p class="card-text">Manipulasi ciri penyakit yang diderita tanaman kakao untuk membantu diagnosa kedepannya !</p>
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
    </div>
  </a>
  <div class="card mb-3 p-2 border border-primary" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('icon/rule.png') }}" style="" class="img-fluid rounded-start px-2" alt="">
      </div>
      <div class="col-md-8 bg-primary rounded">
        <div class="card-body text-light">
          <h5 class="card-title">Tambah Aturan</h5>
          <p class="card-text">Tambahkan aturan diagnosa penyakit tanaman kakao sekarang !</p>
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection