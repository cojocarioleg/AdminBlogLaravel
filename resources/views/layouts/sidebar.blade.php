<div class="sidebar">

    @if (!Request::is('/')) @include('layouts.subscripte') @endif

    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">

                @foreach ($popular_posts as $post)
                    <a href="{{ route('showPost', ['slug'=>$post->slug]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{ $post->getImage() }}" alt="{{ $post->title }}" class="img-fluid float-left">
                            <h5 class="mb-1">{!! $post->description !!}</h5>
                            <small>{{ $post->getPostDate() }}</small>
                            <small> |<i class="fa fa-eye"></i>{{ $post->view }}</small>
                        </div>
                    </a>

                @endforeach

            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->


    <div class="widget">
        <h2 class="widget-title">Categories</h2>
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
</div><!-- end sidebar -->


