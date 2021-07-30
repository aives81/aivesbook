@extends('layout.app')
@section('contentBody')
    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ __('/') }}">Acceuil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Experience professionelle <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Expériences professionelles</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="100">
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-end"--}}
{{--                           style="background-image:url({{ asset('assets/images/Unicef.png') }})">--}}
{{--                        </a>--}}
                        <img src="{{ asset('assets/images/Unicef.png') }}" width="306" height="200" style="margin-top: 10px;" alt="Unicef.png" class="img-fluid">
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Jan. 07, 2021</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">The Newest and Updated Bootstrap 5 is Here</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="200">
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-end"--}}
{{--                           style="background-image: url({{ asset('assets/images/Unicef.png') }}">--}}
{{--                        </a>--}}
                        <img src="{{ asset('assets/images/Unicef.png') }}" width="306" height="200" style="margin-top: 10px;" alt="Unicef.png" class="img-fluid">
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Jan. 07, 2021</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">The Newest and Updated Bootstrap 5 is Here</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="300">
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-end"--}}
{{--                           style="background-image: url({{ asset('assets/images/mipa.png') }}">--}}
{{--                        </a>--}}
                        <img src="{{ asset('assets/images/mipa.png') }}" width="306" height="200" style="margin-top: 10px;" alt="mipa.png" class="img-fluid">
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Jan. 07, 2021</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">The Newest and Updated Bootstrap 5 is Here</a mb-3="">
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="300">
{{--                        <a href="blog-single.html" class="block-20 img d-flex align-items-end"--}}
{{--                           style="background-image: url({{ asset('assets/images/HassonBoss.png') }}">--}}
{{--                        </a>--}}
                        <img src="{{ asset('assets/images/HassonBoss.png') }}" width="306" height="200" alt="HassonBoss.png" class="img-fluid">
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Jan. 07, 2021</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">The Newest and Updated Bootstrap 5 is Here</a mb-3="">
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row mt-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <div class="block-27">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">&lt;</a></li>--}}
{{--                            <li class="active"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a href="#">&gt;</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    @include('layout.footer')
@stop
