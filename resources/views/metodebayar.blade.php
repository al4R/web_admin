@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Metode pembayaran</h1>
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

        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tabel metode pembayaran</h3>
            <button type="button" class="btn btn-info float-right " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus blue"></i> Tambah</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table id="editdatatable"class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Metode</th>
                    <th>NO REK</th>
                    <th>Logo</th>
                    <th style="width: 90px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listMetode as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->metode }}</td>
                        <td>{{ $data->no_rekening }}</td>
                        <td><img src="/storage/metode/{{$data->logo}}" alt="error" style="width:202px;height:100px;"></td>
                        <td>
                        <a href="/metodeshow/{{$data->id}}">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        <!-- /mobilupdate/{{$data->id}} -->
                        /
                        <a href="/metodedelete/{{$data->id}}">
                            <i class="fa fa-trash red"></i>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <!-- modal add -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah jenis pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <form method="POST" action="{{ route('metode.store') }}" role="form" enctype="multipart/form-data">
                    
                    @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label >Metode</label>
                          <input type="text" class="form-control"  placeholder="Metode"  name="metode">
                        </div>
                        <div class="form-group">
                          <label >NO REK</label>
                          <input type="text" class="form-control"  placeholder="NO Rekening" name="no_rekening">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Logo pembayaaran</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                              <label class="custom-file-label" for="exampleInputFile">Pilih logo</label>
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
                </div>
              </div> 
              <!-- end modal add -->
              
            </div>
      
      
      </div>
      
    </section>
    <!-- /.content -->
  </div>
</div>

@endsection
