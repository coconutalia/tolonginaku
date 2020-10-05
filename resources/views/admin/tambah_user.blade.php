@extends('admin.layout')
@section('title', 'Tambah Anggota')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Anggota</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <<li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/user">Tabel Daftar User</a>/Tambah</li>
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
	<form action="/user/store" method="post">
		{{ csrf_field() }}
        <br/>
            <div class="form-group">
                    <label class="control-label col-sm-2" for="id">ID:</label>
                    <input class="col-sm-9" type="text" required="required" name="id">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ktm">KTM:</label>
                    <input class="col-sm-9" type="text" required="required" name="ktm">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Nama:</label>
                    <input class="col-sm-9" type="text" required="required" name="name">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fakultas">Fakultas:</label>
                    <input class="col-sm-9" type="text" required="required" name="fakultas">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="prodi">Prodi:</label>
                    <input class="col-sm-9" type="text" required="required" name="prodi">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="kode">Kode:</label>
                    <input class="col-sm-9" type="text" required="required" name="kode">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="status">Status:</label>
                    <input class="col-sm-9" type="text" name="status">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="jabatan">Jabatan:</label>
                    <input class="col-sm-9" type="text" name="jabatan">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                    <input class="col-sm-9" type="text" required="required" name="alamat">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="telepon">Telepon:</label>
                    <input class="col-sm-9" type="text" required="required" name="telepon">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <input class="col-sm-9" type="text" required="required" name="email">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password:</label>
                    <input class="col-sm-9" type="password" required="required" name="password">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Ulangi Password:</label>
                    <input class="col-sm-9" type="password" required="required" name="password">
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