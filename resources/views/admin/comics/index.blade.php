@extends('layouts.app')

@section('header')

@include('partials.admin_header')

@endsection

@section('main')

<div class="container py-4">

    <div class="d-flex justify-content-between py-4">
        <div>
          <h1>Admin dashboard</h1>
        </div>
        <div>
          <a href="{{route('comics.create')}}" class="btn btn-dark me-1">
            Add new comic
          </a>
        </div>
    </div>

    @if(session('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations:</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

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
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$comic->id}}">
                    Delete
                  </button>
                  <div class="modal fade" id="exampleModal_{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Eliminazione item {{$comic->id}}
                          </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Sicuro di voler elminare <em>{{$comic->title}}</em>?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

</div>

@endsection