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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <form method="POST" action="/mobilupdate/{{$mobil->id}}" role="form" enctype="multipart/form-data">

                    @csrf
                    {{method_field('PUT')}}
                      <div class="modal-body">
                        <input type="hidden" name="id" value="{{$mobil->id}}">
                        <div class="form-group">
                          <label >Nama</label>
                          <input type="text" class="form-control"  value="{{ $mobil->name }}" name="name">
                        </div>
                        <div class="form-group">
                          <label >Merk</label>
                          <input type="text" class="form-control"  value="{{ $mobil->merk }}" name="merk">
                        </div>
                        <div class="form-group">
                          <label >Tahun</label>
                          <input type="text" class="form-control"  value="{{ $mobil->tahun }}" name="tahun">
                        </div>
                        <div class="form-group">
                          <label >warna</label>
                          <input type="text" class="form-control"  value="{{ $mobil->transmisi }}" name="transmisi">
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
                        <label>Select</label>
                        <select class="form-control" name="kategori_id" placeholder="{{ $mobil->kategori_id }}" value="{{ $mobil->kategori_id }}">
                          <option value="1">Ada</option>
                          <option value="2">Dipinjam</option>
                        </select>
                      </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{ $mobil->image}}">
                              <label class="custom-file-label" for="exampleInputFile" > Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
        </div>
      
      </section>
      <!-- /.content -->
    </div>
  </div>
  
  @endsection
  