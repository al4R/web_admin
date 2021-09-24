@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-bottom:40px">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail jenis pembayaran</h1>
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

    <form method="POST" action="/metodeupdate/{{$metode->id}}" role="form" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
          <div class="col-md-9 " style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header" style="margin-bottom:30px">
                <h3 class="card-title">Perbarui data pembayaran</h3>
              </div>
              <div class="col-md-11" style="margin:0 auto">
            <input type="hidden" name="id" value="{{$metode->id}}">

                <div class="form-group">
                    <label >Metode</label>
                    <input type="text" class="form-control"  value="{{ $metode->metode }}" name="metode">
                </div>

                <div class="form-group">
                    <label >NO REK</label>
                    <input type="text" class="form-control"  value="{{ $metode->no_rekening }}" name="no_rekening">
                </div>

                
                <div class="form-group">
                    <label >Logo</label>
                    <br></br>
                    <img src="/storage/metode/{{$metode->logo}}" alt="error" style="width:202px;height:202px;">
                </div>
                <div class="form-group">
                          <label for="exampleInputFile">Ubah logo pembayaran</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                              <label class="custom-file-label" for="exampleInputFile">Pilih logo</label>
                            </div>
                          </div>
                        </div>
                
            <div class="modal-footer">
                <a href="/metode" type="button" class="btn btn btn-secondary">Tutup</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
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