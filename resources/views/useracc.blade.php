@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-bottom:40px">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <form method="POST" action="/useracc/{{$user->id}}" role="form" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
    <div class="col-md-9 " style="margin:0 auto">
          <div class="card card-primary">
              <div class="card-header" style="margin-bottom:30px">
                <h3 class="card-title">Verifikasi data pengguna</h3>
              </div>
              <div class="col-md-11" style="margin:0 auto">
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control"  value="{{ $user->name }}" name="nik" disabled>
                </div>
                <div class="form-group">
                    <label >NIK</label>
                    <input type="text" class="form-control"  value="{{ $user->nik }}" name="nik" disabled>
                </div>
                
                <div class="form-group">
                    <label >Ktp</label>
                    <br></br>
                    <img src="/storage/ktp/{{$user->ktp}}" alt="error" style="width:202px;height:202px;">
                </div>


            <div class="modal-footer">
                <a href="{{ route('user.index') }}"type="button" class="btn btn btn-secondary">Tutup</a>
                <button type="submit" class="btn btn-success">Acc</button>
            </div>
          </div>
      </div>    
        </div>    

                    
    </form>                    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      </div>
      
      </section>
      <!-- /.content -->
    </div>
</div>
  
  @endsection