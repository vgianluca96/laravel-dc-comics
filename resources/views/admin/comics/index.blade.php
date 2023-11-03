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
            <td class="d-flex">
                <a href="{{route('comics.show',$comic->id)}}" class="btn btn-dark me-1">
                    Details
                </a>
                <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-light me-1">
                  Edit
                </a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">
                    Delete
                  </button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    <div class="py-4">
        <a href="{{route('comics.create')}}" class="btn btn-dark me-1">
            Add new comic
        </a>
    </div>
</div>

@endsection