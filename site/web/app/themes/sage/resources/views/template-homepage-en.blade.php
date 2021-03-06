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
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item border-right border-light" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="https://dutacitra-automaticdoor.com/"><img class="img-responsive" src="@asset('images/ID32.png')"></a>
      </li>
      <li class="nav-item" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="https://dutacitra-automaticdoor.com/en/"><img class="img-responsive" src="@asset('images/US32.png')"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link home" href="https://dutacitra-automaticdoor.com/en/"><strong><font color="#ffffff">Home</font></strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font color="#ffffff">Products</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/hermetic-slidingdoors-en/">Hermetic sliding doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/hermetic-swingdoors-en/">Hermetic swing doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/slidingdoors-en/">Sliding doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/swingdoors-en/">Swing doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/lineardoors-en/">Linear doors</a>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/expressgate-en/">Express gate</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/other-en/">Other products</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/projectreferences-en/">Project references</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus"><strong><font color="#ffffff">About Us</font></strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:dutacitramarketing@gmail.com"><font color="#ffffff">E-mail</font></a>
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
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="@asset('images/banner1.jpg')" alt="First slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Automatic Sliding Door</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/sliding2.jpg')" alt="Second slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Automatic Sliding Door</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/hermeticsliding1.jpg')" alt="Third slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Hermetic Sliding Door</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/hermeticswing2.jpg')" alt="Fourth slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Hermetic Swing Door</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/swing3.jpg')" alt="Fifth slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Automatic Swing Door</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/linear3.jpg')" alt="Sixth slide" style="width: 100%; height: 600px">
        <div class="carousel-caption d-none d-md-block">
          <p>Linear Door</p>
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
       <p class="lead" style="text-align:justify">
         PT. DutaCitra Nusa Jaya is the Sole Distributor of Manusa Automatic Doors, Barcelona - Spain, in Indonesia. Doors such as : Hermetic sliding doors, Hermetic swing doors, Sliding doors, Swing doors and Linear doors
       </p>
       <p class="lead" style="text-align:justify">
          PT. DutaCitra Nusa Jaya was founded in 2004, and specializes in Automatic Door operators.
       </p>
       <p class="lead" style="text-align:justify">
          After a long period of operations, of course we have a very adequate and Professional Work Team. Therefore, we not only make sales and installations, but also do after sales services, either in the form of repairs to the damage that occurs or also periodic services.
       </p>
       <blockquote class="blockquote">
        <p class="mb-0">"If nobody opens the door for you, please call us"</p>
        <footer class="blockquote-footer"><cite title="Source Title">PT.DutaCitra Nusa Jaya</cite></footer>
       </blockquote>
     </div>
      <div class="col-md-5 order-md-1">
        <img class="feature-image img-fluid mx-auto rounded" alt="500x500" src="@asset('images/about.jpg')" style="width: 500px; height: 500px;">
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
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/hermeticsliding2.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title text-center">
              Hermetic sliding doors
            </h4>
            <a href="https://dutacitra-automaticdoor.com/hermetic-slidingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/hermeticswing3.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title text-center">
                Hermetic swing doors
            </h4>
            <a href="https://dutacitra-automaticdoor.com/hermetic-swingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/product2.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Sliding doors
              </p>
            </h4>
            <a href="https://dutacitra-automaticdoor.com/slidingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
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
          <img class="card-img-top" src="@asset('images/product1.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title text-center">
              Swing doors
            </h4>
            <a href="https://dutacitra-automaticdoor.com/swingdoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
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
            <a href="https://dutacitra-automaticdoor.com/lineardoors-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/expressgate3.jpg')" alt="card image cap" style="width: 100%; height: 190px">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Express gate
              </p>
            </h4>
            <a href="https://dutacitra-automaticdoor.com/expressgate-en/" class="btn btn-small btn-dark float-right">More info  <i class="fa fa-caret-right"></i></a>
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
            <font color="#887934"><i class="fa fa-phone-square fa-sm"><font color="#ffffff"> TELEPHONE</font></i></font>
            <p><font color="#999994" size="2">  (021) 54377520, (021) 29018868, +6281293237874, +6285100749223</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-fax fa-sm"><font color="#ffffff"> FAX</font></i></font>
            <p><font color="#999994" size="2">  (021) 54365703</font></p>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-at fa-sm"><font color="#ffffff"> E-MAIL</font></i></font>
            <a href="mailto:dutacitramarketing@gmail.com"><p><font color="#999994" size="2">  dutacitramarketing@gmail.com</font></p></a>
          </li>
          <li class="list-group-item" style="background-color: #000000; padding: 0%">
            <font color="#887934"><i class="fa fa-globe fa-sm"><font color="#ffffff"> WEBSITE</font></i></font>
            <a href="https://dutacitra-automaticdoor.com/"><p><font color="#999994" size="2">  dutacitra-automaticdoor.com</font></p></a>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8728037952415!2d106.70993171476879!3d-6.147780395548881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9f26ee22301%3A0xd48a5a308918c15a!2sAutomatic+Doors%2C+Manusa+Automatic+Doors+-+PT.+DutaCitra+NusaJaya!5e0!3m2!1sid!2sus!4v1535565603463" width="640" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<div style="width: 100%; background-color: #000000" style="margin-bottom: 0%">
  <div class="container" style="margin-bottom: 0%">
    <p class="text-center" style="margin-bottom:0%"> made by <a href="https://ryanpatrickwong.com/" style="color: #696969;">Ryan Patrick Wong</a></p>
  </div>
</div>
    {{--  End of CONTACT US  --}}
@endsection