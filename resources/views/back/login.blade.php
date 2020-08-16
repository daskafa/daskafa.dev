@include('back.layouts.header')

<div class="container">
  <div class="col-md-12">
  <div class="login">
    <form action="{{route('admin.login.post')}}" method="POST">
      @csrf
      @if ($errors->any())
        <div class="alert alert-danger">
          {{$errors->first()}}
        </div>
      @endif
      <div class="form-group">
        <label for="exampleInputEmail1">Email adresiniz</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Lütfen bilgilerinizi doğru giriniz.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Şifreniz</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Giriş yap</button>
    </form>
    {{-- <form action="{{route('admin.login.post')}}" method="POST">
      @csrf
      <div class="form-group">
        <label>Email Adresiniz</label>
        <input type="text" name="email">
        <label>Şifreniz: </label>
        <input type="password" name="password">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form> --}}
  </div>
  </div>
</div>

@include('back.layouts.footer')
