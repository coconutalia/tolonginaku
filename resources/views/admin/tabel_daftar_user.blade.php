@extends('admin.layout')
@section('title', 'Tabel Daftar User')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar User KOPMA UGM</h3>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body" style="Overflow:scroll">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Foto</th>
                  <th>Nama Lengkap</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                  <th>Kode</th>
                  <th>Status</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Ubah</th>
                  <th>Hapus</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data_user as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->foto}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->fakultas}}</td>
                  <td>{{$data->prodi}}</td>
                  <td>{{$data->kode}}</td>
                  <td>{{$data->status}}</td>
                  <td>{{$data->jabatan}}</td>
                  <td>{{$data->alamat}}</td>
                  <td>{{$data->telepon}}</td>
                  <td>{{$data->email}}</td>
                  
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