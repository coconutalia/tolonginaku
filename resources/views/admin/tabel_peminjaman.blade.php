@extends('admin.layout')
@section('title', 'Tabel Peminjaman')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Peminjaman</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/peminjaman">Tabel Peminjaman</a></li>
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
              <h3 class="card-title">Tabel daftar peminjaman ruangan dan barang KOPMA UGM</h3>
              <div class="dropdown">
              <br>
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Unduh
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('/export-pdf-bulan')}}">Bulan Ini</a>
                  <a class="dropdown-item" href="{{url('/export-pdf-tahun')}}">Tahun Ini</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Acara</th>
                  <th>Ruang</th>
                  <th>Barang</th>
                  <th>Jumlah Pinjam</th>
                  <th>Tanggal</th>
                  <th>Waktu Mulai</th>
                  <th>Waktu Selesai</th>
                  <th>Aksi</th>
                  <th>Ubah</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data_peminjaman as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->acara}}</td>
                  <td>{{$data->ruang}}</td>
                  <td>{{$data->barang}}</td>
                  <td>{{$data->jumlah_pinjam}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->Waktu_mulai}}</td>
                  <td>{{$data->Waktu_selesai}}</td>
                  @if($data->aksi=="Terima")
                  <td>{{$data->aksi}}</td>
                  @elseif($data->aksi=="Tolak")
                  <td>{{$data->aksi}}</td>
                  @elseif($data->aksi=="Kembali")
                  <td>{{$data->aksi}}</a></td>
                  @endif
                  <div class="row">
                  <td><a type="button" class="btn btn-primary" href="/p/edit/{{ $data->id }}">Ubah</a></td>
                  </div>
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
            </section>
@stop
