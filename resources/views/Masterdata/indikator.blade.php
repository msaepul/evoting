@extends('layout.mainlayout')


@section('title', 'Indikator')


@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Master Data Indikator</h1>
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
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal-indikator">
                                    <i class="nav-icon fas fa-plus"></i> Buat Indikator
                                </button>
                            </div>
                            @include('Masterdata.modaladdindikator')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Indikator</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aspeks as $aspek)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $aspek->aspek }}</td>
                                            <td>{{ $aspek->ket }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#modal-edit{{ $aspek->id }}">
                                                    <i class="nav-icon fas fa-pen"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete{{ $aspek->id }}">
                                                    <i class="nav-icon fas fa-trash"></i> hapus
                                                </button>
                                            </td>
                                            @include('Masterdata.modaleditindikator')
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endsection
