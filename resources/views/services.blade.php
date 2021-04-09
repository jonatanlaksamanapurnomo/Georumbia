@extends("layout.layout")
@section("content")

    <div class="site-section">
        <div class="banner_area " data-aos="fade">
            <div class="banner_inner d-flex align-items-center"
                 style="background-image: linear-gradient(
                     rgba(0, 0, 0, 0.4),
                     rgba(0, 0, 0, 0.4)
                     ),url({{asset('images/services/services_banner.jpg')}});
                     background-position-x: 55%;background-position-y:150% ; background-attachment:fixed;background-repeat: no-repeat;background-size: cover;">
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
                <div class="col-xl-3 d-flex justify-content-center ">
                    <div class="text-center">
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                        <h4>Green Building Certification</h4>
                    </div>
                </div>

                <div class="col-xl-3 d-flex justify-content-center ">
                    <div class="text-center">
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                        <h4>Energy Efficiency Building Performance Energy Simulation</h4>
                    </div>
                </div>
                <div class="col-xl-3 d-flex justify-content-center ">
                    <div class="text-center">
                        <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                        <h4>Renewable Energy Planning</h4>
                    </div>
                </div>
                <div class="col-xl-3 d-flex justify-content-center ">
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
            <div class="row justify-content-center d-flex m">
                <div class="col-xl-5 mr-4 mb-2">
                    <img src="{{asset('images/services/services_energy_efficiency.jpg')}}" style="width: inherit"
                         alt="">
                </div>
                <div class="col-xl-5">
                    <h2 class="section-title mb-3" style="font-weight: bold">Energy Efficiency</h2>
                    <p class="lead">Energy Efficient Building contributes positively to the environment and the
                        inhabitants. It saves you the troubles
                        to install unnecessary appliances that may bloat your electric bills.</p>
                    <p class="lead">✓ Building Performance Energy Simulation</p>
                    <p class="lead">✓ Renewable Energy Planning</p>
                    <p class="lead">✓ Energy Commissioning</p>
                    <p class="lead">✓ Energy Audit</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-xl-12 text-center">
                    <h2 class="section-title mb-3" style="font-weight: bold">Green Building Certification</h2>
                </div>
            </div>
            <div class="row justify-content-center d-flex">
                <div class="col-xl-10 m-3">
                    <img src="{{asset('images/services/green-building-certification.png')}}" style="width: inherit"
                         alt="">
                </div>
            </div>
            <div class="row justify-content-center d-flex">
                <div class="col-xl-12 text-center">
                    <p class="lead">For certification purposes, buildings/masterplans are designed by
                        taking into account several aspects such as energy, water, materials,
                        locations, vegetation and waste management.
                    </p>
                    <p class="lead">Currently, most countries have their own standard. Some countries
                        have enforced this initiative into their laws. In Jakarta, building permits
                        will be approved by local authorities when the proposal submissions
                        include green building compliance in the design.
                    </p>
                    <p class="lead">Our experts are accredited by various green building commissions
                        globally to ensure that a company's certification targets are achieved.
                    </p>
                    <p class="lead">The additional cost at the onset of green building development varies,
                        depending on the green building rating achieved, namely: Basic, Silver,
                        Gold and Platinum.
                    </p>
                    <p class="lead">For Basic certification, there is generally no additional funding required
                        However, if a project attains Green and Platinum ratings, the additional
                        cost required will amount to 15-20% of total development funds.
                    </p>
                    <p class="lead">However, the operational cost of a green building is assured to be
                        significantly cheaper than conventional buildings. This is because the
                        building is designed with lower energy and water consumption.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <h2><b>Why Energy-Efficient and Green Buildings?</b></h2>
                </div>
            </div>
            <div class="row align-items-lg-center">
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                    <div class="owl-carousel slide-one-item-alt">
                        <img src="{{asset('images/services/services marketing advantage.jpg')}}" alt="Image"
                             class="img-fluid" style="min-height: 330px; max-height: 330px;">
                        <img src="{{asset('images/services/services comfort indoor.jpg')}}" alt="Image"
                             class="img-fluid" style="min-height: 330px; max-height: 330px;">
                        <img src="{{asset('images/services/services energy efficient.jpg')}}" alt="Image"
                             class="img-fluid" style="min-height: 330px; max-height: 330px;">
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
                            <h2 class="section-title mb-3">Marketing Advantage</h2>
                            <p class="lead">✓ Attract more customers</p>
                            <p class="lead">✓ To be recognized as enviromentally responsible brand</p>
                        </div>
                        <div>
                            <h2 class="section-title mb-3">Comfort Indoor</h2>
                            <p class="lead">✓ High performance of employees</p>
                            <p class="lead">✓ Less annual leave rate</p>
                        </div>
                        <div>
                            <h2 class="section-title mb-3">Energy Efficient</h2>
                            <p class="lead">✓ Reduced energy at least 10% to 50%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-xl-12 col-sm-4">
                    <img src="{{asset('images/services/alur.png')}}" style="width: inherit" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center d-flex mb-xl-4">
                <div class="col-xl-12 text-center ">
                    <h2 class="section-title" style="font-weight: bold">Green Project Case Study</h2>
                </div>
            </div>

            <div class="row justify-content-center d-flex m">
                <div class="col-xl-5 mr-4 mb-2">
                    <img src="{{asset('images/services/case-study.jpg')}}" style="width: inherit" alt="">
                </div>
                <div class="col-xl-5">
                    <h5 class="section-title mb-3" style="font-weight: bold">Project</h5>
                    <p class="lead">CIBIS NINE</p>
                    <h5 class="section-title mb-3" style="font-weight: bold">Address</h5>
                    <p class="lead">CIBIS Park, Cilandak</p>
                    <h5 class="section-title mb-3" style="font-weight: bold">Building Type</h5>
                    <p class="lead">Commercial Office</p>
                    <h5 class="section-title mb-3" style="font-weight: bold">Client</h5>
                    <p class="lead">Cibis</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-xl-12 text-center">
                    <h2 class="section-title mb-3" style="font-weight: bold">Achievement</h2>
                </div>
            </div>
            <div class="row justify-content-center d-flex">
                <div class="col-4 col-xl-2 m-3">
                    <img src="{{asset('images/services/leed.jpg')}}" style="width: inherit;"
                         alt="">
                </div>
            </div>
            <div class="row justify-content-center d-flex">
                <div class="col-xl-12 text-center">
                    <p class="lead">Water Savings Annually Equivalent to almost 3.56 times Olympic Size Swimming
                        Pool</p>
                    <p class="lead">Energy offset 3,485 MWh/year=</p>
                    <p class="lead">x 5,705 barrels to be reduced</p>
                    <p class="lead">x 532 units/year to be removed</p>
                    <p class="lead">x 40,742 numbers/year for 10 years</p>
                </div>
            </div>
        </div>
    </div>
@endsection
