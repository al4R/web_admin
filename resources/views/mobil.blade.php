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

        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Table Mobil</h3>
            <button type="button" class="btn btn-info float-right " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus blue"></i> Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table id="editdatatable"class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>No Kendaraan</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Transmisi</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listMobil as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ "Rp.".number_format($data->harga) }}</td>
                        <td>{{ $data->no_kendaraan }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->transmisi }}</td>
                        <td>
                        <a href="/mobilupdate/{{$data->id}}">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        <!-- /mobilupdate/{{$data->id}} -->
                        /
                        <a href="/mobildelete/{{$data->id}}">
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
                      <h5 class="modal-title" id="exampleModalLabel">Add data mobil</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <form method="POST" action="{{ route('mobil.store') }}" role="form" enctype="multipart/form-data">
                    
                    @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label >Nama</label>
                          <input type="text" class="form-control"  placeholder=" Nama"  name="name">
                        </div>
                        <div class="form-group">
                          <label >Merk</label>
                          <input type="text" class="form-control"  placeholder="Merk" name="merk">
                        </div>
                        <div class="form-group">
                          <label >Tahun</label>
                          <input type="text" class="form-control"  placeholder="Tahun" name="tahun">
                        </div>

                        <div class="form-group">
                          <label >No Kendaraan</label>
                          <input type="text" class="form-control"  placeholder="No Kendaraan" name="no_kendaraan">
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
                          <input type="text" class="form-control"  placeholder="Kapasitas" name="kapasitas">
                        </div>
                        <div class="form-group">
                          <label >Harga</label>
                          <input type="text" class="form-control"  placeholder="Harga" name="harga">
                        </div>
                        <div class="form-group">
                          <label >Deskripsi</label>
                          <input type="text" class="form-control"  placeholder="deskripsi" name="deskripsi">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
