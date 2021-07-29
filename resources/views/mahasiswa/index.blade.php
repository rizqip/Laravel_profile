@extends('layout/main')

@section('title',  'Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Tabel Mahasiswa</h1>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $mahasiswa as $mhs)
                <tr>
                    <th scope="col">{{ $loop->iteration}}</th>
                    <td>{{ $mhs -> nama }}</td>
                    <td>{{ $mhs -> nim }}</td>
                    <td>{{ $mhs -> email }}</td>
                    <td>{{ $mhs -> jurusan }}</td>
                    <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 

      </div>
    </div>
  </div>
@endsection