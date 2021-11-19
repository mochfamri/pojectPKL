@extends('admin.dashboard.layout.main')

@section('container')

<div class="container mt-5">
    
  
    
    <h2 class="mb-3"> {{ $data->name}} </h2>
    <h4 class="mb-3"> {{ $data->email}}</h4>
    <p class="mt-3 fw-bold">Phone : {{ $data->phone }} </p> 
    <p class="mt-3 fw-bold">Subject : {{ $data->subject }} </p> 
    <p class="mt-3 fw-bold">Message : {{ $data->message }} </p> 
    <a href="/mail" class="btn btn-success"><span data-feather="arrow-left"></span>Back to Inbox</a>
    <form action="/mail/{{ $data->id }}" method="post" class="d-inline">
     @method('delete')
     @csrf
     <button class="btn btn-danger" onclick="return confirm ('Are you sure ?')"><span data-feather="x-circle"></span>delete</button>
   </form>

    </div>

@endsection