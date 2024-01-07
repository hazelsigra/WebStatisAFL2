@extends('Layout.MainLayout')

@section('container')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <div class="wrapper-img-banner">
          <img class="img-banner" src="/images/carousel1.jpg">
        </div>
        
        <div class="container">
          <div class="carousel-caption">
            <h1>Know more about us.</h1>
            <p>KAWOKU is not just a coffee brand; it's a journey for your senses.</p>
            <p><a class="btn btn-secondary" href="/aboutus">Learn more &rightarrow;</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="wrapper-img-banner">
          <img class="img-banner" src="/images/carousel2.jpg">
        </div>
        <div class="container">
          <div class="carousel-caption">
            <h1>Take a look at our menus.</h1>
            <p>Serves high quality coffee with a stunning taste and aroma that tempts the taste buds.</p>
            <p><a class="btn btn-secondary" href="#">Purchase now &rightarrow;</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="wrapper-img-banner">
          <img class="img-banner" src="/images/carousel3.jpg">
        </div>
        <div class="container">
          <div class="carousel-caption">
            <h1>Connect with Us.</h1>
            <p>We can be reached via Whatsapp. We do our best to reply within 24 business hours.</p>
            <p><a class="btn btn-secondary" href="#">Contact us &rightarrow;</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-4">
  <div class="text-center">
    <h2><b>ABOUT US</b></h2>
    <p>Bengkulu's Authentic Coffee</p>
  </div>
  
  <div class="row my-4">
    <div class="col-md-6">
      <img src="/images/logo1.png" class="img-fluid" width="100%">
    </div>
    <div class="col-md-6 fs-5">
      <p>KAWOKU is not just a coffee brand; it's a journey for your senses. We source the finest coffee beans from exotic regions around the world, carefully selecting each batch for its unique flavor profile. Our expert roasters bring out the best in every bean, ensuring a rich and satisfying coffee experience with every sip.</p>
      <p>At KAWOKU, we believe that coffee is more than just a beverage; it's a ritual, a moment of solace, and an opportunity to savor life's simple pleasures. Our commitment to quality and sustainability is reflected in every aspect of our brand. From the ethically sourced beans to eco-friendly packaging, KAWOKU is dedicated to making a positive impact on both your palate and the planet.</p>
      <p>Experience the perfect harmony of flavor, aroma, and passion in every cup of KAWOKU coffee. Awaken your senses to a world of indulgence, one sip at a time.</p>
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="container py-3">
    <div class="text-dark text-center">
      <h4>CONTACT US</h4>
      <p>Tell us more about what u want!</p>
      <a href="https://wa.me/+6285158039890" class="btn btn-success px-3"><i class="fas fa-phone"></i> Send Message</a>
    </div>
  </div>
</div>

@endsection