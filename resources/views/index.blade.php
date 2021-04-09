@extends("layout.layout")

@section("content")

    <div class="site-blocks-cover overlay parallax-window"
         data-parallax="scroll"
         style="background-image: url({{asset('images/home/home_banner.jpg')}}); background-position-x: 100%;background-position-y: 120%; background-attachment:fixed "
         data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-12 col-md-9" data-aos="fade-up" data-aos-delay="400">
                    <img class="parallax-window" data-parallax="scroll" src="{{asset('images/greener.png')}}"
                         width="100%" alt="">
                    <div>
                        <a href="/contact" class="btn text-white btn-outline-white rounded-0 btn-md">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
                    <br>
                    <img src="{{asset('images/home/home about us.jpg')}}" width="1000" alt="Image"
                         class="img-fluid rounded">
                </div>
                <div class="col-md-7 order-md-1" data-aos="fade">

                    <div class="row">

                        <div class="col-12">
                            <div class="text-left pb-1">
                                <h2 style="font-size: 1rem" class="h1 site-section-heading main_about">About Us</h2>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="lead">Geo Rumbia is an energy service company (ESCO) focused on efficiency and
                                sustainability. We also specialise in green label certification
                                for buildings and masterplaning (township).</p>
                            <p class="lead">We customise solutions in energy efficiency and energy commissioning
                                that are environment and geographically specify, and also
                                help attain green label certification of various standards such as LEED (US),
                                Greenship (Indonesia), Green Star (Australia), GBI (Malaysia)
                                and Green Mark (Singapore) among others. Our experts can also advise on solutions
                                for water savings, waste management and air quality.</p>
                        </div>
                        <div class="col-md-12 mb-0 col-lg-6">
                            <div class="unit-4">
                                <h3 style="font-weight: bold;">Energy Efficiency</h3>
                                <p style="font-style: italic">"Sticks and stones may break bones, but nothing hurts
                                    more than a
                                    bloating
                                    energy bills"</p>
                                <p class="mb-0"><a href="/services">Learn More...</a></p>
                            </div>
                        </div>
                        <div class="col-md-12 mb-0 col-lg-6">
                            <div class="unit-4">
                                <h3 style="font-weight: bold;">Green Building Certification</h3>
                                <p style="font-style: italic">"It is more than a commitment, it is a badge of
                                    honor"</p>
                                <p class="mb-0"><a href="/services">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="main_about site-section-heading text-center">Testimonies</h2>
                </div>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel container ">
            <div>
                @foreach( $clients as $item  )
                    <div class="row justify-content-center d-flex">
                        <div class="col-4 col-xl-3  d-flex justify-content-center">
                            <img src="{{ Voyager::image( $item->image ) }}" alt="Image"
                                 class="img-fluid rounded-circle mb-4">
                        </div>
                    </div>
                    <div class="row justify-content-center d-flex text-black">
                        <div class="col-12 justify-content-center d-flex text-center">
                            <h3>UBS Global of Hongkong Office</h3>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius exercitationem harum hic
                                iure
                                maiores officia quas rem reprehenderit repudiandae velit? Debitis illum impedit nesciunt
                                voluptatibus!</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class=" p-5 text-white mb-5 mt-5"
         style="background-image: url({{asset('images/contact.png')}});background-repeat: no-repeat; background-size: cover;background-attachment: fixed;">
        <div class="container p-5">
            <div class="row mb-1">
                <div class="col-12 text-center">
                    <h2 class="h1 site-section-heading" style="font-family: Times New Roman;">Contact</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4 mb-3 text-center">
                        <p class="mb-0">Sentral Senayan II, 16th Floor</p>
                        <p class="mb-0">Jl. Asia Afrika No. 8</p>
                        <p class="mb-4">10270 Central Jakarta, Indonesia</p>

                        <p class="mb-4">E: marketing@georumbia.com</p>

                        <p class="mb-0">T: +62 21 2965 5800 | +62 812 9146 8281</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
