@include('front.layouts.header')

@if (Auth::check())
  @include('front.layouts.widgets')
@endif

@include('front.layouts.nav')
{{-- <div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @foreach ($blog as $blogs)
              <a href="{{route('single', $blogs->slug)}}">
                <div class="title">
                  <h3>{{$blogs->title}}</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <div class="col-md-12">
                      <div class="blog-info">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                          <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <div class="date-text">
                          <p>{{$blogs->created_at->diffForHumans()}}</p>
                        </div>
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                            <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                        <div class="reading-counter">
                          <p>{{$blogs->hit}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
                <div class="content">
                  <p>{!!Str::limit($blogs->content, 500, '..')!!}</p>
                </div>
              <hr>
        @endforeach
      </div>
    </div>
  </div>
</div> --}}



<div class="blog">

  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner-text">
            <h3>Blog</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content">

    <div class="container">
      <div class="row">
          @foreach ($blog as $blogs)
          <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-transparent border-secondary">
                <div class="blog-info">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                  <div class="date-text">
                    <p>{{$blogs->created_at->diffForHumans()}}</p>
                  </div>
                </div>
                <hr>
                <h5>{{$blogs->title}}</h5>
              </div>
              <div class="card-body text-secondary">
                {{-- <h5 class="card-title">Success card title</h5> --}}
                <p class="card-text">{!!Str::limit($blogs->content, 300, '..')!!}</p>
              </div>
              <div class="card-footer bg-transparent border-secondary"> <a href="{{route('single', $blogs->slug)}}">devamı burada</a> </div>
            </div>
          </div>
      @endforeach
      </div>
    </div>

  </div>

</div>



















@include('front.layouts.footer')
