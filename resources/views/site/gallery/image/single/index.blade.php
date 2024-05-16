@extends('layouts.merge.site')
@section('titulo', ' Galeria')

@section('gallery', 'active')
@section('content')
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/news.jpg"
            data-speed="0.8"></div>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">
                                <h2>Galerias</h2>
                                <h4>{{ $gallery->name }}</h4>
                            </div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Galeria</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== news Start ====== -->
    <section class="news">
        <div class="container reset_container">

            <div class="row row-lg-eq-height">

                @foreach ($gallery->images as $gallery)
                    <div class="col-lg-4 col-md-6 mt-2">
                        <a class="fancybox" href="/storage/{{ $gallery->path }}" data-fancybox="gallery1">
                            <div class=""
                                style='background-image:url("/storage/{{ $gallery->path }}");background-position:center;background-size:cover;height:400px;'>
                            </div>

                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- ====== news End ====== -->



@endsection
@section('JS')

    {{-- FancyBox to make ImageGallery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection
@section('CSS')
    {{-- FancyBox to make ImageGallery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

    <link rel="stylesheet" type="text/css" href="/site/styles/news.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/news_responsive.css" />
@endsection
