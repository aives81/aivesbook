@extends('layout.app')
@section('contentBody')

    <section class="hero-wrap">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row slider-text align-items-center align-items-stretch justify-content-between">
                <div class="col-lg-6 text d-flex align-items-start align-items-sm-center">
                    <div class="desc mt-4 mt-md-0">
                        <span class="subheading">UI/UX Designer &amp; Developer</span>
                        <h1 class="mb-4">I'm John Schmidt</h1>
                        <p><a href="#" class="btn btn-primary p-4 py-3">More About Me <span class="ion-ios-arrow-round-forward"></span></a> <a href="#" class="btn btn-white p-4 py-3">Hire Me <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="mb-0 copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="../../index.htm.html" target="_blank" rel="nofollow noopener">Colorlib</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-end justify-content-end">
                    <div class="carousel-about">
                        <div class="item">
                            <img src="{{ asset('assets/images/jschmidt.png') }}" class="img-fluid" alt="Colorlib">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/jschmidt-2.png') }}" class="img-fluid" alt="Colorlib">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
