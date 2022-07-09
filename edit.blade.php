@extends('layouts.dashboard')
@section('isi')
<div class="row"> 
    <div class="col-12"> 
    <div class="card"> 
    <div class="card-header"> 
    <h3 class="card-title">Edit User</h3> 
    </div> 
    <!-- /.card-header --> 
    <div class="row ml-3 mt-3"> 
    </div> 
    <div class="card-body"> 
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/user/edit/{{ $toba->id }}" method="post">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Akun</label>
                          <input type="text" name="name" class="form-control" value="{{ $toba->name }}" id="exampleInputEmail1" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">E-Mail</label>
                          <input type="email" name="email" class="form-control" value="{{ $toba->email }}" id="exampleInputPassword1" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          </div>
                        </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!--/.col (right) -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section> 
    </div> 
    <!-- /.card-body --> 
    </div> 
    </div> 
    </div> 
   @endsection 
   @section('custom_js') 
    <script src="{{ asset('back_asset/plugins/datatables/jquery.dataTables.min.js') 
   }}"></script> 
    <script src="{{ asset('back_asset/plugins/datatablesbs4/js/dataTables.bootstrap4.min.js') }}"></script> 
    <script src="{{ asset('back_asset/plugins/datatablesresponsive/js/dataTables.responsive.min.js') }}"></script> 
    <script src="{{ asset('back_asset/plugins/datatablesresponsive/js/responsive.bootstrap4.min.js') }}"></script> 
    <script src="{{ asset('back_asset/plugins/datatablesbuttons/js/dataTables.buttons.min.js') }}"></script> 
    <script src="{{ asset('back_asset/plugins/datatablesbuttons/js/buttons.bootstrap4.min.js') }}"></script> 
    <script> 
    $(function() { 
    $("#example1").DataTable({ 
    "responsive": true, 
    "lengthChange": false, 
    "autoWidth": false, 
    }); 
    }); 
    </script> 
@endsection