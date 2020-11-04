@extends('admin.layout')
@section('title', 'Tambah Ruang')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Ruang</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/ruang">Tabel Ruang</a>/Tambah</li>
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
	<form action="/ruang/store" method="post">
		{{ csrf_field() }}
        <br/>
                <div class="form-group d-flex align-items-center">
                    <label class="control-label col-sm-2" for="id">ID:</label>
                    <input class="col-sm-9" type="text" required="required" name="id">
                </div>

                <div class="form-group d-flex align-items-center">
                    <label class="control-label col-sm-2" for="nama_ruang">Nama Ruang:</label>
                    <input class="col-sm-9" type="text" required="required" name="nama_ruang">
                </div>
        
                <div class="form-group d-flex align-items-center">
                    <label class="control-label col-sm-2" for="alamat_ruang">Alamat Ruang:</label>
                    <input class="col-sm-9" type="text" required="required" name="alamat_ruang">
                </div>

                <div class="form-group d-flex align-items-center">
                    <label class="control-label col-sm-2"  for="deskripsi">Deskripsi:</label>
                    <textarea class="col-sm-9" type="text" required="required" name="deskripsi"></textarea>
                </div>

                <div class="form-group d-flex align-items-center">
                    <label class="control-label col-sm-2" for="kuota">Kuota:</label>
                    <input class="col-sm-9" type="text" required="required" name="kuota">
                </div>
        
                <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Simpan Perubahan</button>
                </div>
                </div>

	</form>
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