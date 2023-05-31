@extends('layouts.project')
{{-- @section('title', 'Phones') --}}
@section('content')
<style>
    .card {
  border: none;
  border-radius: 0;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
}
.carousel-inner {
  padding: 1em;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
.carousel-control-prev span,
.carousel-control-next span {
  width: 1.5rem;
  height: 1.5rem;
}
@media screen and (min-width: 577px) {
  .cards-wrapper {
    display: flex;
  }
  .card {
    margin: 0 0.5em;
    width: calc(100% / 2);
  }
  .image-wrapper {
    height: 20vw;
    margin: 0 auto;
  }
}
@media screen and (max-width: 576px) {
  .card:not(:first-child) {
    display: none;
  }
}

.image-wrapper img {
  max-width: 100%;
  max-height: 100%;
}
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 100vh;
  }
}

.top-nav-collapse {
  background-color: #563e91 !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #563e91 !important;
  }
}

.rgba-gradient {
  background: -moz-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
  background: -webkit-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
  background: linear-gradient(to 45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <!-- Background image -->
    <div class="text-center mt-0 pt-5 pb-5 mb-5 ps-0 ms-0" style="background-color:#F8FAFC">
        <img src='{{url('/images/no.png')}}' class="img-fluid " alt="Responsive image">       
    </div>
    <!-- Background image -->
<body style="background-color:#C7CFDB">
  <div class="container fs-3">
    <div class="text-center pt-5">
      <h1>Our Courses</h1>
  </div>
  <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <?php $pos=1 ?>
            @foreach($track as $item)
            @if($pos<4)
          {{-- @while()) --}}
            <div class="card">
              <div class="image-wrapper">
                <img src='{{$item->img}}' alt="...">
                
              </div>
              <div class="card-body ms-3">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title fs-2">{{$item->name}}</h5>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-sm-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </div>
                  <div class="col">
                    <p class="card-text text-secondary">{{$item->teacher}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <ul class="list-inline">
                      <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->hours}} total hours</small></h6></li>
                      <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->lectures}} lectures</small></h6></li>
                      <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->level}}</small></h6></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    
                  </div>
                </div>
              </div>
                  <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        <span className="text-blue font-itealic mb-0"><span className="mr-1"><p class="fs-1">$</span>{{$item->price}}</p></span>
                      </div>
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <a href="checkout/{{$item->id}}" class="btn btn-outline-primary fs-4">Buy now</a>
                          </div>
                        </div>
                        <div class="row pt-1">
                          <div class="col">
                            <a href="#" class="btn btn-primary fs-4">Add to cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          <?php $pos++ ?>
          @endif
          @endforeach
          </div>
        </div>
        <?php $pos=1 ?>
        @foreach($track as $item)
        @if($pos<4)
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src='{{$item->img}}' alt="...">
              </div>
              <div class="card-body ms-3">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fs-2">{{$item->name}}</h5>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-sm-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </div>
                    <div class="col">
                      <p class="card-text text-secondary">{{$item->teacher}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <ul class="list-inline">
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->hours}} total hours</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->lectures}} lectures</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->level}}</small></h6></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      
                    </div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row">
                    <div class="col">
                      <span className="text-blue font-itealic mb-0"><span className="mr-1"><p class="fs-1">$</span>{{$item->price}}</p></span>
                    </div>
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <a href="checkout/{{$item->id}}" class="btn btn-outline-primary fs-4">Buy now</a>
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col">
                          <a href="#" class="btn btn-primary fs-4">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src='{{$item->img}}' alt="...">
              </div>
              <div class="card-body ms-3">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fs-2">{{$item->name}}</h5>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-sm-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </div>
                    <div class="col">
                      <p class="card-text text-secondary">{{$item->teacher}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <ul class="list-inline">
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->hours}} total hours</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->lectures}} lectures</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->level}}</small></h6></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      
                    </div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row">
                    <div class="col">
                      <span className="font-itealic mb-0"><span className="mr-1"><p class="fs-1">${{$item->price}}</p></span></span>
                    </div>
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <a href="checkout/{{$item->id}}" class="btn btn-outline-primary fs-4">Buy now</a>
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col">
                          <a href="#" class="btn btn-primary fs-4">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src='{{$item->img}}' alt="...">
              </div>
              <div class="card-body ms-3">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fs-2">{{$item->name}}</h5>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-sm-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </div>
                    <div class="col">
                      <p class="card-text text-secondary">{{$item->teacher}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <ul class="list-inline">
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->hours}} total hours</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->lectures}} lectures</small></h6></li>
                        <li class="list-inline-item "><h6><small class="text-muted fs-5">&bull;{{$item->level}}</small></h6></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      
                    </div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row">
                    <div class="col">
                      <span className="text-blue font-itealic mb-0"><span className="mr-1"><p class="fs-1">$</span>{{$item->price}}</p></span>
                    </div>
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <a href="checkout/{{$item->id}}" class="btn btn-outline-primary fs-4">Buy now</a>
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col">
                          <a href="#" class="btn btn-primary fs-4">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        {{-- <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="https://codingyaar.com/wp-content/uploads/bootstrap-multiple-items-carousel-slide-3-card-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-3-card-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-3-card-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    {{-- <p class="mt-5 text-center">any thing to write: <a href="https://codingyaar.com/bootstrap-4-carousel-multiple-items-responsive/" target="_blank">Bootstrap Carousel Card Slider
      </a> </p>
    
    <p class="mt-3 text-center">Get a step-by-step video explanation here: <a href="https://youtu.be/kHPm_AlxP7U" target="_blank">Bootstrap Carousel Card Slider
      </a> </p>  --}}
  </div>
</body>
@endsection