@extends("layout.layout")
@section("content")

    <div class="site-section ">
        <div class="banner_area " data-aos="fade">
            <div class="banner_inner d-flex align-items-center "
                 style="background:
                     /* top, transparent red, faked with gradient */
                     linear-gradient(
                     rgba(0, 0, 0, 0.2),
                     rgba(0, 0, 0, 0.2)
                     ),
                     /* bottom, image */
                     url({{asset('images/blog-banner.jpg')}})fixed center;background-repeat: no-repeat;background-size:cover ;">
                <div class="container ">
                    <div class="banner_content text-center">
                        <h2>Our Clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach( $clients as $item  )
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-3 col-sm-4  d-flex justify-content-center">
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
            </div>
        </div>
    @endforeach

@endsection
