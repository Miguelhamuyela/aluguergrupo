 @extends('layouts.merge.dashboardWithoutMenu')
 @section('titulo', 'Error 500')
 @section('content')

     <div class="wrapper vh-100">
         <div class="align-items-center h-100 d-flex w-50 mx-auto">
             <div class="mx-auto text-center">
                 <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">500</h1>
                 <h1 class="mb-1 text-muted font-weight-bold">Aconteceu um erro no servidor!</h1>

                 <a href="{{ route('site.home') }}" class="btn btn-lg btn-primary px-5 mt-4">Voltar na Página Principal</a>
             </div>
         </div>
     </div>


 @endsection
