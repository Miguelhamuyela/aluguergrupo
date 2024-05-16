@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Marcação de Presença')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.invitationcard.index') }}"><u>Marcações de Presença</u></a> >
                {{ $invitationcard->code }} : {{ $invitationcard->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="h3 m-4 page-title">{{ $invitationcard->name }}</h2>
                            </div>
                            <div class="col-md-6 my-4">
                                <form class="row"
                                    action="{{ route('admin.invitationcard.update', $invitationcard->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-8">
                                        <label for="status">Estado do Pedido</label>
                                        <select name="status" id="status" class="form-control" required>
                                            @if (isset($invitationcard->status))
                                                <option value="{{ $invitationcard->status }}" class="text-primary h6"
                                                    selected>
                                                    {{ $invitationcard->status }}
                                                </option>
                                            @else
                                                <option disabled selected>selecione o Estado do Pedido</option>
                                            @endif

                                            <option value="Não Autorizado">Não Autorizado</option>
                                            <option value="Autorizado">Autorizado</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submeter
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>

                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-md-12 mb-1">
                                        <h5>
                                            <b>Estado:</b>
                                            {{ $invitationcard->status }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <h5>
                                            <b>Email:</b>
                                            {{ $invitationcard->email }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <h5>
                                            <b>Empresa - Função:</b>
                                            {{ $invitationcard->position }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <h5>
                                            <b>Code:</b>
                                            {{ $invitationcard->code }}
                                        </h5>
                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b>
                                            {{ $invitationcard->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                            {{ $invitationcard->updated_at }}
                                        </p>

                                    </div>
                                    @if ($invitationcard->status == 'Autorizado')
                                        <div class="col-md-5 text-right">
                                            <a type="button" class="btn px-5 btn-primary" target="_blank"
                                                href="{{ route('admin.invitationcard.create', $invitationcard->code) }}">
                                                Imprimir Convite
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>



@endsection
