@extends('layouts.app')

@section('header')

@include('partials.admin_header')

@endsection

@section('main')

<div class="container py-4">

    <div class="py-2">
        <h1>Update comic n. {{$comic->id}} ({{$comic->title}})</h1>
    </div>

    <form action="{{route('comics.update',$comic->id)}}" method="POST" class="row g-3">

        @csrf
        @method('PUT')
        
        <div class="col-md-6">
          <label for="comicTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="comicTitle" name="title" placeholder="Batman v Superman" value="{{$comic->title}}">
        </div>
        <div class="col-md-6">
          <label for="comicPrice" class="form-label">Price</label>
          <input type="text" class="form-control" id="comicPrice" name="price" placeholder="$29.99" value="{{$comic->price}}">
        </div>
        <div class="col-12">
            <label for="comicSeries" class="form-label">Series</label>
            <input type="text" class="form-control" id="comicSeries" name="series" placeholder="Batman v Superman" value="{{$comic->series}}">
        </div>
        <div class="col-12">
            <label for="comicSaleDate" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="comicSaleDate" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="col-12">
            <label for="comicType" class="form-label">Type</label>
            <input type="text" class="form-control" id="comicType" name="type" placeholder="comic book" value="{{$comic->type}}">
        </div>
        <div class="col-12">
            <label for="comicDescription" class="form-label">Description</label>
            <input type="text" class="form-control" id="comicDescription" name="description" placeholder="Lorem ipsum" value="{{$comic->description}}">
        </div>
        <div class="col-12">
            <label for="comicSeries" class="form-label">Cover Image</label>
            <input type="text" class="form-control" id="comicSeries" name="thumb" placeholder="https://picsum.photos/780/1200?random=1" value="{{$comic->thumb}}">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{route('comics.index')}}" class="btn btn-light">Cancel</a>
        </div>
      </form>
</div>

@endsection