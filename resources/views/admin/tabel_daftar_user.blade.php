@extends('admin.layout')
@section('title', 'Tabel Daftar User')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Daftar User</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/user">Tabel Daftar User</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar User KOPMA UGM</h3>
            </div>
            <div class="card-header">
            <td><a type="button" class="btn btn-primary" href="/user/tambah">Tambah Anggota</a></td>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body" style="Overflow:scroll">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>KTM</th>
                  <th style="text-align: center; width:20%;">Nama Lengkap</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                  <th>Kode</th>
                  <th>Status</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th style="text-align: center; width:17%;">Aksi</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data_user as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td><img width="100" src="{{url('/image/'.$data->ktm)}}" alt="">{{$data->ktm}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->fakultas}}</td>
                  <td>{{$data->prodi}}</td>
                  <td>{{$data->kode}}</td>
                  <td>{{$data->status}}</td>
                  <td>{{$data->jabatan}}</td>
                  <td>{{$data->alamat}}</td>
                  <td>{{$data->telepon}}</td>
                  <td>{{$data->email}}</td>
                  <td class="text-truncate" style="text-align: center; width: 20px;" class="inline">
                  <a type="button" class="btn btn-primary" href="/user/edit/{{ $data->id }}">Ubah</a> 
                  <a type="button" class="btn btn-danger" href="/user/hapus/{{ $data->id }}" onclick="return confirm('Anda yakin akan menghapus item ini ?')">Hapus</a></td>
                   </tr>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
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