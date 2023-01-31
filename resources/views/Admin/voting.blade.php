@extends('layout.side')
@extends('layout.mainlayout')


@section('title', 'Voting')


@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Voting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Voting</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @include('layout.flash-message')
        <!-- /.content-header -->
        {{-- enctype="multipart/form-data" --}}

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action="Voting" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- Vote Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Vote Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="kode_vote" class="col-sm-2 col-form-label">ID Vote</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kode_vote" name="kode_vote"
                                                placeholder="Vote">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul_vote" name="judul_vote"
                                                placeholder="Judul Vote">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Indikator Penilaian</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="id_aspek" name="id_aspek"
                                                placeholder="Indikator">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- Form Element sizes -->

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Rincian Vote Form</h3>
                                </div>
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="nama_roti" class="col-sm-3 col-form-label">Nama Roti</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_roti" name="nama_roti"
                                                placeholder="Nama Roti">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="photo_roti" class="col-sm-3 col-form-label">Photo Roti</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="photo_roti" name="photo_roti"
                                                placeholder="roti">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="Deskripsi" class="col-sm-3 col-form-label">Deskripsi Roti</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Roti"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            {{-- <button type="submit" class="btn btn-success">Add More</button> --}}
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                </form>
            </div>

            <!-- /.card -->
    </div>
    <!--/.col (right) -->

    </section>


@endsection
