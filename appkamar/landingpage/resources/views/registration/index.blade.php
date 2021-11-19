@extends('landingpage.layout.main')

@section('container')


<div class="row justify-content-center mt-5">
  <div class="col-lg-5">

    <main class="form-signup">
        <form action="/registration" method="post">
          @csrf
          <h1 class="h3 mb-3 mt-5 fw-normal text-center">Form Sign Up</h1>
      
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating">
            <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email Address</Address></label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>
        </form>
        <small class="d-block text-center mt-3">Already Sign Up ? <a href="/admin">Login Now !</a> </small>
    </main>

  </div>
</div>


@endsection