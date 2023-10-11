@extends('layouts.welcome')
@section('content')

<section class="bg-light py-4 my-5" style="min-height:600px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4 class="mb-3" style="text-align:center">Product Management System </h4>
          <hr style="border-color:#b8bfc2;">
        </div>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://th.bing.com/th/id/OIP.2-qtbmrQqzIZN5xH4uGVVgAAAA?w=315&h=180&c=7&r=0&o=5&pid=1.7" class="d-block w-100" alt="slide 1">
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th?q=Engineering+Systems&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=LK&setlang=en&adlt=moderate&t=1&mw=247" class="d-block w-100" alt="slide 2">
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/OIP.aHFH-0YBH103sdBT2Rc4ugAAAA?w=187&h=187&c=7&r=0&o=5&pid=1.7" class="d-block w-100" alt="slide 3">
      </div>
      <div class="carousel-item">
        <img src="https://th.bing.com/th/id/OIP.ccCj6Eplh_lwiVgSjhqyUQHaEX?w=213&h=180&c=7&r=0&o=5&pid=1.7" class="d-block w-100" alt="slide 4">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        </div>
    </div>
   </section>

@endsection
