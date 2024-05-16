@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Eventos')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.event.index') }}"><u>Listar Eventos</u></a> > {{ $event->id }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $event->id }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-1">
                                        <h5 class="mb-1">
                                            <b>Data de Inserção: </b>
                                            {{ date('h:i | d-m-Y', strtotime($event->date)) }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <h5 class="mb-1">
                                            <b>Local: </b>
                                            {{ $event->place }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Actividade:</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($event->activity) !!}</p>

                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Apresentação,Moderadores ou Prelectores:</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($event->apresentation) !!}</p>

                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $event->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $event->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
