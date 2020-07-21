@extends('admin.layout')
@section('title', 'Ubah Ruang')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Ruang</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <<li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/ruang">Tabel Ruang</a>/Ubah</li>
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


        <div class="container">
            @foreach($data_ruang as $data)
	        <form class="form-horizontal" action="/ruang/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}"> <br/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nama_ruang">Nama Ruang:</label>
                    <input class="col-sm-9" type="text" required="required" name="nama_ruang" value="{{ $data->nama_ruang }}">
                </div>
        
                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat_ruang">Alamat Ruang:</label>
                    <input class="col-sm-9" type="text" required="required" name="alamat_ruang" value="{{ $data->alamat_ruang }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="deskripsi">Deskripsi:</label>
                    <input class="col-sm-9" type="text" required="required" name="deskripsi" value="{{ $data->deskripsi }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="kuota">Kuota:</label>
                    <input class="col-sm-9" type="text" required="required" name="kuota" value="{{ $data->kuota }}">
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

  