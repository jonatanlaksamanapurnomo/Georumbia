@extends("layout.layout")
@section("content")

    <div class="site-section">
        <div class="banner_area  " data-aos="fade">
            <div class="banner_inner d-flex align-items-center"
                 style="background:url({{asset('images/contact.png')}})fixed center;background-repeat: no-repeat;background-size: cover;">
                <div class="container p-5">
                    <div class="banner_content text-center ">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact_area p_120 mb-5">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9  mb-4 ">
                <div class="gmap_canvas">
                    <iframe class="embed-responsive-item" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=sentral%20senayan%202&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://embedgooglemap.net/maps/4"></a><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Sentral Senayan II, 16th Floor</h6>
                            <h6> Jl. Asia Afrika No.8</h6>
                            <p>10270 Central Jakarta Indonesia</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>+62 21 2965 5800</h6>
                            <h6>+62 812 9146 8281</h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>marketing@georumbia.com</h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action={{route("create_contact")}} method="post" id="contactForm"
                          novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1"
                                              placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
