@extends('layouts.app')

@section('main')

<div class="container py-4">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card h-100">
                <img src="{{$comic->thumb}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$comic->title}}
                    </h5>
                    <p class="card-text">
                        <a href="{{route('comics.show',$comic->id)}}">Details</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection