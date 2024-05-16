{{-- menu mobile --}}
<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <div class="logo menu_logo">
            <a href="#">
                <div class="logo_container d-flex flex-row align-items-start justify-content-start">

                    <div class="logo_content">
                        <div class="logo_text logo_text_not_ie">Meninas e as TIC</div>
                        <div class="logo_sub">25 de Abril de 2024 - Mediateca Rei Ngola Kiluanje - Malanje</div>
                    </div>
                </div>
            </a>
        </div>
        <ul>
            <li class="menu_item"><a href="{{ route('site.home') }}">Home</a></li>
            <li class="menu_item"><a href="{{ route('site.about') }}">Sobre</a></li>
            <li class="menu_item"><a href="{{ route('site.news') }}">Notícias</a></li>
            <li class="menu_item"><a href="{{ route('site.gallery') }}">Galerias</a></li>
            <li class="menu_item"><a href="{{ route('site.contact') }}">Contactos</a></li>
        </ul>
    </div>
    @if ($configuration->facebook)
        <div class="menu_social">
            <div class="menu_social_title">Siga as Nossas Redes Sociais</div>
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    @endif
</div>

{{-- menu desktop --}}
<header class="header" id="header">
    <div>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
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
                            @if ($configuration->facebook)
                                <div class="header_social ml-auto">
                                    <ul>

                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            @endif
                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
            <div class="header_nav_inner">
                <div class="header_nav_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div
                                    class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                    <nav class="main_nav">
                                        <ul>

                                            <li class="@yield('home')"><a href="{{ route('site.home') }}">Home</a>
                                            </li>
                                            <li class="@yield('about')"><a href="{{ route('site.about') }}">Sobre
                                                </a></li>
                                            <li class="@yield('news')"><a
                                                    href="{{ route('site.news') }}">Notícias</a>
                                            </li>
                                            <li class="@yield('gallery')"><a
                                                    href="{{ route('site.gallery') }}">Galerias</a></li>
                                            <li class="@yield('contact')"><a
                                                    href="{{ route('site.contact') }}">Contactos</a></li>
                                        </ul>
                                    </nav>
                                    <div class="header_extra ml-auto">

                                        <div class="button header_button">
                                            <a href="{{ route('site.invitationcard') }}">Marcar Presença!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
