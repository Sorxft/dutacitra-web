{{--
  Template Name: hermaticdoor Template
--}}

@extends('layouts.app')

@section('content')
  {{--  Start of Navigation Bar  --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="img-responsive" src="@asset('images/logo.png')" style="width: 400px; height: 70px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse navbar-right" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://dutacitra.test/"><h5>Home</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#images"><h5>Images</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><h5>Contact Me</h5></a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<a href="#" class="back-to-top2" style="background: none; margin: 0%; position: fixed; bottom: 20px; right: 0%; width: 70px; height: 70px; z-index: 100; color: #ffffff; background-color: #000000; font-size: 60px">
    <i class="fas fa-angle-double-up"></i>
</a>
  {{--  Start of Header  --}}
<div class="jumbotron-fluid" style="top-margin: 100px; padding: 0%">
  <div class="container-fluid" style="position: relative;">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row" style="padding: 0%">
      <img src="@asset('images/landscape.jpg')" style="width: 100%; padding: 0%;">
      <div class="text-center" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); font-family:'Courier New', Courier, monospace">
        <font color="#ffffff"><h1 class="display-4">Nature</h1></font>
      </div>
    </div>
  </div>
</div>
  {{--  End of Header  --}}
  {{--  Start of Description  --}}
<div style="width: 100%; background-color: #EDF4ED">
  <div class="container">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          <p class="text-center">First featurette heading</p>
        </h2>
        <p class="lead">
          Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis eusmod semper. Praesent commodo cursus magna, vel scelerisque nnusl consectetur. Fusce dapibus, tellus ac cursus commodo.
        </p>
        <a class="btn btn-outline-secondary btn-sm" href="http://dutacitra.test/app/uploads/2018/07/hermetic.pdf">View PDF</a>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto rounded" alt="500x500" style="width: 500px; height: 500px" src="@asset('images/mountains.jpg')">
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
  {{--  Start of Images  --}}
<div class="container" id="images">
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <h1 class="display-4">
        <p class="text-center">Images</p>
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
        <img class="d-block w-100" src="@asset('images/landscape.jpg')" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/mountains.jpg')" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/windmills.jpg')" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/beach.jpg')" alt="Fourth slide">
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
  {{--  Start of CONTACT US  --}}
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
        <h3 class="display-4">
          <font color="#6B685F"><p class="text-center">CONTACT US</p></font>
        </h3>
      </div>
    </div>
    <div class="form-group">
    &nbsp;
    </div>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-user-alt fa-lg"><font color="#ffffff"> SALES PERSON</font></i></font>
            <font color="#999994"><h6>  Michael.W (+6281293237874)</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-phone-square fa-lg"><font color="#ffffff"> TELEPHONE</font></i></font>
            <font color="#999994"><h6>  (021) 54377520, 29018868, +6285100749223</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-fax fa-lg"><font color="#ffffff"> FAX</font></i></font>
            <font color="#999994"><h6>  (021) 54365703</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-at fa-lg"><font color="#ffffff"> E-MAIL</font></i></font>
            <font color="#999994"><h6>  dutacitra.nusajaya@yahoo.co.id</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-globe fa-lg"><font color="#ffffff"> WEBSITE</font></i></font>
            <font color="#999994"><h6>  Website address here</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-map-marker-alt fa-lg"><font color="#ffffff"> ADDRESS</font></i></font>
            <font color="#999994"><h6>  PT. DutaCitra Nusa Jaya</h6></font>
            <font color="#999994"><h6>  Jl. Utan Jati, Ruko Daan Mogot Baru</h6></font>
            <font color="#999994"><h6>  Blok LB 2 No. 15 Kalideres</h5></font>
            <font color="#999994"><h6>  Jakarta Barat 11840, Indonesia</h6></font>
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
    {{--  End of CONTACT US  --}}
@endsection