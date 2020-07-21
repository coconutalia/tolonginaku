@extends('admin.layout')
@section('title', 'Ubah Barang')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Barang</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <<li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/barang">Tabel Barang</a>/Ubah</li>
              <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">


        <div class="container">
        @foreach($data_barang as $data)
        <form class="form-horizontal" action="/barang/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}"> <br/>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="nama_barang">Nama Barang:</label>
                    <input class="col-sm-9" type="text" required="required" name="nama_barang" value="{{ $data->nama_barang }}">
                </div>
        
                <div class="form-group">
                    <label class="control-label col-sm-2" for="total_barang">Total Barang:</label>
                    <input class="col-sm-9" type="text" required="required" name="total_barang" value="{{ $data->total_barang }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="barang_tersedia">Barang Tersedia:</label>
                    <input class="col-sm-9" type="text" required="required" name="barang_tersedia" value="{{ $data->barang_tersedia }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="jumlah_pinjam">Jumlah Pinjam:</label>
                    <input class="col-sm-9" type="text" required="required" name="jumlah_pinjam" value="{{ $data->jumlah_pinjam }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="jumlah_request">Jumlah Request:</label>
                    <input class="col-sm-9" type="text" name="jumlah_request" value="{{ $data->jumlah_request }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="jenis">Jenis:</label>
                    <input class="col-sm-9" type="text" required="required" name="jenis" value="{{ $data->jenis }}">
                </div>
        
                <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Simpan Perubahan</button>
                </div>
                </div>

        </form>
        </div>
        @endforeach
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