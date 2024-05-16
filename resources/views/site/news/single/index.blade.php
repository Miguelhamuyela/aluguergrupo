@extends('layouts.merge.site')
@section('titulo', ' Notícia')

@section('news', 'active')
@section('content')
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/news.jpg"></div>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page"><h2>Notícias</h2></div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li><a href="{{ route('site.news') }}">Notícias</a></li>
                                    <li>{{ $news->title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class=""
                        style='background-image:url("/storage/{{ $news->path }}");background-position:center;background-size:cover;height:500px; width:100%;'>
                    </div>

                    <div class="date_container">

                        <span class="date_content d-flex flex-column align-items-center justify-content-center">
                            <div class="date_day">{{ date('d', strtotime($news->date)) }}</div>
                            <div class="date_month">
                                {{ date('m, Y', strtotime($news->date)) }}
                            </div>
                        </span>

                    </div>
                </div>
                <div class="news_body">
                    <div class="news_title mb-1">
                      <a href="#">  {{ $news->title }}
                    </a>
                    </div>

                    <div class="news_text mt-0">
                        <p class="text-justify text-dark">
                            {!! html_entity_decode($news->body) !!}
                        </p>
                    </div>

                </div>




            </div>
        </div>
    </div>
@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/news.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/news_responsive.css" />
@endsection
