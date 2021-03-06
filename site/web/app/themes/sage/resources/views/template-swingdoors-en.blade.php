{{--
  Template Name: swingdoors-en Template
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
        <a href="https://dutacitra-automaticdoor.com/swingdoors-id/"><img class="img-responsive" src="@asset('images/ID32.png')"></a>
      </li>
      <li class="nav-item" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="https://dutacitra-automaticdoor.com/swingdoors-en/"><img class="img-responsive" src="@asset('images/US32.png')"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://dutacitra-automaticdoor.com/en/"><strong><font color="#ffffff">Home</font></strong><span class="sr-only">(current)</span></a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <strong><font color="#ffffff">Brochure</font></strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/app/uploads/2018/08/Vector_swing_door.pdf">Vector</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://dutacitra-automaticdoor.com/app/uploads/2018/08/Vector_swing_door_operator.pdf">Vector operator</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><font color="#ffffff">Contact Us</font></a>
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
        <font color="#ffffff"><h2>SWING DOORS</h2></font>
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
      <div class="col-md-4 order-md-2" style="padding-left: 30px">
        <h3 class="featurette-heading">
          <p>Swing doors</p>
        </h3>
        <p class="text-muted" style="line-height:20px; text-align:justify">
          <font size="2">Manusa’s swing doors provide functionality, safety and design. Personalized finishings and colours allow them to adapt perfectly to all the types of surrounds in which they are to be installed.</font>
        </p>
          &nbsp;
        <h5>
          <p>Main features</p>
        </h5>
        <p class="text-muted" style="margin-bottom:8px; line-height:15px">
          <font size="2">The most adaptable swing door.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 6px; line-height:15px">
          <font size="2">Installation with hardly any limitations.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Possibility of automating new or existing doors.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Maximum safety.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 6px; line-height:15px">
          <font size="2">Left or right opening – push or slide.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">One single leaf is driven by just one operator.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Minimalist design operator set in rounded case.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 6px; margin-bottom: 8px; line-height:15px">
          <font size="2">Fully customizable in measures, finish options and colours.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Wide range of accessories.</font>
        </p>
        <div class="form-group">
          &nbsp;
        </div>
        <a class="btn btn-outline-secondary btn-sm" href="https://dutacitra-automaticdoor.com/app/uploads/2018/08/Vector_swing_door.pdf">View Vector PDF</a>
        <a class="btn btn-outline-secondary btn-sm" href="https://dutacitra-automaticdoor.com/app/uploads/2018/08/Vector_swing_door_operator.pdf">View Vector Operator PDF</a>
      </div>
      <div class="col-md-8 order-md-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="@asset('images/swing1.jpg')" alt="First slide" style="width: 660px; height: 465px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/swing2.jpg')" alt="Second slide" style="width: 660px; height: 465px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/swing3.jpg')" alt="Third slide" style="width: 660px; height: 465px">
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
        <div class="form-group">
          &nbsp;
        </div>
        <div style="font-size: 0.5rem;">
          <i class="far fa-arrow-alt-circle-left fa-2x"><font class="text-muted" size="3">  Back to <a href="https://dutacitra-automaticdoor.com/en/#products" style="color: #000000;">products</a></font></i>
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
            <font color="#887934" size="4"><i class="fa fa-map-marker-alt fa-sm"><font color="#ffffff"> ADDRESS</font></i></font>
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