@extends('layouts.dashboard')
@section('isi')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-2">Daftar Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            <li class="breadcrumb-item active">Index</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.card-header --> 
    <div class="row ml-3 mt-3"> 
    <div class="col-4"> 
    <a href="/kategori/tambah" type="button" class="btn btn-sm btn-success"><i 
   class="fa fa-plus-circle" 
    style='color: white' aria-hidden="true"></i> Tambah 
    Produk</a> 
    </div> 
    </div> 
    <div class="card-body"> 
    <table id="example1" class="table table-sm table-bordered table-striped 
   table-hover"> 
    <thead> 
    <tr> 
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Musim</th>
        <th>Gambar</th>
    </tr> 
    </thead> 
    <tbody> 
    @php 
    $i = 0; 
    @endphp 
    @foreach ($data as $i => $kategori) 
    <tr> 
    <td>{{ ++$i }}</td> 
    <td>{{ $kategori->nama_kategori }}</td> 
    <td>{{ $kategori->Harga }}</td>
    <td>{{ $kategori->Musim }}</td> 
    <td><img src="{{ asset('storage/'.$kategori->Gambar) }}" width = '25%' alt=""></td> 
    <td> 
    <a href="{{ url('kategori/edit/' . $kategori->id) }}" class="btn 
   btn-sm btn-success">Edit</a> 
    <a href="{{ url('kategori/hapus/'. $kategori->id) }}" class="btn 
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
