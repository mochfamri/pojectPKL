@extends('admin.dashboard.layout.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Terms</h1>
</div>

<div class="col-lg-8">
  
  <form method="post" action="/term">
    @csrf
      <div class="mb-3">
        <label for="tittle" class="form-label">Title</label>
        <input type="text" class="form-control @error('tittle') is-invalid @enderror" id="tittle" name="tittle" required autofocus>
        @error('tittle')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror  
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
        
        <p class="text-danger"> {{ $message }}</p> 
        
        @enderror 
        <input id="body" type="hidden" name="body">
        
        <trix-editor input="body"></trix-editor>
      </div>
      {{-- <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
      </div>
       --}}
    
      <button type="submit" class="btn btn-primary">Create Terms & Conditions</button>
  </form>

</div>
{{-- <script>
  const tittle = document.querySelector('#tittle');
  const slug = document.querySelector('#slug');

  tittle.addEventListener('change', function (){
    fetch('/privacy/checkSlug?tittle=' + tittle.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script> --}}
<script>
  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })
</script>
@endsection