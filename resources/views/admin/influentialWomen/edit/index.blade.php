@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Mulher Influente')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.influentialWomen.index') }}"><u>Listar Mulheres Influentes</u></a> > Editar
                Mulher Influente >
                {{ $influentialWomen->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action='{{ route('admin.influentialWomen.update', $influentialWomen->id) }}' method="POST"
                enctype="multipart/form-data" class="row">
                @csrf
                @method('PUT')
                @include('forms._formInfluentialWomen.index')
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-primary">
                            Salvar alterações
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>


        </div>
    </div>



@endsection
