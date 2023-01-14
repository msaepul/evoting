<div class="modal fade" id="modal-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <p><b>Isi Identitas Pribadi</b></p>
                <form action="user" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" id="nama_lengkap"
                            name="nama_lengkap" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="username" name="username"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password"
                            name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-lock"></span>
    </div>
  </div>
</div> --}}
                    <p><b>Cabang dan Departemen</b></p>

                    {{-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cabang" id="cabang_id" name="cabang_id" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div> --}}

                    {{-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Departemen" id="departemen_id" name="departemen_id" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-envelope"></span>
    </div>
  </div>
</div> --}}
                    <div class="input-group mb-3">
                        <select class="form-control select2" style="width: 100%;" id="cabang_id" name="cabang_id"
                            required>
                            <option disabled bold value="Cabang">Cabang</option>
                            {{-- @foreach ($cabang as $cab)
                                <option value="{{ $cab->id }}">{{ $cab->cabang }}</option>
                            @endforeach --}}

                        </select>

                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control select2" style="width: 100%;" id="departemen_id"
                            name="departemen_id" required>
                            <option disabled value="Departemen"><b>Departemen</b></option>
                            {{-- @foreach ($departemen as $dept)
                                <option value="{{ $dept->id }}">{{ $dept->departemen }}</option>
                            @endforeach --}}
                        </select>

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

