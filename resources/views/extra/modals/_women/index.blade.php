<div class="modal fade p-5" id="modalinfluentialWomen{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalinfluentialWomen{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-dark" id="modalinfluentialWomen{{ $item->id }}">
                    {{ $item->name }}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h5 class="mb-2 text-dark my-2">
                    <b>Função: </b>
                    {{ $item->function }}
                </h5>

                <h5 class="my-4 text-dark"><b>Informação:</b>
                    {!! html_entity_decode($item->description) !!}
                </h5>


            </div>
        </div>
    </div>
</div>
