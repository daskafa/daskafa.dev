@php
  use Illuminate\Support\Facades\Auth;
@endphp
@include('front.layouts.header')
@if (Auth::check())
  @include('front.layouts.widgets')
@endif




<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="blog-title">
        <h3>{!!$blogs->title!!}</h3>
      </div>
      <div class="blog-text">
        <p>{!!$blogs->content!!}</p>
      </div>
    </div>
  </div>
</div>












@include('front.layouts.footer')
