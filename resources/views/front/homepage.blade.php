@php
  use Illuminate\Support\Facades\Auth;
@endphp
@include('front.layouts.header')


@if (Auth::check())
  @include('front.layouts.widgets')
@endif


      <div class="container">
        <div class="col-md-12">
          <div class="outer text-center">
            <h3>Yılmaz DAŞKAFA <strong>fullStack developer</strong> </h3>
            <h5 class="mt-5"> <a style="color:inherit; font-size: 25px; text-decoration:none;" href="{{route('blog')}}">blog</a> </h5>
          </div>
        </div>
      </div>

@include('front.layouts.footer')
