@extends('layouts.merge.site')
@section('titulo', 'Verificar Presença')

@section('content')

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/site/images/contact.jpg"
            data-speed="0.8"></div>


        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">
                                <h2>Verificar Presença</h2>
                            </div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Verificar Presença</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-dark">
                    <h3 class=" text-center">
                        <b> Estes Dados Conferem com os dados da Presença?</b>
                        <hr>
                    </h3>
                    <h4>
                        <b>Nome: </b>{{ $invitation->name }} <br>
                        <hr>
                        <b>Email: </b>{{ $invitation->email }} <br>
                        <hr>
                        <b>Código: </b>{{ $invitation->code }} <br>
                        <hr>
                        <b>Data de Criação: </b>{{ $invitation->created_at }}
                    </h4>

                </div>

            </div>
        </div>
    </div>



@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/contact.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/contact_responsive.css" />
@endsection
