@php
  use Illuminate\Support\Facades\Auth;
@endphp
@include('front.layouts.header')


@if (Auth::check())
  @include('front.layouts.widgets')
@endif

@include('front.layouts.nav')


      {{-- <div class="container">
        <div class="col-md-12">
          <div class="outer text-center">
            <h3>Yılmaz DAŞKAFA <strong>fullStack developer</strong> </h3>
            <h5 class="mt-5"> <a style="color:inherit; font-size: 25px; text-decoration:none;" href="{{route('blog')}}">blog</a> </h5>
          </div>
        </div>
      </div> --}}





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
