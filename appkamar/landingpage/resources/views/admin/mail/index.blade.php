@extends('admin.dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My inbox</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-10 mb-5">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Subject</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $contactus)
        
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $contactus->name }}</td>
          <td>{{ $contactus->subject }}</td>
          <td>{{ $contactus->email }}</td>
          <td>{{ $contactus->phone }}</td>
          <td>{{ $contactus->message }}</td>
          <td>
              <a href="/mail/{{ $contactus->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
              <form action="/mail/{{ $contactus->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm ('Are you sure ?')"><span data-feather="x-circle"></span></button>
              </form>
              
          </td>
        </tr>
        
        @endforeach  
      </tbody>
    </table>
  </div>
@endsection