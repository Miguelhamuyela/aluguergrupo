@isset($gallery)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $gallery->cover }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="name">Titulo da Galeria</label>
        <input type="text" name="name" id="name" value="{{ isset($gallery->name) ? $gallery->name : '' }}"
            class="form-control border-secondary" placeholder="Titulo da Galeria" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="date">Data da Galeria</label>
        <input type="date" name="date" id="date" value="{{ isset($gallery->date) ? $gallery->date : '' }}"
            class="form-control border-secondary" placeholder="Data da Galeria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="image">Capa a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($gallery->file) ? $gallery->file : '' }}" class="form-control border-secondary"
                type="file" name="image" id="image" required>

        </div>
    </div>
</div> <!-- /.col -->
