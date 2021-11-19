<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bs5/dist/css/bootstrap.min.css')  }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />


    <style>
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
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet" />
    {{-- Trix Editor --}}
    <link href="{{ asset('bs5/dist/css/trix.css')  }}" rel="stylesheet" />
    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>
  </head>
  <body>

    @include('admin.dashboard.layout.header')

    <div class="container-fluid">
      <div class="row">
        
        @include('admin.dashboard.layout.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

          @yield('container')
        
        </main>
      </div>
    </div>

    <script src="{{ URL::asset('bs5/dist/js/bootstrap.bundle.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
    <script src="{{ URL::asset('bs5/dist/js/dashboard.js') }}"></script>
    {{-- Trix Editor --}}
    
    <script type="text/javascript" src="{{ URL::asset('bs5/dist/js/trix.js') }}"></script>
  </body>
</html>
 