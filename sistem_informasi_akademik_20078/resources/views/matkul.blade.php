@extends('layouts.master')


@section('ibnucontainer')
  <div class="mt-5">
    <h2 class="text-center">Mata kuliah</h2>
    <table class="table table-bordered border-dark table-hover mt-3">
      <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Jumlah SKS</th>
            <th scope="col">Dosen</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Waktu</th>
           
          </tr>
      </thead>
      <tbody>
        @foreach ($subjects as $subject)
          <tr>
            <td>{{$subject['id']}}</td>
            <td>{{$subject['name']}}</td>
            <td>{{$subject['sks']}}</td>
            <td>{{$subject['dosen']}}</td>
            <td>{{$subject['jadwal']}}</td>
            <td>{{$subject['waktu']}}</td>
           
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
    
@endsection


