@extends('layout.side')
@extends('layout.mainlayout')


 @section('title', 'Work Order')


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
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
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
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">ID Vote</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Vote">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="Judul" class="form-control" id="Judul" placeholder="Judul">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Indikator Penilaian</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Indikator">
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </form>
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
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Nama Roti</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nama Roti">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Photo Roti</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" id="inputroti" placeholder="roti">
                      </div>
                    </div>
                   
                   
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-3 col-form-label">Deskripsi Roti</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="inputDeskripsi" placeholder="Deskripsi Roti"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Add More</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
              
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

    <!-- /.content -->
     </div>
 </div>
 @endsection
