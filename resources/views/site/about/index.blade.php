@extends('layouts.merge.site')
@section('titulo', 'Sobre')

@section('about', 'active')
@section('content')

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/speakers.jpg"
            data-speed="0.8"></div>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">
                                <h2>Sobre</h2>
                            </div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Sobre</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="speakers">
        <div class="container reset_container">

            <div class="row row-lg-eq-height py-2">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="speaker_content d-flex flex-column align-items-start justify-content-center">
                        <div class="speaker_title"> {{ $about->title }}</div>
                        <div class="speaker_text text-justify" style="color: #000;">

                            {!! html_entity_decode($about->information) !!}

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 speaker_col reset_col order-lg-2 order-1 d-none d-lg-block">
                    <div class="speaker_image" style="
                                background-image: url(/site/images/speaker_2.jpg);
                              "></div>
                </div>
            </div>


        </div>
    </div>


@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/speakers.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/speakers_responsive.css" />
@endsection
