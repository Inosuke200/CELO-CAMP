@extends('layouts.public-layout')
@section('title-page', 'Accueil')
@section('main-content')

    <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-5">
                    <div class="text mt-5 pt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <span class="subheading">Bienvenue sur {{ config('app.name') }}</span>
                        <h1 class="mb-3">Leader africain de l'apprentissage en ligne Blockchain</h1>
                        <p class="mb-3">Des sessions de qualités associés à des formateurs hautement qualifiés.
                            Apprenez en toute sérénité tout ce qu'il y a savoir au sujet de la Blockchain et ses nombreux
                            domaines d'applications
                        </p>
                        <p class="">
                            <a href="{{route('login')}}" class="btn btn-primary p-3 py-3">
                                Commencez maintenant ! 
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a> 
                            <a href="{{ route('courses') }}" class="btn btn-white p-3 py-3">
                                Voir les cours&rarr;
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url(images/about.jpg);">
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">Apprenez tout de la Blockchain</span>
                        <h2 class="mb-2">Bénéficiez de l'expertise des formateurs</h2>
                        <div class="row mt-4 g-lg-2">
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                                    <div class="text">
                                        <h2>Cours - MOOCs - Formations</h2>
                                        <p class="mb-0">Prenez part à nos MOOCs, optez pour nos sessions de
                                            formations et nos cours en ligne </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-certificate"></span></div>
                                    <div class="text">
                                        <h2>Obtenez des certificats</h2>
                                        <p class="mb-0">Obtenez des certificats attestant non-seulement votre
                                            participation mais aussi qui attesteront des compétences aquises</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-scientist"></span></div>
                                    <div class="text">
                                        <h2>Apprenez avec des experts</h2>
                                        <p class="mb-0">Les formateurs et formatrices à disposition sur K4A
                                            Blockchain sont toutes et tous des personnes de choix possédant non seulement
                                            des compétences hautement estimées dans leurs domaines mais aussi la volonté et
                                            le savoir-faire nécéssaires pour faire des vous aussi des experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-counter img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-graduation"></span>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="countup">3000</span></h2>
                            <span class="caption">Success Stories</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-scientist"></span>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="countup">320</span></h2>
                            <span class="caption">Trusted Tutors</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-calendar"></span>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="countup">1000</span></h2>
                            <span class="caption">Schedules</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-learning"></span>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="countup">587</span></h2>
                            <span class="caption">Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section courses-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-10 text-center heading-section" data-aos="fade-up">
                    <span class="subheading">Our Courses</span>
                    <h2 class="mb-5">Explore Our Popular Online Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="carousel-courses">
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-engineer"></span></div>
                                    <div class="text">
                                        <h2>Basic Fundamentals for Software Engineering</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img"
                                                style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-design"></span></div>
                                    <div class="text">
                                        <h2>Enhancing Adobe Photoshop CC 2020 Skills</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img"
                                                style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-algorithm"></span></div>
                                    <div class="text">
                                        <h2>HTML, CSS, and Javascript for Web Developers</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img"
                                                style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-coding"></span></div>
                                    <div class="text">
                                        <h2>Introducing to Programming with WordPress </h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img"
                                                style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Courses</span>
                    <h2 class="mb-4">Browse Our Online Courses</h2>
                </div>
            </div>
            <div class="row g-lg-2 justify-content-center">
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-design"></span></div>
                        <div class="text">
                            <h2>UI/UX Design Courses</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <a href="#" class="services-2 active">
                        <div class="icon"><span class="flaticon-paint-palette"></span></div>
                        <div class="text">
                            <h2>Art &amp; Design</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-computer-science"></span></div>
                        <div class="text">
                            <h2>Computer Science</h2>
                            <span>10 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-magnifying-glass"></span></div>
                        <div class="text">
                            <h2>History &amp; Archeologic</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-engineer"></span></div>
                        <div class="text">
                            <h2>Software Engineering</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-algorithm"></span></div>
                        <div class="text">
                            <h2>Information Software</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-dumbbell"></span></div>
                        <div class="text">
                            <h2>Health &amp; Fitness</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-bullhorn"></span></div>
                        <div class="text">
                            <h2>Marketing</h2>
                            <span>15 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-vector"></span></div>
                        <div class="text">
                            <h2>Graphic Design</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-musical-notes"></span></div>
                        <div class="text">
                            <h2>Music</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-calendar-1"></span></div>
                        <div class="text">
                            <h2>Business Administration</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services-2">
                        <div class="icon"><span class="flaticon-coding"></span></div>
                        <div class="text">
                            <h2>Web Management</h2>
                            <span>25 Courses</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Our Successful Students</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent From Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering Career</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering Career</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering Career</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Pricing</span>
                    <h2 class="mb-3">Pricing &amp; <span>Packages</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Basic Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">49K</span></span>

                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>

                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Beginner Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">79K</span></span>

                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>

                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Premium Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">109K</span></span>

                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>

                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Ultimate Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">149K</span></span>

                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                            </div>

                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
