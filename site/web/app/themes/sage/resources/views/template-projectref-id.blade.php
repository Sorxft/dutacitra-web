{{--
  Template Name: projectref-id Template
--}}

@extends('layouts.app')

@section('content')
 {{--  Start of Navigation Bar  --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #005A86">
  <a class="navbar-brand" href="#">
    <img class="img-responsive" src="@asset('images/companylogo.png')" style="width: 250px; height: 40px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse navbar-right" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item border-right border-light" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="https://dutacitra-automaticdoor.com/projectreferences-id/"><img class="img-responsive" src="@asset('images/ID32.png')"></a>
      </li>
      <li class="nav-item" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="https://dutacitra-automaticdoor.com/projectreferences-en/"><img class="img-responsive" src="@asset('images/US32.png')"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link home" href="https://dutacitra-automaticdoor.com/"><strong><font color="#ffffff">Home</font></strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font color="#ffffff">Produk</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/hermetic-slidingdoors-id/">Hermetic sliding doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/hermetic-swingdoors-id/">Hermetic swing doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/slidingdoors-id/">Sliding doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/swingdoors-id/">Swing doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/lineardoors-id/">Linear doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/expressgate-id/">Express gate</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/other-id/">Produk lain</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/projectreferences-id/">Referensi proyek</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://dutacitra-automaticdoor.com/#contact"><strong><font color="#ffffff">Kontak Kami</font></strong></a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<div class="form-group">
  &nbsp;
</div>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection