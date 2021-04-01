@extends("layout.layout")
@section("content")
    <div class="site-wrap">
        <div class="site-section">
            <div class="banner_area">
                <div class="banner_inner d-flex align-items-center" data-stellar-background-ratio="0.1"
                     style="background-repeat: no-repeat; background-size: 100%;background: url({{asset('images/services.png')}}) scroll center center; ">
                    <div class="container p-5">
                        <div class="banner_content text-center">
                            <h2>About</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{ Voyager::image( $blog->image ) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{$blog->title}}</h2>
                                {!! $blog->body !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                @foreach($recent as $item)
                                    <div class="media post_item">
                                        <img src="{{Voyager::image($item->image)}}" width="50%" alt="">
                                        <div class="media-body">
                                            <a href="/blog/{{$item->id  }}"><h3>{{$item->title}}</h3></a>
                                            <p>{{$item->created_at}}</p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="br"></div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
