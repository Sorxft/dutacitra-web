{{--
  Template Name: home-id Template
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
        <a class="nav-link home" href="#"><h5>Home</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#tentangkami"><h5>Tentang Kami</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#produkkami"><h5>Produk</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#kontak"><h5>Kontak Kami</h5></a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<a href="#" class="back-to-top1" style="background: none; margin: 0%; position: fixed; bottom: 20px; right: 0%; width: 70px; height: 70px; z-index: 100; color: #ffffff; background-color: #000000; font-size: 60px">
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
        <img class="d-block w-100" src="@asset('images/landscape.jpg')" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5> First Slide Label </h5>
          <p> Hahaha </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/mountains.jpg')" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5> Second Slide Label </h5>
          <p> Hahaha </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/windmills.jpg')" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5> Third Slide Label </h5>
          <p> Hahaha </p>
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
   {{--  Start TENTANG KAMI  --}}
<div style="width: 100%; background-color: #DDDBD2;">
  <div class="container" id="tentangkami">
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
          <p class="text-center">TENTANG KAMI</p>
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
    {{--  End TENTANG KAMI  --}}
    {{--  Start of Card  --}}
<div style="width: 100%;">
  <div class="container" id="produkkami">
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
          <p class="text-center"><strong>PRODUK KAMI</strong></p>
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
          <img class="card-img-top" src="@asset('images/landscape.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
              Hermetic sliding doors
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="http://dutacitra.test/hermaticdoor-id/" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
                Hermetic swing doors
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
          <img class="card-img-top" src="@asset('images/mountains.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Sliding doors
              </p>
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
              Swing doors
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/mountains.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Motion 4 doors
              </p>
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    {{--  End of row 2  --}}
    <div class="form-group">
      &nbsp;
    </div>
    {{--  Start of row 3  --}}
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/mountains.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Revolving doors
              </p>
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
                DEEM hermetic sliding doors
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
                DEEM hermetic swing doors
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    {{--  End of row 3  --}}
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
</div>
  {{--  End of card  --}}
  {{--  Start of KEUNGGULAN KAMI  --}}
<div style="width: 100%; background-color: #A6D9F7">
  <div class="container">
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
          <p class="text-center">KEUNGGULAN KAMI</p>
        </h1>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <i class="fa fa-thumbs-up fa-3x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h3>Produk Original Dari Eropa</h3>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-cogs fa-3x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h3>Menggunakan 2 Motor</h3>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-certificate fa-3x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h3>Garansi & Spare Part Terjamin</h3>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-user-clock fa-3x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h3>Pelayanan 24 Jam / 7 Hari</h3>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
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
</div>
  {{--  End of KEUNGGULAN KAMI  --}}
  {{--  Start of KLIEN KAMI  --}}
<div style="width: 100%;">
  <div class="container">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row justify-content-center">
      <div class="col-4 border-bottom border-dark">
        <h1>
          <p class="text-center"><strong>KLIEN KAMI</strong></p>
        </h1>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/windmills.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/landscape.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/mountains.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/landscape.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/windmills.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/landscape.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/mountains.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
      <div class="col-md-3 text-center">
        <img class="rounded img-thumbnail" src="@asset('images/landscape.jpg')" alt="Generic placeholder image" width="200" height="200">
      </div>
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
</div>
  {{--  End of KLIEN KAMI --}}
  {{--  Start of KONTAK KAMI  --}}
<div style="width: 100%; background-color: #000000">
  <div class="container" id="kontak">
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
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-user-alt fa-lg"><font color="#ffffff"> SALES PERSON</font></i></font>
            <font color="#999994"><h6>  Michael.W (+6281293237874)</h6></font>
          </li>
          <li class="list-group-item" style="background-color: #000000">
            <font color="#887934"><i class="fa fa-phone-square fa-lg"><font color="#ffffff"> TELEPON</font></i></font>
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
            <font color="#887934"><i class="fa fa-map-marker-alt fa-lg"><font color="#ffffff"> ALAMAT KANTOR</font></i></font>
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
    {{--  End of KONTAK KAMI  --}}
@endsection