<!doctype html>
<html lang="en">
<head>
    <title>Georumbia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href={{asset("fonts/icomoon/style.css")}}>

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

</head>
<body>

@include("layout.navbar")
   @yield('content')
@include("layout.footer")

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

<script src={{asset("js/typed.js")}}></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["Web Apps"," WordPress"," Mobile Apps"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>

<script src="js/main.js"></script>
</html>
