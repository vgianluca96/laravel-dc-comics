@extends('layouts.app')

@section('header')

@include('partials.admin_header')

@endsection

@section('main')

<div class="container py-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                @if(str_contains($comic['thumb'],'http'))
                    <img src="{{$comic->thumb}}" alt="" class="img-fluid rounded-start">
                @else
                    <img src="{{asset('storage/' . $comic->thumb)}}" alt="" class="img-fluid rounded-start">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$comic->title}}
                    </h5>
                    <p class="card-text">
                        <strong>Price:</strong> {{$comic->price}} <br>
                        <strong>Series:</strong> {{$comic->series}} <br>
                        <strong>Sale Date:</strong> {{$comic->sale_date}} <br>
                        <strong>Type:</strong> {{$comic->type}} <br>
                        {{$comic->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection