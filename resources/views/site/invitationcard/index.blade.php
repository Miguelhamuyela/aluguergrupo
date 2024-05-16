@extends('layouts.merge.site')
@section('titulo', 'Marcar Presença')

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
                                <h2>Marcar Presença</h2>
                            </div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Marcar Presença</li>
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
                <div class="col-lg-6">
                    <div class="contact_form_container">
                        <p class="my-2 text-white">Marque sua presença no maior evento de Tecnologias
                            dedicado as Mulheres em Angola</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('site.invitationcard.store') }}" class="contact_form"
                            id="contact_form">

                            @csrf
                            <input type="text" class="contact_input" placeholder="Nome" autofocus name="name" required>
                            <input type="email" class="contact_input" placeholder="Email" name="email" required>
                            <input type="text" class="contact_input" placeholder="Empresa - Função" name="position"
                                required>
                            <button class="button contact_button" type="submit">
                                <span>Submeter</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="/site/images/card.webp" width="810">
                </div>
            </div>
        </div>
    </div>



@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/contact.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/contact_responsive.css" />
@endsection
