@extends('admin.layout')
@section('title', 'Tabel Ruang')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Ruang</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/ruang">Tabel Ruang</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar ruangan KOPMA UGM</h3>
            </div>
            <div class="card-header">
            <td><a type="button" class="btn btn-primary" href="/ruang/tambah">Tambah Ruang</a></td>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ruang</th>
                  <th>Alamat Ruang</th>
                  <th>Deskripsi</th>
                  <th>Kuota</th>
                  <th style="text-align: center; width:17%;">Aksi</th>
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
                  <td class="text-truncate" style="width:20px;">
                  <a type="button" class="btn btn-primary inline" href="/ruang/edit/{{ $data->id }}">Ubah</a> 
                  <a type="button" class="btn btn-danger inline" href="/ruang/hapus/{{ $data->id }}" onclick="return confirm('Anda yakin akan menghapus item ini ?')">Hapus</a>
                  </td>
                  
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