@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <form method="POST" action="/userupdate/{{$user->id}}" role="form" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
        <div class="modal-body">
            <input type="hidden" name="id" value="{{$user->id}}">

                <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control"  value="{{ $user->name }}" name="name">
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control"  value="{{ $user->email }}" name="email">
                </div>

                <div class="form-group">
                    <label >NIK</label>
                    <input type="text" class="form-control"  value="{{ $user->nik }}" name="nik">
                </div>

                <div class="form-group">
                    <label >Telepon</label>
                    <input type="text" class="form-control"  value="{{ $user->telepon }}" name="telepon">
                </div>
                <div class="form-group">
                    <label>Select</label>
                        <select class="form-control" name="status"  value="{{ $user->status }}">
                          <option value= 0>Belum Verifikasi</option>
                          <option value= 1>Verifikasi</option>
                        </select>
                      </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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