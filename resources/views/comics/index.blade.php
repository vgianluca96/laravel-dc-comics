@extends('layouts.app')

@section('main')

<div class="container py-4">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card">
                <img src="{{$comic->thumb}}" alt="" class="card-img-top">
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection