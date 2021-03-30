
@extends("layout.layout")
@section("content")
    <div class="site-wrap">

        <div class="site-section">
            <div class="banner_area">
                <div class="banner_inner d-flex align-items-center">
                    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background: url({{asset('images/banner.jpg')}}) no-repeat scroll center center; "></div>
                    <div class="container">
                        <div class="banner_content text-center">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Green Building Certification</h4>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Green Building Certification</h4>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Green Building Certification</h4>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Green Building Certification</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2>We Provide Engineering Solutions to Energy Efficiency of your Businesses</h2>
                        <p class="lead">We have 2 main services area</p>
                    </div>
                </div>
                <div class="row align-items-lg-center">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                        <div class="owl-carousel slide-one-item-alt">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="img-fluid">
                            <img src="{{asset('images/banner.jpg')}}" alt="Image" class="img-fluid">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="custom-direction">
                            <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <div class="owl-carousel slide-one-item-alt-text">
                            <div>
                                <h2 class="section-title mb-3">01. Online Applications</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum
                                    neque voluptas?</p>

                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3">02. Get an approval</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum neque voluptas?</p>
                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3">03. Card delivery</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sapiente labore eius ullam? Iusto?</p>

                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
