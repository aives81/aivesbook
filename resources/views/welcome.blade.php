@extends('layout.app')
@section('contentBody')

    <section class="hero-wrap">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row slider-text align-items-center align-items-stretch justify-content-between">
                <div class="col-lg-6 text d-flex align-items-start align-items-sm-center">
                    <div class="desc mt-4 mt-md-0">
                        <span class="subheading">Développeur &amp; analyste de données</span>
                        <h1 class="mb-4">
                            <div style="font-size: 35px">Je suis</div>
                            D. Yves-Roland DEBO
                        </h1>
                        <p>
                            <a href="{{ __('/About-me') }}" class="btn btn-primary p-4 py-3">Apropos de moi
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                            <a href="{{ __('/Mes-experiences') }}" class="btn btn-white p-4 py-3">Mon Expérience
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                            <a href="{{ __('/Ma-formation') }}" class="btn btn-primary p-4 py-3">Ma formation
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                        </p>
                        <p>
                            <a href="{{ __('/Mes-realisations') }}" class="btn btn-white p-4 py-3">Mes services
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                            <a href="{{ __('/Mes-services') }}" class="btn btn-primary p-4 py-3">Mes réalisations
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                            <a href="{{ __('/Contactez-moi') }}" class="btn btn-white p-4 py-3">
                                Travailler avec moi <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                        </p>
                        <p class="mb-0 copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart color-danger"
                                                                                aria-hidden="true"></i> by <a
                                href="{{ __('/') }}" rel="nofollow noopener">aivesBook</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-end justify-content-end">
                    <div class="carousel-about">
                        <div class="item">
                            <img src="{{ asset('assets/images/aives5.png') }}" class="img-fluid" alt="Colorlib">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/aives4.png') }}" class="img-fluid" alt="Colorlib">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/aives2.png') }}" class="img-fluid" alt="Colorlib">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
