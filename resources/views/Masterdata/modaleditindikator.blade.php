<div class="modal fade" id="modal-edit{{ $aspek->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <p><b>Edit Identitas Pribadi</b></p>
                {!! Form::model($aspek, ['method' => 'patch', 'route' => ['Indikator.update', $aspek->id]]) !!}
                <div class="mb-3">
                    {!! Form::label('Indikator', 'Indikator') !!}
                    {!! Form::text('aspek', $aspek->aspek, ['class' => 'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('Keterangan', 'Keterangan') !!}
                    {!! Form::text('ket', $aspek->ket, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                    Cancel</button>
                {{ Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-delete{{ $aspek->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Indikator</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                {!! Form::model($aspek, ['method' => 'delete', 'route' => ['aspek.delete', $aspek->id]]) !!}
                <h4 class="text-center">Are you sure you want to delete Indikator?</h4>
                <h5 class="text-center">Name: {{ $aspek->aspek }}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                    Cancel</button>
                {{ Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
