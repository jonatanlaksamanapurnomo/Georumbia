<!doctype html>
<html lang="en">
<head>
    <title>Georumbia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href={{asset("fonts/icomoon/style.css")}}>

    <link rel="stylesheet" href={{asset("vendors/linericon/style.css")}}>
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/jquery-ui.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.theme.default.min.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.theme.default.min.css")}}>

    <link rel="stylesheet" href={{asset("css/jquery.fancybox.min.css")}}>

    <link rel="stylesheet" href={{asset("css/bootstrap-datepicker.css")}}>

    <link rel="stylesheet" href={{asset("fonts/flaticon/font/flaticon.css")}}>

    <link rel="stylesheet" href={{asset("css/aos.css")}}>

    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>

</head>
<body>

<div class="site-wrap">
    @include("layout.navbar")
    @yield('content')
    @include("layout.footer")
</div> <!-- .site-wrap -->

</body>

<script src={{asset("js/jquery-3.3.1.min.js")}}></script>
<script src={{asset("js/jquery-migrate-3.0.1.min.js")}}></script>
<script src={{asset("js/jquery-ui.js")}}></script>
<script src={{asset("js/popper.min.js")}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
<script src={{asset("js/owl.carousel.min.js")}}></script>
<script src={{asset("js/jquery.stellar.min.js")}}></script>
<script src={{asset("js/jquery.countdown.min.js")}}></script>
<script src={{asset("js/bootstrap-datepicker.min.js")}}></script>
<script src={{asset("js/jquery.easing.1.3.js")}}></script>
<script src={{asset("js/aos.js")}}></script>
<script src={{asset("js/jquery.fancybox.min.js")}}></script>
<script src={{asset("js/jquery.sticky.js")}}></script>
<script src={{asset("js/isotope.pkgd.min.js")}}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"
        integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w=="
        crossorigin="anonymous"></script>

<script src={{asset("js/typed.js")}}></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["Web Apps", " WordPress", " Mobile Apps"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>

<script src={{asset("js/main.js")}}></script>
</html>
