@extends('admin.dashboard.layout.main')

@section('container')

<div class="container mt-5">
    
       <h1 class="mb-3"> {{ $data->tittle}} </h1>
       <p class="mt-3"> {{ $data->body }} </p> 
       <a href="/about" class="btn btn-success"><span data-feather="arrow-left"></span>Back to privacies</a>
       <a href="/about/{{ $data->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        
    </div>

@endsection