@isset($influentialWomen)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Foto</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $influentialWomen->photo }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-5">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($influentialWomen->name) ? $influentialWomen->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-3">
    <div class="form-group">
        <label for="function">Função</label>
        <input type="text" name="function" id="function" value="{{ isset($influentialWomen->function) ? $influentialWomen->function : old('function') }}"
            class="form-control border-secondary" placeholder="Função" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-4">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="photo">Selecione a Foto</label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="photo">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite a Descrição</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($influentialWomen->description) ? $influentialWomen->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
