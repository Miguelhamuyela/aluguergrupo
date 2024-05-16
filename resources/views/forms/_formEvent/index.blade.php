<div class="col-md-4">
    <div class="form-group">
        <label for="date">Date de Inserção</label>
        <input type="datetime-local" name="date" id="date"
            value="{{ isset($event->date) ? date('Y-m-d\TH:i:s', strtotime($event->date)) : old('date') }}"
            class="form-control border-secondary" required>
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="place">Local</label>
        <input type="place" name="place" id="place" value="{{ isset($event->place) ? $event->place : old('place') }}"
            class="form-control border-secondary" placeholder="Local onde será realizado" required>
    </div>
</div>

<div class="col-md-6 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Actividades</h5>
            <!-- Create the editor container -->
            <textarea name="activity" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($event->activity) ? $event->activity : old('activity') }}
            </textarea>
        </div>
    </div>
</div>
<div class="col-md-6 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Apresentação, Moderadores ou Prelectores</h5>
            <!-- Create the editor container -->
            <textarea name="apresentation" id="editor2" style="min-height:300px; min-width:100%">
                {{ isset($event->apresentation) ? $event->apresentation : old('apresentation') }}
            </textarea>
        </div>
    </div>
</div>
