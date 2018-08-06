{{--
  Template Name: home-en Template
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item border-right border-light" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="http://dutacitra.test/"><img class="img-responsive" src="@asset('images/ID32.png')"></a>
      </li>
      <li class="nav-item" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="http://dutacitra.test/en/"><img class="img-responsive" src="@asset('images/US32.png')"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link home" href="http://dutacitra.test/en/"><strong><font color="#ffffff">Home</font></strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font color="#ffffff">Products</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://dutacitra.test/hermetic-slidingdoors-en/">Hermetic sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/hermetic-swingdoors-en/">Hermetic swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/slidingdoors-en/">Sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/swingdoors-en/">Swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/lineardoors-en/">Linear doors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Other products</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus"><strong><font color="#ffffff">About Us</font></strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:dutacitra.nusajaya@yahoo.co.id"><font color="#ffffff">E-mail</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><strong><font color="#ffffff">Contact Us</font></strong></a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<a href="#" class="back-to-top1" style="background: none; margin: 0%; position: fixed; bottom: 20px; right: 0%; width: 70px; height: 70px; z-index: 100; color: #ffffff; background-color: #000000; font-size: 60px; display: none;">
    <i class="fa fa-angle-double-up"></i>
</a>
  {{--  Start of Images Slides  --}}
<div class="template-home">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="@asset('images/banner1.jpg')" alt="First slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/sliding2.jpg')" alt="Second slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/hermeticsliding1.jpg')" alt="Third slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
        </div>
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
  {{--  End of Images Slides  --}}
   {{--  Start ABOUT US  --}}
<div style="width: 100%; background-color: #DDDBD2;">
  <div class="container" id="aboutus">
    <div class="form-group">
       &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">
          <p class="text-center">ABOUT US</p>
       </h2>
       <p class="lead">
         Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
       </p>
     </div>
      <div class="col-md-5 order-md-1">
        <img class="feature-image img-fluid mx-auto rounded" alt="500x500" src="@asset('images/windmills.jpg')" style="width: 500px; height: 500px;">
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
    {{--  End ABOUT US  --}}
    {{--  Start of Card  --}}
<div style="width: 100%;">
  <div class="container" id="products">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row justify-content-center">
      <div class="col-4 border-bottom border-dark">
        <h1>
          <p class="text-center"><strong>OUR PRODUCTS</strong></p>
        </h1>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
      {{--  Start of row 1  --}}
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/hermeticsliding2.jpg')" alt="card image cap" style="width: 100%; height: 280px">
          <div class="card-body">
            <h4 class="card-title text-center">
              Hermetic sliding doors
            </h4>
            <a href="http://dutacitra.test/hermetic-slidingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/hermeticswing3.jpg')" alt="card image cap" style="width: 100%; height: 280px">
          <div class="card-body">
            <h4 class="card-title text-center">
                Hermetic swing doors
            </h4>
            <a href="http://dutacitra.test/hermetic-swingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    {{--  End of row 1  --}}
    <div class="form-group">
      &nbsp;
    </div>
    {{--  Start of row 2  --}}
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/product2.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Sliding doors
              </p>
            </h4>
            <a href="http://dutacitra.test/slidingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/product1.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title text-center">
              Swing doors
            </h4>
            <a href="http://dutacitra.test/swingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/product3.png')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Linear doors
              </p>
            </h4>
            <a href="http://dutacitra.test/lineardoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    {{--  End of row 2  --}}
    <div class="form-group">
      &nbsp;
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
  {{--  End of card  --}}
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
        <h1>
          <font color="#6B685F"><p class="text-center">CONTACT US</p></font>
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
            <font color="#887934"><i class="fa fa-phone-square fa-sm"><font color="#ffffff"> TELEPHONE</font></i></font>
            <p><font color="#999994" size="2">  (021) 54377520, 29018868, +6285100749223</font></p>
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
            <font color="#887934"><i class="fa fa-map-marker-alt fa-sm"><font color="#ffffff"> ADDRESS</font></i></font>
            <p style="margin: 0%"><font color="#999994" size="2">  PT. DutaCitra Nusa Jaya</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Jl. Utan Jati, Ruko Daan Mogot Baru</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Blok LB 2 No. 15 Kalideres</font></p>
            <p style="margin: 0%"><font color="#999994" size="2">  Jakarta Barat 11840, Indonesia</font></p>
          </li>
        </ul>
      </div>
      <div class="col-md-6" style="padding-right: 30px">
        <div class="embed-responsive" id="map" style="width:100%; height: 100%">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2404.106177147405!2d106.71127686001809!3d-6.148310937122636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9f26ee22301%3A0xd48a5a308918c15a!2sPT.+DutaCitra+NusaJaya!5e0!3m2!1sen!2sid!4v1532750663575" width="640" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
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