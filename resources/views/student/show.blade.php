@extends('layout/main')

@section('title',  'Detail Student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Detail Student</h1>

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $student->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
            <p class="card-text">{{ $student->email }}</p>
            <p class="card-text">{{ $student->gender }}</p>
            <p class="card-text">{{ $student->jurusan }}</p>
            <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/student/{{ $student->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/student" class="btn btn-warning">Kembali</a>
        </div>
        </div>

      </div>
    </div>
  </div>
@endsection
