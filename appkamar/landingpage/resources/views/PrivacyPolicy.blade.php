@extends('landingpage.layout.main')

@section('container')

    <div class="container mt-5">
        <h1 class="text-center fw-bold">Privacy Policy</h1>
        @foreach ($data as $privacy)
           <h1> {{ $privacy->tittle }} </h1>
           <p> {{ $privacy->body }} </p> 
        @endforeach
    </div>

    
    
    
@endsection