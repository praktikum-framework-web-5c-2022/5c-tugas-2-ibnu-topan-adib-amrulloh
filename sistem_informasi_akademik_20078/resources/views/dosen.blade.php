@extends('layouts.master')


@section('ibnucontainer')
 
  <h2 class="text-center mb-3 mt-5">10 Dosen Terbaik</h2>
  <div class="row">
    @foreach ($lecturers as $lecturer)
    <div class="col-3">
      <div class="card mb-3" style="width: 15rem; ">
      <span class="card-number fw-bold position-absolute" style="font-size: 3rem; top: -1rem; opacity: 0.5 ">{{$lecturer['id']}}</span>
      <img src="img/{{$lecturer['image']}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$lecturer['name']}}</h5>
          <h6 class="card-title">{{$lecturer['study']}}</h6>
          <p>{{$lecturer['email']}}</p>
          <p>{{$lecturer['phone']}}</p>
          <p>{{$lecturer['address']}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
@endsection