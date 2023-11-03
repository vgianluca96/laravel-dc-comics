@extends('layouts.app')

@section('header')

@include('partials.header')

@endsection

@section('main')

<div class="container py-4">
    <h1>
        Welcome to the Home Page
    </h1>
    <div class="container py-4">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card h-100">
                    @if(str_contains($comic['thumb'],'http'))
                        <img src="{{$comic->thumb}}" alt="" class="img-fluid rounded-start">
                    @else
                        <img src="{{asset('storage/' . $comic->thumb)}}" alt="" class="img-fluid rounded-start">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$comic->title}}
                        </h5>
                        <p class="card-text">
                            <a href="{{route('comics',$comic->id)}}">Details</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection