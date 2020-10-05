@extends('admin.layout')
@section('title', 'Tabel Barang')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Barang</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/barang">Tabel Barang</a></li>
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
              <h3 class="card-title">Tabel daftar barang KOPMA UGM</h3>
            </div>
            <div class="card-header">
            <td><a type="button" class="btn btn-primary" href="/barang/tambah">Tambah Barang</a></td>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama_barang</th>
                    <th>Jumlah_barang</th>
                    <th>Barang_tersedia</th>
                    <th>Jumlah_pinjam</th>
                    <th>Jumlah_request</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_barang as $data)
                  <tr id="kolom-{{$data->id}}">
                    <td>{{$data->id}}</td>
                    <td>{{$data->nama_barang}}</td>
                    <td>{{$data->total_barang}}</td>
                    <td>{{$data->barang_tersedia}}</td>
                    <td>{{$data->jumlah_pinjam}}</td>
                    <td>{{$data->jumlah_request}}</td>
                    <td>{{$data->jenis}}</td>
                    <div class="row">
                    <td><a type="button" class="btn btn-primary" href="/barang/edit/{{ $data->id }}">Ubah</a> <a type="button" class="btn btn-danger" href="/barang/hapus/{{ $data->id }}">Hapus</a></td>
                    </div>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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
