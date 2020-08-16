<div class="routes">
  <ul class="list-group">
    <li class="list-group-item @if(Request::segment(1) == '' ) active @endif "><a href="{{route('homepage')}}">homepage</a></li>
    <li class="list-group-item @if(Request::segment(1) == 'blog' ) active @endif "><a href="{{route('blog')}}">blog</a></li>
    @if (Auth::check())
      <li class="list-group-item @if(Request::segment(1) == 'dashboard' ) active @endif"><a href="{{route('dashboard')}}">dashboard</a></li>
      <li class="list-group-item"><a href="{{route('logout')}}">logout</a></li>
    @else
      <li class="list-group-item"><a href="{{route('login')}}">login</a></li>
    @endif
  </ul>
</div>
