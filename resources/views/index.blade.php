@extends("layout.layout")

@section("content")

<div class="site-wrap">



    <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/gambar.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1>"SECURING THE FUTURE WITH A GREENER TODAY"</h1>
                            <div><a data-fancybox data-ratio="2" href="$contact-section" class="btn btn-primary btn-md">Contact Us</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row mb-5">

                <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
                    <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade">

                    <div class="row">

                        <div class="col-12">
                            <div class="text-left pb-1">
                                <h2 class="text-black h1 site-section-heading">About Us</h2>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                                <div>
                                    <h3>Web &amp; Mobile Specialties</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                                <div>
                                    <h3>Intuitive Thinkers</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="site-section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-black h1 site-section-heading text-center">Clients</h2>
                </div>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel container ">
            <div>
                <div class="row justify-content-center d-flex">
                    <div class="col-4 d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                </div>
            </div>
            <div>
                <div class="row justify-content-center d-flex">
                    <div class="col-4 d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                </div>
            </div>
            <div>
                <div class="row justify-content-center d-flex">
                    <div class="col-4 d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                    <div class="col-4  d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="impress_area p_120 bg-secondary p-5 text-white mb-5" >
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h2 class="h1 site-section-heading">Contact</h2>
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
    </section>




</div> <!-- .site-wrap -->
@endsection
