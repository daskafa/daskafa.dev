@php
  use Illuminate\Support\Facades\Auth;
@endphp
@include('front.layouts.header')


@if (Auth::check())
  @include('front.layouts.widgets')
@endif


      {{-- <div class="container">
        <div class="col-md-12">
          <div class="outer text-center">
            <h3>Yılmaz DAŞKAFA <strong>fullStack developer</strong> </h3>
            <h5 class="mt-5"> <a style="color:inherit; font-size: 25px; text-decoration:none;" href="{{route('blog')}}">blog</a> </h5>
          </div>
        </div>
      </div> --}}



<div class="h-header">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="header-left">
          <p>Yılmaz <span>Daşkafa</span> </p>
        </div>
      </div>
      <div class="col-md-9">
        <div class="header-center">
          <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="#"><i class="ri-user-line"></i>Hakkımda</a>
                <a class="nav-item nav-link" href="#"><i class="ri-rss-line"></i>Blog</a>
                <a class="nav-item nav-link" href="#"><i class="ri-rocket-2-line"></i>Projeler</a>
                <a class="nav-item nav-link" href="#"><i class="ri-phone-line"></i>İletişim</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
      {{-- <div class="col-md-3">
        <div class="header-right">
          <div class="social-media">
            <div class="instagram">
              <i class="ri-instagram-fill"></i>
            </div>
            <div class="linkedin">
              <i class="ri-linkedin-box-fill"></i>
            </div>
            <div class="twitter">
              <i class="ri-twitter-fill"></i>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>

<main>
  <div class="a">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="title">
            <h1>Selam, <br> Ben <span>Yılmaz!</span> </h1>
            <hr>
          </div>
          <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
          </div>
          <div class="button">
            <button type="button">Hadi iletişime geçelim<i class="ri-arrow-right-line"></i></button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</main>










@include('front.layouts.footer')
