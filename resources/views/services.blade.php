@extends("layout.layout")
@section("content")
    <div class="site-wrap">

        <div class="site-section">
            <div class="banner_area">
                <div class="banner_inner d-flex align-items-center" data-stellar-background-ratio="0.1"
                     style="background-repeat: no-repeat; background-size: 100%;background: url({{asset('images/services.png')}}) scroll center center;  ">
                    <div class="container p-5">
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
                    @foreach($services as $item)
                        <div class="col-3 d-flex justify-content-center ">
                            <div class="text-center">
                                <img src="{{ Voyager::image( $item->image ) }}" alt="Image" class="w-100 img-fluid ">
                                <h4>{{$item->service_name}}</h4>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Energy Efficiency Building Performance Energy Simulation</h4>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Renewable Energy Planning</h4>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="text-center">
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                            <h4>Sustainable Masterplan Design</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2><b>We Provide Engineering Solutions to Energy Efficiency of your Businesses</b></h2>
                        <p class="lead">We have 2 main services area</p>
                    </div>
                </div>
                <div class="row align-items-lg-center">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                        <div class="owl-carousel slide-one-item-alt">
                            <img src="{{asset('images/g.jpg')}}" alt="Image" class="img-fluid">
                            <img src="{{asset('images/b.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="custom-direction">
                            <a href="#" class="custom-prev"><span><span
                                        class="icon-keyboard_backspace"></span></span></a><a href="#"
                                                                                             class="custom-next"><span><span
                                        class="icon-keyboard_backspace"></span></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <div class="owl-carousel slide-one-item-alt-text">
                            <div>
                                <h2 class="section-title mb-3">Energy Efficiency</h2>
                                <p class="lead">"Sticks and stones may break my bones, but nothing hurts more than a
                                    bloating energy
                                    bills"</p>
                                <p class="lead">✓ Building Performance Energy
                                    Simulation
                                </p>
                                <p class="lead">✓ Renewable Energy Planning</p>
                                <p class="lead">✓ Sustainable Masterplan Design</p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3">Green Building Certification</h2>
                                <p class="lead">"It is more than a commitment, it is a badge of honour"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center mb-lg-5">
                        <h2><b>We Cover 2 Types</b></h2>
                        <p class="lead">New Buildings and Retrofit or Existing Building</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>New Buildings</h3>
                        <ol>
                            <li>Passive Design and Active Design. We evaluate your passive and active designs for you
                                and
                                with your teams. This is also where we negotiate service fee.
                            </li>
                            <li>(Optional) If you only opted for energy efficiency in the beginning, we will also offer
                                you Green Building Certification.
                            </li>
                            <li>Energy Savings & Cost Analysis Simulation. This is where we simulate our energy savings
                                and cost analysis designs and compare the result to your baseline threshold.
                            </li>
                            <li>Agreement. When you are satisfied with the result.</li>
                            <li>Report.</li>
                            <li>Financial Instrument. This is where you pay us.</li>
                            <li>Construction.</li>
                            <li>After agreement ends the asset belongs to the clients.</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h3>Retrofit or Existing Building</h3>
                        <ol>
                            <li>Energy Audit. We will measure your energy consumptions and assess possible solutions.
                                This is where we negotiate service fee.
                            </li>
                            <li>(Optional) If you only opted for energy efficiency in the beginning, we will also offer
                                you Green Building Certification.
                            </li>
                            <li>Energy Savings & Cost Analysis Simulation. This is where we simulate our energy
                                savings and cost analysis designs and compare the result to your baseline threshold.
                            </li>
                            <li>Agreement. When you are satisfied with the result.</li>
                            <li>Report.</li>
                            <li>Financial Instrument. This is where you pay us.</li>
                            <li>Instalation.</li>
                            <li>After agreement ends the asset belongs to the clients.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
