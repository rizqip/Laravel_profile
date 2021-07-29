@extends('layout/main')

@section('title',  'Daftar Student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Tabel Student</h1>

        <a href="/student/create" class="btn btn-primary mg-3">Tambah Data</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
          @foreach( $student as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $student->nama }}
              <a href="/student/{{ $student->id }}" class="btn btn-info">Detail</a>
            </li>
          @endforeach
        </ul>

        <div>-</div>



      </div>
    </div>
  </div>
@endsection
