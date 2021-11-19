@extends('admin.dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Terms & Conditions</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-10 mb-5">
    <a href="/term/create" class="btn btn-secondary mb-3 shadow">New Terms</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tittle</th>
          <th scope="col">Paragraph</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $term)
        
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $term->tittle }}</td>
          <td>{{ $term->body }}</td>
          <td>
              <a href="/term/{{ $term->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
              <a href="/term/{{ $term->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/term/{{ $term->id }}" method="post" class="d-inline">
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