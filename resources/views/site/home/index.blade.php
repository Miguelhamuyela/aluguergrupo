@extends('layouts.merge.site')
@section('titulo', 'Oficial')

@section('home', 'active')
@section('content')

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/index.jpg">

            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col ">
                            <div class="home_content">
                                <div class="home_date">25 de Abril de 2024 - Mediateca Rei Ngola Kiluanje - Malanje</div>
                                <div class="home_title mb-1">Liderença</div>
                                <div class="home_location">Celebração do Dia das Meninas e as TIC</div>
                                <div class="home_text">
                                    O “Dia das Meninas e a TIC” foi instituído através da Resolução 70 de Plenipotenciária
                                    da
                                    União Internacional das Telecomunicações (Rev. Busan- 2014) com o propósito de promover
                                    o
                                    acesso e o uso das Tecnologias de Informação e Comunicação nas jovens mulheres.
                                </div>
                                <div class="home_buttons">
                                    <div class="button home_button">
                                        <a href="{{ route('site.invitationcard') }}">Marcar Presença!</a>
                                    </div>
                                    <div class="button home_button">
                                        <a href="{{ route('site.about') }}">Saber Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="intro">

        <div class=" text-dark text-center">
            <h3>Perfil das Prelectoras</h3>
        </div>
        <div class="row">

            @foreach ($influentialWomens as $item)
                <div class="col-lg-4 col-md-6 col-12 my-2 px-4 mx-0">

                    <a data-toggle="modal" data-target="#modalinfluentialWomen{{ $item->id }}"
                        data-id="modalinfluentialWomen{{ $item->id }}">
                        <div
                            style='background-image:url("/storage/{{ $item->photo }}");background-position:center;background-size:cover;height:650px;box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'>

                            <p class="text-white" style="padding-top: 500px;">
                            <h3 class="px-3"> {{ $item->name }} </h3>
                            <b class="px-3"> {{ $item->function }}</b>
                            </p>
                        </div>

                    </a>
                </div>

                @include('extra.modals._women.index')
            @endforeach
        </div>
    </div>



    <div class="calendar">
        <div class="container reset_container">
            <div class="row">

                <div class="col-xl-12 mx-auto calendar_col">
                    <div class="calendar_container">
                        <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">

                            <div class="calendar_title">
                                EVENTOS</div>
                        </div>
                        @if ($events)
                            @foreach ($events as $item)
                                <div class="row py-4 px-2 text-center">

                                    <div class="col-md-4  text-dark">
                                        <h2>{{ date('h:i', strtotime($item->date)) }}</h2>

                                        <div>{{ $item->place }}</div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        {!! html_entity_decode($item->activity) !!}
                                    </div>
                                    <div class="col-md-4 text-center">
                                        {!! html_entity_decode($item->apresentation) !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="cta">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/cta_1.jpg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center">
                        <div class="cta_title">
                            <h3>Marcar Presença!</h3>
                        </div>
                        <div class="button cta_button">
                            <a href="{{ route('site.invitationcard') }}">Solicitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/responsive.css" />
@endsection
