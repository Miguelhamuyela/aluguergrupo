<footer class="footer">

    <div class="footer_extra">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                        @if ($configuration->facebook)
                            <div class="footer_social">
                                <div class="footer_social_title">
                                    Siga as Nossas Redes Sociais
                                </div>
                                <ul class="footer_social_list">

                                    <li>
                                        <a target="_blank" href="{{ $configuration->facebook }}"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>

                                </ul>
                            </div>
                        @endif
                        <div class="footer_extra_right ml-lg-auto text-lg-right">
                            <div class="footer_extra_links">
                                <ul>
                                    <li><a href="{{ route('site.contact') }}">Contactos</a></li>
                                    <li><a href="#">Políticas de Privacidade</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                Meninas e as TIC &copy;
                                {{ date('Y') }}
                                Todos os Direitos Reservados <br> By <a target="_blank" class="text-white" href="https://infosi.gov.ao">INFOSI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="/site/js/jquery-3.2.1.min.js"></script>
<script src="/site/styles/bootstrap4/popper.js"></script>
<script src="/site/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/site/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/site/plugins/easing/easing.js"></script>
<script src="/site/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/site/js/custom.js"></script>

@if (session('helpCreate'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso!',
            showConfirmButton: false,
            timer: 2000
        })
    </script>

@elseif(session('presence'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Solicitação Enviada!',
            text: 'Recepcionamos a sua solicitação de um Convite para o Fórum Meninas e as TIC',
            showConfirmButton: true,
        })
    </script>
@endif

@yield('JS')


</body>

</html>
