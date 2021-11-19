@extends('admin.dashboard.layout.main')

@section('container')

<div class="container mt-5">
    
       <h1 class="mb-3"> {{ $data->tittle}} </h1>
       <p class="mt-3"> {{ $data->body }} </p> 
       <a href="/term" class="btn btn-success"><span data-feather="arrow-left"></span>Back to terms</a>
       <a href="/term/{{ $data->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
       <form action="/term/{{ $data->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm ('Are you sure ?')"><span data-feather="x-circle"></span>delete</button>
      </form>
    </div>

@endsection