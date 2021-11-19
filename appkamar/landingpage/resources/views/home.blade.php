@extends('landingpage.layout.main')
@section('container')
    
<div class="hero vh-100 d-flex align-items-center">
    <div class="container">
      
        <div class="row">
        <div class="col-lg-7 mx-auto text-center">
          <h1 class="display-4 text-white">Hai ! Halo !</h1>
          <p class="text-white">Selamat datang di Landing Page Kamar</p>
          <a href="#about" class="btn btn-primary mt-5">Informasi</a>
          {{-- <a href="/registration" class="btn btn-outline-light">Sign Up</a> --}}
        </div>
      </div>
    </div>
</div>


<div class="container pb-5">
  
    <section id="about">
        <div class="container mb-3">
        <div class="row mb-3 mt-5 pt-2 pb-5">
          <div class="col justify-center text-center">
            @foreach ($data as $about)
            <h2 class="h1" style="font-family: arial; color: #469fc5; text-shadow: 5px 5px 10px #fff; font-weight: 800">{{ $about->tittle }}</h2>
            @endforeach
            
            <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 200px; background-color: dark; height: 6px"
                    />
                  
          </div>
          
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 ">
            @foreach ($data as $about)
            <p class="about pt-3 text-center">{{ $about->body }}</p>
                
            @endforeach
            {{-- App Kamar merupakan sebuah platform dekstop yang menyediakan beberapa fitur. 
              jika memiliki pertanyaan silahkan klik tombol dibawah --}}
              <div class="pt-5 text-center">
                <a href="/contactus">
                  <button class="contactus shadow">Contact Us</button>
                </a>
              </div>
          </div>
          <div class="col-lg-6 text-center">
            <img src="img/Untitled_design-removebg-preview.png" class="col-md-8 " alt="about">
          </div>
        </div>
      </div>
    </section>  
</div>  
@endsection