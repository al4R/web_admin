@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-bottom:40px">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Mobil</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <form method="POST" action="/mobilupdate/{{$mobil->id}}" role="form" enctype="multipart/form-data">

                    @csrf
                    {{method_field('PUT')}}
          <div class="col-md-9 " style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header" style="margin-bottom:30px">
                <h3 class="card-title">Perbarui data mobil</h3>
              </div>
              <div class="col-md-11" style="margin:0 auto">
                  <input type="hidden" name="id" value="{{$mobil->id}}">
                      <div class="form-group">
                          <label >Model</label>
                  <input type="text" class="form-control"  value="{{ $mobil->model }}" name="model">
              </div>
                        <div class="form-group">
                          <label >Merk</label>
                          <input type="text" class="form-control"  value="{{ $mobil->merk }}" name="merk">
                        </div>
                        <!-- <div class="form-group">
                          <label >Model</label>
                          <input type="text" class="form-control"  value="{{ $mobil->seri_id }}" name="seri_id">
                        </div> -->
                        <div class="form-group">
                          <label >Tahun</label>
                          <input type="text" class="form-control"  value="{{ $mobil->tahun }}" name="tahun">
                        </div>
                        <div class="form-group">
                          <label >NO Kendaraan</label>
                          <input type="text" class="form-control"  value="{{ $mobil->no_kendaraan }}" name="no_kendaraan">
                        </div>
                        <div class="form-group">
                        <label>Transmisi</label>
                        <select class="form-control" name="transmisi">
                          <option value="Manual">Manual</option>
                          <option value="Automatic">Automatic</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <label >Kapasitas</label>
                          <input type="text" class="form-control"  value="{{ $mobil->kapasitas }}" name="kapasitas">
                        </div>
                        <div class="form-group">
                          <label >Harga</label>
                          <input type="text" class="form-control"  value="{{ $mobil->harga }}" name="harga">
                        </div>
                        <div class="form-group">
                          <label >Deskripsi</label>
                          <input type="text" class="form-control"  value="{{ $mobil->deskripsi }}" name="deskripsi">
                        </div>
                        <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" placeholder="{{ $mobil->status }}" value="{{ $mobil->status }}">
                          <option value="1">Ada</option>
                          <option value="0">Dipinjam</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label >Mobil</label>
                        <br></br>
                        <img src="/storage/mobil/{{$mobil->image}}" alt="error" style="width:202px;height:202px;">
                      </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Ubah gambar mobil</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{ $mobil->image}}">
                              <label class="custom-file-label" for="exampleInputFile" > Pilih gambar</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      
                      <div class="modal-footer">
                        <a href="/mobil" type="button" class="btn btn btn-secondary">Tutup</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>    
                  </form>
        </div>
      
      </section>
      <!-- /.content -->
    </div>
  </div>
  
  @endsection
  