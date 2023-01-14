@extends('layout.side')
@extends('layout.mainlayout')


 @section('title', 'Work Order')


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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-user">
                        <i class="nav-icon fas fa-plus"></i> Buat Indikator
                    </button>
                </div>
                {{-- @include('Masterdata.user.modaladduser') --}}
           
 
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                          <th>Indikator</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $user) --}}
                            <tr>
                                <td></td>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        {{-- @endforeach --}}

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
 @endsection
