@extends('layouts.master')


@section('ibnucontainer')
  <div class="mt-5">
    <h2 class="mb-3 text-center">Daftar Mahasiswa</h2>
    <table class="table table-bordered border-dark table-hover">
      <thead>
          <tr>
            <th scope="col">NPM</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Prodi</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{$student['npm']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['genders']}}</td>
            <td>{{$student['email']}}</td>
            <td>{{$student['phone']}}</td>
            <td>{{$student['address']}}</td>
            <td>{{$student['birthplace']}}</td>
            <td>{{$student['faculties']}}</td>
            <td>{{$student['studies']}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
    
@endsection