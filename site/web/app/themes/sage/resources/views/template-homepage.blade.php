{{--
  Template Name: home Template
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
        <a class="nav-link home" href="#"><h5>Home</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#aboutus"><h5>About us</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ourproducts"><h5>Products</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#contact"><h5>Contact Us</h5></a>
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
  <div class="container" id="ourproducts">
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
      <div class="col-4 border-bottom border-success">
        <h3 class="display-4">
          <p class="text-center">OUR PRODUCTS</p>
        </h3>
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
              Title 1
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="http://dutacitra.test/hermaticdoor/" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
                Title 2
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
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/mountains.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Title 3
              </p>
            </h4>
            <p class="card-text"> Some quick example text to write onn the card. This is the content of the card.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/windmills.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title text-center">
                Title 4
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
      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="@asset('images/mountains.jpg')" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">
              <p class="text-center">
                Title 5
              </p>
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
  {{--  Start of WHY CHOOSE US  --}}
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
          <p class="text-center">WHY CHOOSE US?</p>
        </h1>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <i class="fa fa-thumbs-up fa-5x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h2>Heading 1</h2>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-calendar-alt fa-5x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h2>Heading 2</h2>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-cogs fa-5x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h2>Heading 3</h2>
        <div class="form-group">
          &nbsp;
        </div>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-user-clock fa-5x"></i>
        <div class="form-group">
          &nbsp;
        </div>
        <h2>Heading 4</h2>
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
  {{--  End of WHY CHOOSE US  --}}
  {{--  Start of Anything Here  --}}
<div style="width: 100%;">
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
        <h3 class="display-4">
          <p class="text-center">Anything Here I guess</p>
        </h3>
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
  {{--  End of Anything Here  --}}
  {{--  Start of Contact us  --}}
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
                        <font color="#887934"><i class="fa fa-user-alt fa-lg"><font color="#999994">  Michael.W (+6281293237874)</font></i></font>
                    </li>
                    <li class="list-group-item" style="background-color: #000000">
                        <font color="#887934"><i class="fa fa-phone-square fa-lg"><font color="#999994">  (021)54377520, 29018868, +6285100749223</font></i></font>
                    </li>
                    <li class="list-group-item" style="background-color: #000000">
                        <font color="#887934"><i class="fa fa-fax fa-lg"><font color="#999994">  (021)54365703</font></i></font>
                    </li>
                    <li class="list-group-item" style="background-color: #000000">
                        <font color="#887934"><i class="fa fa-at fa-lg"><font color="#999994">  dutacitra.nusajaya@yahoo.co.id</font></i></font>
                    </li>
                    <li class="list-group-item" style="background-color: #000000">
                        <font color="#887934"><i class="fa fa-globe fa-lg"><font color="#999994">  Website address here</font></i></font>
                    </li>
                    <li class="list-group-item" style="background-color: #000000">
                        <font color="#887934"><i class="fa fa-map-marker-alt fa-lg"><font color="#999994">  Jl. Utan Jati Ruko Daan Mogot Baru, Blok LB 2 No. 15 Kalideres, Jakarta Barat</font></i></font>
                    </li>
                </ul>
            </div>
        <div class="col-md-6">
            <div class="embed-responsive" id="map" style="width:100%; height: 400px">
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