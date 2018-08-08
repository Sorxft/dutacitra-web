{{--
  Template Name: lineardoors-id Template
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
        <a href="http://dutacitra.test/lineardoors-id/"><img class="img-responsive" src="@asset('images/ID32.png')"></a>
      </li>
      <li class="nav-item" style="padding-top: 8px; padding-left: 5px; padding-right: 5px">
        <a href="http://dutacitra.test/lineardoors-en/"><img class="img-responsive" src="@asset('images/US32.png')"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://dutacitra.test/"><strong><font color="#ffffff">Home</font></strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font color="#ffffff">Produk</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://dutacitra.test/hermetic-slidingdoors-id/">Hermetic sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/hermetic-swingdoors-id/">Hermetic swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/slidingdoors-id/">Sliding doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/swingdoors-id/">Swing doors</a>
          <a class="dropdown-item" href="http://dutacitra.test/lineardoors-id/">Linear doors</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://dutacitra.test/other-id/">Produk lain</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://dutacitra.test/projectreferences-id/">Referensi proyek</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <strong><font color="#ffffff">Brosur</font></strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://dutacitra.test/app/uploads/2018/07/linear.pdf">Linear door</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"><font color="#ffffff">Kontak Kami</font></a>
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
        <font color="#ffffff"><h2>LINEAR DOORS</h2></font>
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
          <p>Linear doors</p>
        </h3>
        <p class="text-muted" style="line-height:20px">
          <font size="2">Pintu linear menggunakan sistem otomasi berdasarkan teknlogi motor linear. Digunakan untuk penggunaan rumah, perumahan dan komersial. Sangat efisien untuk mengotomatisasi gerakan horizontal dengan memiliki lebih sedikit komponen mekanis.</font>
        </p>
          &nbsp;
        <h5>
          <p>Fitur utama</p>
        </h5>
        <p class="text-muted" style="margin-bottom:8px; line-height:15px">
          <font size="2">Menggunakan teknologi motor linier.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Desain yang sederhana.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Rangka pintu yang tipis.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Penggerak motor linear tidak memiliki pulley, belt, lengan dan elemen mekanis lainnya.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Keamanan maksimal.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Unit kompak kecil, sehingga memiliki lebih sedikit komponen mekanis.</font>
        </p>
        <hr style="margin-top: 0%; margin-bottom: 0%">
        <p class="text-muted" style="margin-top: 8px; margin-bottom: 8px; line-height:15px">
          <font size="2">Proses instalasi yang sederhana.</font>
        </p>
        <div class="form-group">
          &nbsp;
        </div>
        <a class="btn btn-outline-secondary btn-sm" href="http://dutacitra.test/app/uploads/2018/07/linear.pdf">View Linear doors PDF</a>
      </div>
      <div class="col-md-8 order-md-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="@asset('images/linear1.jpg')" alt="First slide" style="width: 660px; height: 465px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/linear2.jpg')" alt="Second slide" style="width: 660px; height: 465px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="@asset('images/linear3.jpg')" alt="Third slide" style="width: 660px; height: 465px">
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
          <i class="far fa-arrow-alt-circle-left fa-2x"><font class="text-muted" size="3">  Kembali ke <a href="http://dutacitra.test/#produk" style="color: #000000;">produk</a></font></i>
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
            <p><font color="#999994" size="2">  (021) 54377520, 29018868, +6285100749223</font></p>
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
            <p><font color="#999994" size="2">  dutacitranusajaya.com</font></p>
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
<div style="width: 100%; background-color: #000000" style="margin-bottom: 0%">
  <div class="container" style="margin-bottom: 0%">
    <p class="text-center" style="margin-bottom:0%"> made by <a href="https://ryanpatrickwong.com/" style="color: #696969;">Ryan Patrick Wong</a></p>
  </div>
</div>
    {{--  End of KONTAK KAMI  --}}
@endsection