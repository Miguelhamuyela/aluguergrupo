@extends('layouts.merge.site')
@section('titulo', ' Notícias')

@section('news', 'active')
@section('content')


    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/news.jpg"
            data-speed="0.8"></div>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page"><h2>Notícias</h2></div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Notícias</li>
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
                    <div class="news_items row">
                        @foreach ($news as $item)
                            <div class="news_item col-lg-4 col-md-6">
                                <div class="news_image_container">
                                    <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                        <div class="news_image"
                                            style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                        </div>
                                    </a>
                                    <div class="date_container">
                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                            <span
                                                class="date_content d-flex flex-column align-items-center justify-content-center">
                                                <div class="date_day">{{ date('d', strtotime($item->date)) }}</div>
                                                <div class="date_month">
                                                    {{ date('m, Y', strtotime($item->date)) }}
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="news_body">
                                    <div class="news_title mb-1">
                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><h4>{{ $item->title }}</h4></a>
                                    </div>



                                </div>
                            </div>
                        @endforeach



                    </div>
                    <div class="row justify-content-center mt-0">
                        <div class="col-md-4">
                            <h4>{{ $news->links() }}</h4>
                        </div>
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
