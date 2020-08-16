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

@include('front.layouts.widgets')


<div class="container">
  <div class="col-md-12">
    @foreach ($blog as $blogs)
          <div class="title">
            <h3>{{$blogs->title}}</h3>
          </div>
          <div class="content">
            <p>{!! $blogs->content !!}</p>
          </div>
          <hr>
    @endforeach
  </div>
</div>










@include('front.layouts.footer')
