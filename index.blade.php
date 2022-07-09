@extends('layouts.dashboard')
@section('isi')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-2">Daftar User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.card-header --> 
    <div class="row ml-3 mt-3"> 
    <div class="col-4"> 
    <a href="/user/tambah" type="button" class="btn btn-sm btn-success"><i 
   class="fa fa-plus-circle" 
    style='color: white' aria-hidden="true"></i> Tambah 
    User</a> 
    </div> 
    </div> 
    <div class="card-body"> 
    <table id="example1" class="table table-sm table-bordered table-striped 
   table-hover"> 
    <thead> 
    <tr> 
    <th>No</th> 
    <th>Nama Lengkap</th> 
    <th>Email</th> 
    <th>Aksi</th> 
    </tr> 
    </thead> 
    <tbody> 
    @php 
    $i = 0; 
    @endphp 
    @foreach ($pengguna as $useritem) 
    <tr> 
    <td>{{ ++$i }}</td> 
    <td>{{ $useritem->name }}</td> 
    <td>{{ $useritem->email }}</td> 
    <td> 
    <a href="{{ url('user/edit/' . $useritem->id) }}" class="btn 
   btn-sm btn-success">Edit</a> 
    <a href="{{ url('user/hapus/' . $useritem->id) }}" class="btn 
   btn-sm btn-danger">Hapus</a>     
    </td> 
    </tr> 
    @endforeach 
    </tbody> 
    </table> 
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