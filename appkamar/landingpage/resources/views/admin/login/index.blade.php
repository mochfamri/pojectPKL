<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login Admin</title>

    

    

    <!-- Bootstrap core CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/signin.css" />

    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> --}}

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    
<main class="form-signin">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        {{-- <div class="card-body d-flex justify-content-center shadow"> --}}
          <form action="/admin" method="post">
            @csrf
            
            <img class="logo" src="img/logo_kamar-removebg-preview.png" alt="logokamar" width="100" height="40">
            <h1 class="h3">Admin</h1>
           

            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="button" type="submit">Sign in</button>
          </form>
        {{-- </div> --}}
      </div>
    </div>    
  </div>  
</main>


    
  </body>
</html>
