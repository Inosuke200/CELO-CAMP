@extends("layouts.public-layout")
@section("title-page","Contacts")

@section("main-content")
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 mt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Contactez-nous</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row g-0">
              <div class="col-lg-6 order-lg-last">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h3>Contactez-nous</h3>
                  <p class="mb-4">Nous sommes ouverts à toutes suggestions ou pour juste discuter</p>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Addresse:</span> Ouagadougou, Rue Joseph Badoua</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>E-mail:</span> <a class="text-break" href="mailto:info@knowledgeforafrica.com">info@knowledgeforafrica.com</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Téléphone:</span> <a href="tel://1234567920">+226 60 18 54 25</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @livewire("contact")
                  <div class="w-100 social-media mt-5 d-flex gap-2 align-items-center">
                    <h3>Suivez-nous :</h3>
                    <p class="d-flex align-items-center">
                      <a href="#"><i class="fab fa-facebook fs-1"></i></a>
                      <a href="#"><i class="fab fa-twitter fs-1"></i></a>
                      <a href="#"><i class="fab fa-instagram fs-1"></i></a>
                      <a href="#"><i class="fab fa-dribble fs-1"></i></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch">
                <div id="map" class="bg-white"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
@endsection