@extends('layout.app')
@section('contentBody')

    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 pt-4 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html">Acceuil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>apropos de moi <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Apropos de moi</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about-section">
        <div class="container">
            <div class="row g-xl-5">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="row section-counter">
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="counter-wrap">
                                <span class="number"><span class="countup">5000</span></span>
                                <span class="caption">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="counter-wrap">
                                <span class="number"><span class="countup">1200</span></span>
                                <span class="caption">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="counter-wrap">
                                <span class="number"><span class="countup">500</span></span>
                                <span class="caption">Cups of Coffee</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                            <div class="counter-wrap">
                                <span class="number"><span class="countup">587</span></span>
                                <span class="caption">Working Hourse</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="500"
                     data-aos-duration="1000">
                    <div class="mt-5 mt-md-0">
                        <span class="subheading">Apropos de moi</span>
                        <h2 class="mb-4">Developpeur web et analyste de données basé en Côte d'Ivoire</h2>
                        <p class="">Curieux et passioné de nouvelle
                            technologie je passe la majorité de
                            mon temps libre a lire des e-books ou
                            suivre des tutoriels pour ameliorer
                            mon niveau. J’aime découvrir et
                            apprendre de Nouvelles. J’ai
                            commence dans le monde du
                            développement de solution et
                            maintenant j’ai les mains dans la BI.
                            Pour moi rien n’est impossible à celui
                            qui a soif de connaissance.</p>
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Nom:</span> <span>DEBO Dago Yves-Roland</span></li>
                                    <li class="d-flex"><span>Date de naissance:</span> <span>07 Avril 1998</span></li>
                                    <li class="d-flex"><span>Addresse:</span> <span>Côte d'Ivoire, Abidjan, Adjamé 136lgmnts</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Zip code:</span> <span>00225</span></li>
                                    <li class="d-flex"><span>Email:</span> <span><a href="mailto:yvesrolanddebo@gmail.com">yvesrolanddebo@gmail.com</a></span>
                                    </li>
                                    <li class="d-flex"><span>Téléphone: </span> <span>+225-07-7826-9872</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            <a href="{{ asset('assets/files/DeboDagoYvesRoland - FR.pdf') }}" target="_blank"
                               class="btn btn-primary py-3 px-4">Obtenir mon CV</a>
                            <a href="{{ asset('assets/files/DeboDagoYvesRoland - EN.pdf') }}" target="_blank"
                               class="btn btn-primary py-3 px-4">Download resume</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container-xl">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">compétences</span>
                    <h2 class="mb-5">Mes compétences</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="progress-wrap">
                        <h3>Collecte de données (koboToolBox, ODK, rapidPro)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width:75%">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="progress-wrap">
                        <h3>Analyse de projet (MERISE, UML)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="progress-wrap">
                        <h3>Analyse et visualisation de données(Power BI, MS Excel)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="progress-wrap">
                        <h3>Programmation back-end (Php, laravel/lumen)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="progress-wrap">
                        <h3>Programmation front-end (JavaScript)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                 aria-valuemax="100" style="width:70%">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="progress-wrap">
                        <h3>Base de données SQL (mySQL, mariaDB, sqlServer)</h3><br>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                    <div class="progress-wrap">
                        <h3>Systeme de gestion de contenu (WordPress, prestaShop)</h3><br>
                        <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width:55%">
                                <span>55%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <div class="progress-wrap">
                        <h3>Outil de gestion de version (git)</h3><br>
                        <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                 aria-valuemax="100" style="width:65%">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                    <div class="progress-wrap">
                        <h3>Référencement web (SEO)</h3><br>
                        <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100" style="width:50%">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="progress-wrap">
                        <h3>Autres (adobe photoShop, adobe Audition, adobe premiere pro)</h3><br>
                        <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100" style="width:50%">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Happy Guests</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg.jfif)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></span></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg.jfif)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></span></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image:url(images/person_3.jpg.jfif)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></span></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg.jfif)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></span></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg.jfif)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left"></span></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.footer')

@stop
