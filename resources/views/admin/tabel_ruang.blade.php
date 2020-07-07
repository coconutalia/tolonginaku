@extends('admin.layout')
@section('title', 'Tabel Daftar User')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar ruangan KOPMA UGM</h3>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama_ruang</th>
                  <th>Alamat_ruang</th>
                  <th>Deskripsi</th>
                  <th>Kuota</th>
                  <th>Ubah</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data_ruang as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->nama_ruang}}</td>
                  <td>{{$data->alamat_ruang}}</td>
                  <td>{{$data->deskripsi}}</td>
                  <td>{{$data->kuota}}</td>
                  <div class="row">
                  <td><button type="button" class="btn btn-primary" onClick="handleClickUbah()">Ubah</button></td>
                  <td><button type="button" class="btn btn-danger" onClick="handleClickHapus()">Hapus</button></td>
                  </div>
                </tr>
                @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @stop