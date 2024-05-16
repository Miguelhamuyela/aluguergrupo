@extends('layouts.merge.site')
@section('titulo', 'Contactos')

@section('contact', 'active')
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
                                <h2>Contactos</h2>
                            </div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{ route('site.home') }}">Home</a></li>
                                    <li>Contactos</li>
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
                        <div class="contact_form_title">Estamos Aqui Para Ajudá-lo</div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('site.help.email') }}" class="contact_form" id="contact_form">
                            @csrf
                            <input type="text" class="contact_input" placeholder="Nome" autofocus name="name"
                                required="">
                            <input type="email" class="contact_input" placeholder="Email" name="email" required="">
                            <input type="text" class="contact_input" placeholder="Assunto" name="subject" required="">
                            <textarea name="msg" id="contact_textarea" class="contact_textarea contact_input" placeholder="Mensagem"
                                required=""></textarea>
                            <button class="button contact_button" type="submit">
                                <span>Submeter</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_info_container">
                        <div>
                            <a href="#">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image">
                                        <div>
                                            <img src="/site/images/logo_tics.png" alt="meninas e as TIC" />
                                        </div>
                                    </div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie">
                                            Meninas e as TIC
                                        </div>
                                        <div class="logo_sub">
                                            25 de Abril de 2024 - Mediateca Rei Ngola Kiluanje - Malanje
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="contact_info_list_container">
                            <ul class="contact_info_list">
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>

                                        <div class="contact_info_icon text-center">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAYCAYAAAAYl8YPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAthJREFUeNqUlV9IU1Ecx+/uzlVs0UMmIx8Cox4Koj/e2chpIblUKIoaSH8wlEoLI3xINKgGVrQHA0srAxMf8kEjhMBlUhNnaW7ZPyiQNCqDHEaxalRst+8Pzsbleje3A5+dc+8553t/53d+v98MiqIIem37aV9BhBmLIxKzABOYAd6IZBwYrV0xqbfHoBXbcXJkn8KM1yKMmSEmQECDUVAYc2Pu+PgR87R6r6h+KDkxfBNdDzCDC0AGS0A6WA52gnu0FEzJHQGHrmWl1UPdilEsB72wrHKg2RoU4rTN178UwjI31mYooujwH87sjYlB6BTGVzB5x91acEBIollufc3C+hmISXQSCM4aSo55THj4CWb7b2w1azdtO/d6N3yVDZ5661dPqOdwTBli4xg+hJidfFbN5yo0t8mKGie83Eet4PmW5umz6jW+yiwfuhFQvKn9c25MDFa5NUa5QD5wAjsgC5zWqx9lzbo2+kkLhsoY+lX0VR231IB/Hue68/RguzxJRwyA/WSUat0LEAynS+ujoTGlI/YSSPDZSv5cpXqvbt/BNxow/mKpjthRvvF9YdPb34LEFmH8BnRp1mUAUzRof1HoaJUGXfIr7jMP/zL5Jg+ppM2/HLDMEI4EKDTauH/W4BLeCSm23M45svSQ8jckk2WX+PvbqQohztJICHwAfhHWfMLgLrAiN0tT1Ovh/UF1Oi2m60V6/AGmBy354STSaRfW9iED+hH9ZbGqAesonRy8OtxfSAiJTrffR3EI9s4rQRCkzO+g8mKvGz2zgN4w74tgVUi3nqFiVPFYakJuluupIJ3oo2tBPXLTG7c48mbjsdeNRLepJ5DoLfxYXaiyLu3GeWJw/g8Kn+hxoumE3GxEVwsej9VkVyT1H6AqQXmopmOoY3OgHTQA/5O6HDmeI8V4E0inZ1SnQCZoAJQdlkS3IiaafHRx4yC6PaATbIBVSqL1/wUYAOUwCoCFXq4uAAAAAElFTkSuQmCC"
                                                alt="">
                                        </div>

                                    </div>
                                    <div class="contact_info_text">
                                        Mediateca Rei Ngola Kiluanje - Malanje
                                    </div>
                                </li>


                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="contact_info_icon text-center">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQ9JREFUeNpi9Eg/0MrAwCAFxBf/sbLc/MfOevcvB9ujfS0GPxiwABYgrsImYddy/d1fTvaLQM2X/rKzXvzHwnINKHwPpOEfEB8F4kog1gJibSDWA2IjIHaEYhj4ANLABMSfts+wPwrVCAfWvff4gJQ8ECsDsRsQZ7JA5dixOetosdInIHUZhI0XvD0CpBOZGIgHKkD8nxQNYDCqYVQDtTV8JlYDLD8Ye2YcjADm6TvAPP1gd4/ZGyxqX4MsAGk4D8SGQLwcJuNUc+H3Hw72c8A8fQmYp68A8/Q1BhYWAaDUT5AGUyDWAWININaH5mcQbQ7FKIDx////DDhKDSagDbJAG5SANqgBSw1Q4cAPEGAA0cVLStJWjW0AAAAASUVORK5CYII="
                                                alt="">
                                        </div>

                                    </div>
                                    <div class="contact_info_text">924 092 282</div>
                                </li>


                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="contact_info_icon text-center">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAUCAYAAACXtf2DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqVJREFUeNq0lW1IFFEUhu98QPRFW0YYFkSSVATK1mZtsSEpukoJURTkj6RoM1ySUipRiMQM2iSxrCS2IKT+RFHQmmWa1ZqpgX8qhCQIQ6IyFaztY6b3TGdkCIbcZbvwzDkzc+ecmXvec0fK8bWXCyH8IFHQkCWhy7LQFVloimJYXVWEppLPVrVYmqPKxj3zOV2SKNIQOKHisI2D94FfIn7DCfIpwTc6C13YkBbH4GLllU86jCaL/zskSjBGnnffox1xfPtcdodpiUb55BqS5KHIvlCDZzyWwK5LHyQU+ZyQpCIzAX2BA/wAt0EBVT+n+ElWtMFXNw6thRkEFLwZREACJZgOFBQ5nxPMBC3ZB8InJxs8/fxgJUwYzAe+3l0JXopJsWSWpozlkZGkCX4y6ASHsw529WeWdTvtArvPvE1ZU/+uB+5xlvnynsK5jXyblv+nVUVTDLk2eAaaz653wy0DS0DvxqMvyv8Ovi7wphjmNdUUVDzfm5jWvWfeKy7yRFzV7u3u1bkD+ILFvKbVGZV92ejWPHTwODr4llCVTTy1qasoqdoujm0foAbbLQWrAR5SBfgCKPhpcAPsRA0Ko0oAFblgroORB6dc3tYaJy1RLn8xiWDL09Lk0nDJoq3w34MgVJTxrwTGDuXd3+HgIhvqM2+2VaWGYGaBOY+PpNy0KpTtQ/TBAtsEUJDZXJ0ssc33a9P7rZPbj60Y7ahYNmy99sy/kLSfaZ7SATLVrAkIjbeLqzBLwSEU+c5k+wBFbiX9g6RVlz/e5cvUvIrMTgTB67nRgpBpbbSdDJmS/uvoPSHTIHdyhBKMgKmAdH0RfbA71k0OfVACEwCkqhngM6litmXOdxS5Cn+maTH+0b7+WZSJ4aAEL0EqX/DHacceYzvwW4ABAAgE3sA/tB0ZAAAAAElFTkSuQmCC"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="contact_info_text">
                                        dntti@mittics.gov.ao
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('CSS')
    <link rel="stylesheet" type="text/css" href="/site/styles/contact.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/contact_responsive.css" />
@endsection
