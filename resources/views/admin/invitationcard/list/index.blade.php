@extends('layouts.merge.dashboard')
@section('titulo', 'Marcações de Presença')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Marcações de Presença
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>EMPRESA - FUNÇÃO</th>
                        <th>ESTADO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($invitationcards as $item)
                        <tr class="text-dark text-center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td>{{ $item->position }} </td>
                            <td>{{ $item->status }} </td>
                        
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ route("admin.invitationcard.show",$item->id) }}'
                                            class="dropdown-item">Detalhes</a>

                                    

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
