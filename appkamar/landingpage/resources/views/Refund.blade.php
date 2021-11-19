@extends('landingpage.layout.main')
@section('container')

<div class="container mt-5">  
    <h1 class="text-center fw-bold"> Refund Policy </h1>
    @foreach ($data as $item)
       <h1> {{ $item->tittle }} </h1>
       <p> {{ $item->body }} </p> 
    @endforeach
</div>

@endsection