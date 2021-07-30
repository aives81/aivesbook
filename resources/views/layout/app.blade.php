<!DOCTYPE html>
<html lang="en">
<head>
    <title>{ aivesBook }</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/A.animate.css flaticon.css tiny-slider.css glightbox.min.css aos.css style.css,Mcc.w0YzoeY_yC.css.pagespeed.cf.NMUnO3458_.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">--}}
{{--    <link rel="stylesheet" href="../../ajax/libs/ionicons/4.5.6/css/ionicons.min.css">--}}
</head>
<body>
<nav class="navbar ftco-navbar-light">
    <div class="container-xl">
        <a class="navbar-brand align-items-center" href="{{ __('/') }}">
            <span class="" style="font-family: Apple Chancery; font-size: 35px">{ aivesBook }</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="{{ __('/') }}">Acceuil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/About-me') }}">Apropos de moi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/Mes-experiences') }}">Mon expérience</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/Ma-formation') }}">Ma formation</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/Mes-realisations') }}">Mes réalisations</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/Mes-services') }}">Mes services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ __('/Contactez-moi') }}">Me contacter</a></li>
            </ul>

        </div>
    </div>
</nav>

{{--content here--}}
@yield('contentBody')



<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/glightbox.min.js aos.js google-map.js main.js.pagespeed.jc.S_ME9a_GGY.js') }}"></script><script>eval(mod_pagespeed_yUV23LgTwi);</script>
<script>eval(mod_pagespeed_JiPFNeyWJM);</script>
<script src="../../maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script>eval(mod_pagespeed_InhIjlmdOI);</script>
<script>eval(mod_pagespeed_9RIZcYJeRX);</script>

<script async="" src="../../gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="../../beacon.min.js" data-cf-beacon='{"rayId":"6723cd7cb976ce7b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>
</html>
