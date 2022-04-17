<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">

                            @foreach ($recent_posts as $post)
                            <a href="m{{ route('showPost', ['slug'=>$post->slug]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="/assets/front/upload/small_04.jpg" alt="{{ $post->title }}" class="img-fluid float-left">
                                    <h5 class="mb-1">{{ $post->title}}</h5>
                                    <small>{{ $post->getPostDate() }}</small>
                                </div>
                            </a>

                            @endforeach
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">

                            @foreach ($popular_posts as $post)
                                <a href="{{ route('showPost', ['slug'=>$post->slug]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/assets/front/upload/small_01.jpg" alt="{{ $post->title }}" class="img-fluid float-left">
                                        <h5 class="mb-1">{{ $post->title}}</h5>

                                        <span class="rating">

                                            @for ($i = 1; $i < 6; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor


                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>

                            @foreach ($cats as $item)
                                <li>
                                    <a href="{{ route('showPostCategory',['slug'=>$item->slug]) }}">{{ $item->title }}
                                        <span>({{ $item->posts_count }})</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <br>
                <div class="copyright">&copy; Markedia. Design: <a href="#">HTML Design</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="dmtop">Scroll to Top</div>
