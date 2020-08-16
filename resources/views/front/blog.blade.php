@include('front.layouts.header')

{{-- <div class="blog-routes">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="{{route('dashboard')}}"> <p>dashboard</p> </a>
      </div>
      <div class="col-md-6">
        <a href="{{route('homepage')}}"> <p>homepage</p> </a>
      </div>
    </div>
  </div>
</div> --}}

@if (Auth::check())
  @include('front.layouts.widgets')
@endif

<div class="blog">
  <div class="container">
    <div class="col-md-12">
      @foreach ($blog as $blogs)
            <a href="{{route('single', $blogs->slug)}}">
              <div class="title">
                <h3>{{$blogs->title}}</h3>
              </div>
            </a>
              <div class="content">
                <p>{!! $blogs->content !!}</p>
              </div>
            <hr>
      @endforeach
    </div>
  </div>
</div>










@include('front.layouts.footer')
