<div class="modal fade" id="modal-indikator">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Indikator</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <p><b>Isi Indikator Penilaian</b></p>
                <form action="Indikator" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Indikator" id="indikator" name="aspek"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="keterangan" name="ket"placeholder="Deskripsi Indikator"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas "></span>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- /.form-box -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
        </form>
    </div>
