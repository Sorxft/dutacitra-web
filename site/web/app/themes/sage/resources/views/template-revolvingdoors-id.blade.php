{{--
  Template Name: revolvingdoors-id Template
--}}

@extends('layouts.app')

@section('content')
  {{--  Start of Navigation Bar  --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="img-responsive" src="@asset('images/logo.png')" style="width: 300px; height: 50px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse navbar-right" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://dutacitra.test/"><strong>Home</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produk
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://dutacitra.test/hermaticdoor-slidingdoors-id/">Hermetic sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/hermetic-swingdoors-id/">Hermetic swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/slidingdoors-id/">Sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/swingdoors-id/">Swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/motion4doors-id/">Motion 4 doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/revolvingdoors-id/">Revolving doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/deemhermaticsliding-id/">DEEM hermatic sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/deemhermaticswing-id/">DEEM hermatic swing doors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://dutacitra.test/#produkkami">Produk kami</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#images"><strong>Gambar</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Kontak Kami</a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<a href="#" class="back-to-top2" style="background: none; margin: 0%; position: fixed; bottom: 20px; right: 0%; width: 70px; height: 70px; z-index: 100; color: #ffffff; background-color: #000000; font-size: 60px; display: none;">
  <i class="fa fa-angle-double-up"></i>
</a>  
  {{--  Start of Header  --}}
<div class="jumbotron-fluid" style="top-margin: 100px; padding: 0%">
  <div class="container-fluid" style="position: relative;">
    <div class="row" style="padding: 0%">
      <img src="@asset('images/background.jpg')" style="width: 100%; padding: 0%; height: 150px">
      <div class="text-center" style="position: absolute; top: 60%; left: 7%; font-family:Arial, Helvetica, sans-serif">
        <font color="#ffffff"><h2>REVOLVING DOORS</h2></font>
      </div>
    </div>
  </div>
</div>
  {{--  End of Header  --}}
  {{--  Start of Description  --}}
<div style="width: 100%; background-color: #F8F3F0;">
  <div class="container">
    <div class="form-group">
        &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row featurette">
      <div class="col-md-4 order-md-2">
        <h3 class="featurette-heading">
          <p>Revolving doors</p>
        </h3>
        <p class="text-muted">
          <font size="2">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</font>
        </p>
        <div class="form-group">
          &nbsp;
        </div>
        <h5>
          <p>Main features</p>
        </h5>
        <p class="text-muted" style="margin-bottom:8px">
          <font size="2">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px">
          <font size="2">Donec id elit non mi porta gravida at eget metus.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px">
          <font size="2">Donec id elit non mi porta gravida at eget metus.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px">
          <font size="2">Donec id elit non mi porta gravida at eget metus.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px">
          <font size="2">Donec id elit non mi porta gravida at eget metus.</font>
        </p>
        <div class="form-group">
          &nbsp;
        </div>
        <a class="btn btn-outline-secondary btn-sm" href="#">View Revolving Door PDF</a>
      </div>
      <div class="col-md-8 order-md-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="@asset('images/landscape.jpg')" alt="First slide" style="width: 700px; height: 500px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/mountains.jpg')" alt="Second slide" style="width: 700px; height: 500px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/beach.jpg')" alt="Third slide" style="width: 700px; height: 500px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/windmills.jpg')" alt="Fourth slide" style="width: 700px; height: 500px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group" style="margin-bottom: 0%">
    &nbsp;
  </div>
</div>
  {{--  End of Description  --}}
  {{--  Start of GAMBAR PROYEK  --}}
<div class="container" id="images">
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <h1>
        <p class="text-center"><strong>GAMBAR PROYEK</strong></p>
      </h1>
    </div>
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 rounded" src="@asset('images/landscape.jpg')" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 rounded" src="@asset('images/mountains.jpg')" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 rounded" src="@asset('images/windmills.jpg')" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 rounded" src="@asset('images/beach.jpg')" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="form-group">
  &nbsp;
</div>
<div class="form-group">
  &nbsp;
</div>
<div class="form-group">
  &nbsp;
</div>
  {{--  Start of KONTAK KAMI  --}}
<div style="width: 100%; background-color: #000000">
  <div class="container" id="contact">
    <div class="form-group">
    &nbsp;
    </div>
    <div class="form-group">
    &nbsp;
    </div>
    <div class="row justify-content-center">
      <div class="col-4 border-bottom border-white">
        <h1>
          <font color="#6B685F"><p class="text-center">KONTAK KAMI</p></font>
        </h1>
      </div>
    </div>
    <div class="form-group">
    &nbsp;
    </div>
    <div class="row">
      <div class="col-md-6" style="padding-left: 100px">
        <ul class="list-group">
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-user-alt fa-sm"><font color="#ffffff"> SALES PERSON</font></i></font>
            <p><font color="#999994" size="2">  Michael.W (+6281293237874)</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-phone-square fa-sm"><font color="#ffffff"> TELEPON</font></i></font>
            <p><font color="#999994" size="2">  (021) 54377520, 29018868, +6285100749223></font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-fax fa-sm"><font color="#ffffff"> FAX</font></i></font>
            <p><font color="#999994" size="2">  (021) 54365703</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-at fa-sm"><font color="#ffffff"> E-MAIL</font></i></font>
            <p><font color="#999994" size="2">  dutacitra.nusajaya@yahoo.co.id</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-globe fa-sm"><font color="#ffffff"> WEBSITE</font></i></font>
            <p><font color="#999994">  Website address here</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934" size="4"><i class="fa fa-map-marker-alt fa-sm"><font color="#ffffff"> ALAMAT KANTOR</font></i></font>
            <p style="margin: 0%"><font color="#999994" size="2">  PT. DutaCitra Nusa Jaya</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Jl. Utan Jati, Ruko Daan Mogot Baru</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Blok LB 2 No. 15 Kalideres</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Jakarta Barat 11840, Indonesia</font></p>
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="embed-responsive" id="map" style="width:100%; height: 100%">
          <iframe src="https://www.google.com/maps/d/embed?mid=1KUF4ZpXzXlC7wQnxCHtxMyGSbeZ0ag8i" width="640" height="480"></iframe>
        </div>
      </div>
    </div>
    <div class="form-group">
    &nbsp;
    </div>
    <div class="form-group">
    &nbsp;
    </div>
    <div class="form-group" style="margin-bottom: 0%">
    &nbsp;
    </div>
  </div>
</div>
    {{--  End of KONTAK KAMI  --}}
@endsection