@extends('layouts.base')

@section('movies')
    <h2>I miei film...</h2>
    <div class="row g-3 row-cols-3 d-flex justify-content-center">
        @foreach($ArrMovies as $Movie)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$Movie->title}}</h5>
                  <h6>{{$Movie->original_title}}</h6>
                  <p class="card-text">{{$Movie->nationality}}</p>
                  <p class="card-text">{{$Movie->date}}</p>
                  <p class="card-text">{{$Movie->vote}}</p>
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection
