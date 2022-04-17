@extends('layouts.layout')

@section('title', 'Search')

<div class="page-title db">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2> Search: | : <small class="hidden-xs-down hidden-sm-down">{{ $s }} </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->


@section('content')
<div class="page-wrapper">
    <div class="blog-custom-build">
        @if ($posts->count())
        @foreach ($posts as $post )
        <div class="blog-box wow fadeIn">
            <div class="post-media">
                <a href="{{ route('showPost',['slug'=> $post->slug]) }}" title="">
                    <img src="{{ $post->getImage() }}" alt="{{ $post->title }}" class="img-fluid">
                    <div class="hovereffect">
                        <span></span>
                    </div>
                    <!-- end hover -->
                </a>
            </div>
            <!-- end media -->
            <div class="blog-meta big-meta text-center">
                <div class="post-sharing">
                    <ul class="list-inline">
                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- end post-sharing -->
                <h4><a href="{{ route('showPost',['slug'=> $post->slug]) }}" title="">{{ $post->title }}</a></h4>
                <p>{!! $post->description !!}</p>
                <small><a href="{{ route('showPostCategory', ['slug'=> $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>
                <small>{{ $post->getPostDate() }}</small>

                <small><i class="fa fa-eye"></i> {{ $post->view }}</small>
            </div><!-- end meta -->
        </div><!-- end blog-box -->

        <hr class="invis">
        @endforeach

        @else
            <h5>no results found, sorrry</h5>
        @endif




    </div>
</div>

<hr class="invis">

<div class="row">
    <div class="col-md-12">
        {{ $posts->appends(['s' =>request()->s])->links() }}
    </div><!-- end col -->
</div><!-- end row -->

@endsection
