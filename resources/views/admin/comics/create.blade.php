@extends('layouts.app')

@section('header')

@include('partials.admin_header')

@endsection

@section('main')

<div class="container py-4">

    <div class="py-2">
        <h1>Add new comic</h1>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data" class="row g-3">

        @csrf

        <div class="col-md-6">
          <label for="comicTitle" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="comicTitle" name="title" placeholder="Batman v Superman" value="{{old('title')}}">
          @error('title')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="comicPrice" class="form-label">Price</label>
          <input type="text" class="form-control @error('price') is-invalid @enderror" id="comicPrice" name="price" placeholder="$29.99" value="{{old('title')}}">
          @error('price')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
            <label for="comicSeries" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="comicSeries" name="series" placeholder="Batman v Superman" value="{{old('title')}}">
            @error('series')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
            <label for="comicSaleDate" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="comicSaleDate" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
            <label for="comicType" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="comicType" name="type" placeholder="comic book" value="{{old('title')}}">
            @error('type')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
            <label for="comicDescription" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="comicDescription" name="description" placeholder="Lorem ipsum" value="{{old('title')}}">
            @error('description')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
          <label for="comicThumb" class="form-label">Cover Image</label>
          <input type="file" class="form-control @error('thumb') is-invalid @enderror" id="comicThumb" name="thumb">
          @error('thumb')
            <div class="text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Create</button>
          <a href="{{route('comics.index')}}" class="btn btn-light">Cancel</a>
        </div>
      </form>
</div>

@endsection