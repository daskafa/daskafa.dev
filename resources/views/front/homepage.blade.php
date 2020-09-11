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
        <div class="col-md-5">
          <div class="title">
            <h1>Selam, <br> Ben <span>Yılmaz!</span> </h1>
            <hr>
          </div>
          <div class="text">
            <p>Merhabalar, hemen özet geçiyorum lisede çok çalışkan bir öğrenci sayılmazdım üniversite olarak büyük bir hedefim olduğu söylenemezdi spor ile ilgilendiğim için besyo denedim fakat bir şekilde olmadı. Bende zaten bilgisayarları seviyorum diyerek puanımın yettiği bilgisayar programcılığı bölümüne gittim. İlk kodumu yazdığımda bende şimşekler çaktı ve ben bu işi severek yaparım dedim. O günden sonra bu yol üzerinde kendimi devamlı olarak geliştirmeye devam ettim, ediyorum. Hakkımda  bölümünde kendimi çok daha detaylı anlatıyorum. Teşekkürler güzel insan.</p>
          </div>
          <div class="button">
            <button type="button">Hadi iletişime geçelim<i class="ri-arrow-right-line"></i></button>
          </div>
        </div>
        <div class="col-md-7">
          <div class="image">

          </div>
        </div>
      </div>
    </div>
  </div>
</main>










@include('front.layouts.footer')
