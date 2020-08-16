@include('back.layouts.header')
@if (Auth::check())
  @include('front.layouts.widgets')
@endif
@php
  use Illuminate\Support\Str;
@endphp

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-form">
        <form action="{{route('createPost')}}" method="post" style="width:70%; margin:0 auto;">
          @csrf
          <div class="form-group">
            <h3>title</h3> <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <h3>text</h3>
            <textarea name="content" id="editor1" rows="10" cols="80">

            </textarea>
          </div>
          <button type="submit" class="btn btn-dark">gönder</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="contents">
          <h3>İçerikler</h3>
          @if ($blogs->count() > 0)
            @foreach ($blogs as $blog)
               {!!Str::limit($blog->title, 20, '..')!!}
               <a href="{{route('deletePost', $blog->id)}}">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                 </svg>
               </a>
                 <br><hr>
             @endforeach
           @else
             <h3 class="text-danger">İçerik mevcut değil.</h3>
           @endif
        </div>
    </div>
  </div>
</div>



@include('back.layouts.footer')
