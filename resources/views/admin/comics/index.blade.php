@extends('layouts.app')

@section('header')

@include('partials.admin_header')

@endsection

@section('main')

<div class="container py-4">

    <div class="py-2">
        <h1>Admin dashboard</h1>
    </div>

    <table class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>
                <a href="{{route('comics.show',$comic->id)}}" class="btn btn-dark">
                    Details
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection