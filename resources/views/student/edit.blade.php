@extends('layout/main')

@section('title',  'Edit Student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Edit Data Student</h1>

        <form method="post" action="/student/{{ $student->id }}">
          @method('patch')
          @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Anda Di Sini" name="nama" value="{{ $student->nama }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukan NIM Anda Di Sini" name="nim" value="{{ $student->nim }}">
                @error('nim')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Anda Di Sini" name="email" value="{{ $student->email }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="gender" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Gender
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" id="L">Laki-Laki</a></li>
                    <li><a class="dropdown-item" href="#" id="P">Perempuan</a></li>
                  </ul>
                @error('gender')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div> --}}

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan Anda Di Sini" name="jurusan" value="{{ $student->jurusan }}">
                @error('jurusan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>

      </div>
    </div>
  </div>
@endsection
