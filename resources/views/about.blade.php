
@extends("layout.layout")
@section("content")
        <div class="site-wrap">

            <div class="site-section">
                <div class="banner_area">
                    <div class="banner_inner d-flex align-items-center">
                        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background: url({{asset('images/banner.jpg')}}) no-repeat scroll center center; "></div>
                        <div class="container">
                            <div class="banner_content text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="col-12 mb-4">
                    <h2 class="text-black h1 site-section-heading text-center">How it came to be</h2>
                    <p class="text-center lead">"We not only help you, we care for you"</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-4 text-center ">
                        <p class="lead">The Indonesia commitment to reducing carbon footprints, expressed in the signature of Kyoto protocal, has opened up doors
                            to many green business. Some local or provincial governments and businesses even adopted measures to transform cities and their enterprises for the better.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-4 text-center ">
                        <p class="lead">We realized that to accomodate the transition, we could offer them our decade of expertise in Green Building Certification and
                        Energy Efficiency. We believe that people can live and work happily without the expense of profits and the planet. Years of experiences have taught us that
                        well designed buildings help improving mood, reducing energy bill, improving public confidence. After a while, it dawned on us that we need some kind of help to set our
                         business.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-4 text-center ">
                        <p class="lead">With New Energy Nexus' assistance we managed to form a sturdy foundation in our inner organization, drive up sales to the next level, and expand
                        our relations.</p>
                    </div>
                </div>
            </div>

            <div class="site-section about-quotes text-white" style="background: url({{asset('images/banner.jpg')}}) no-repeat scroll center center; ">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 mb-4 text-center text-white ">
                        <p class="lead">Driven to make the world into a better place by securing greener today, we sought to make a meaningful impact
                        on the pursuit of global energy sustainability. To do that, we strive to empower today's businesses in their energy sustainability pursuit.
                        We believe that by empowering and transforming them today will pave the way to a much more energy sustainable future.</p>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <div class="main_title_name">
                                <h2>What's in a Name?</h2>
                            </div>
                            <div class="lead mb-2">
                                <p>Our company mission takes inspiraton from the Rumbia or Sago Palm Tree. Native to South East Asia, it is a multi-stemmed plant that thrives
                                    in areas unsuitable for most other forms of cultivation. Providing for humans in more ways than one, its leaves are turned into thatched roofs; sago from it's
                                    spongy pith provides sustenance in the form of food, while its fibrous inner trunk is used for thermal insulation.</p>
                            </div>
                            <div class="lead">
                                <p>Our company logo - that of a rising skyscraper - takes inspiration from a tree that grows strong and tall, while the green-blue accents flanking
                                the sides represent the environment. It is in this spirit that we aim to provide solutions with sustainability at the forefront.</p>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center " style="width: 50vw; height: 50vh " >
                            <img src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section p_120">
                <div class="container">
                    <div class="main_title text-center">
                        <h2>Meet Our Team</h2>
                    </div>
                    <div class="row team_inner d-flex justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="team_item">
                                <div class="d-flex justify-content-center rounded-circle" style="height: 25vh; " >
                                    <img class= "rounded-circle"src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                                </div>
                                <div class="team_name">
                                    <h4>Iqbal Khalilullah</h4>
                                    <p>Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team_item">
                                <div class="d-flex justify-content-center rounded-circle" style="height: 25vh; " >
                                    <img class= "rounded-circle"src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                                </div>
                                <div class="team_name">
                                    <h4>Niko Amrullah Hakam</h4>
                                    <p>Marketing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team_item">
                                <div class="d-flex justify-content-center rounded-circle" style="height: 25vh; " >
                                    <img class= "rounded-circle"src="{{asset('images/gambar.jpg')}}" alt="Image" class="w-100 img-fluid ">
                                </div>
                                <div class="team_name">
                                    <h4>Fakhrurrazy Sembiring</h4>
                                    <p>HR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
